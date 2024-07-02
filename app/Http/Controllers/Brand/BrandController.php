<?php

namespace App\Http\Controllers\Brand;
use App\Http\Controllers\Controller;
use App\Services\Api\Brands\BrandService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Redirect;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = (new BrandService())->brands();
        if($brands){
            return view('dashboard.admin.brand.index', compact('brands'));
        }

        else
            dd('error');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate data

         $validator = Validator::make($request->all(), [
            'name' => ['required', 'string','max:50'],
             'state' => ['required', 'string','in:0,1']
        ]);
 
     
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)
                                    ->withInput();
        }

        //Validation passed, processing with API storage

         $brand['name'] = $request->name;
         $brand['state'] = $request->state;

         $brand = (new BrandService)->create($brand);
        
         if($brand){
            //dd($brand->body());

            if($brand->status() == 201){

                $brand =  (json_decode((string) $brand->getBody(), true))['data'];
              
                return Redirect::back()->with('success',"Brand has been successfully added");


            }
            elseif($brand->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $brand->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured"]);
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
       dd('delete');
    }
}
