@extends('layouts.backoffice.admin.app')
@section('title', 'Brand\'s List')
@section('page_title', 'Brands')
@section('content')


 @if($errors->any())
        <div class="alert alert-danger" role="alert">
          
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        </div>
@endif

@if(Session::get("success"))
                       
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif
 <section class="ps-dashboard ps-items-listing">
                
                <div class="ps-section__left">
                    @if(count($brands))
                    <div class="table-responsive">
                        <table class="table ps-table">
                            <thead>
                                <tr>
                                    <th>Brand name</th>
                                    <th>State</th>
                                    <th>Number of products</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td><strong>{{ $brand['name']}}</strong></td>
                                    <td> @if ($brand['state'] == 1)
                                            <span class="ps-badge success">Publish</span>
                                        @else
                                            <span class="ps-badge gray">Unpublish</span>
                                        @endif
                                    </td>
                                    <td>0</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#deleteModal{{ $brand['id'] }}">Delete</a>
                                        </div>
                                        </div>
                                          <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $brand['id'] }}" tabindex="-1" 
                                                    role="dialog" aria-labelledby="exampleModalLabel{{ $brand['id'] }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Deletion</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="get" action="{{ route('brand.delete',['id' => $brand['id']]) }}" id="delete-form{{$brand['id']}}">
                                                            @csrf
                                                            <p>{{ __('Do you really want to delete this item') }}</p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                     No brands
                    @endif
                    <div class="ps-section__footer">
                        <p>Show 5 in 30 items.</p>
                        <ul class="pagination">
                            <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ps-section__right">
                    <form class="ps-form ps-form--new" action="{{route('brand.store')}}" method="post">
                        @csrf
                        <div class="ps-form__content">
                            <div class="form-group">
                                <label>Name<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" name='name' value="{{ old('name') }}" id="brand_name" placeholder="Enter brand name" required/>
                            </div>
                         
                            <div class="form-group form-group--select">
                                <label>Status
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" name='state' title="Status">
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                          
                        </div>
                        <div class="ps-form__bottom">
                            <button class="ps-btn ps-btn--gray" id="reset-btn" type='button'>Reset</button>
                            <button class="ps-btn ps-btn--sumbit success">Add new</button>
                        </div>
                    </form>
                </div>
            </section>
        <script>
            document.querySelector('#reset-btn').addEventListener('click', function(){
                document.querySelector('#brand_name').value = '';
            });
        </script>
@endsection

