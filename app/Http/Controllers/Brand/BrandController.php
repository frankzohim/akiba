<?php

namespace App\Http\Controllers\Brand;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Services\Api\Brands\BrandService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Session;
use Image;
use Redirect;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = (new BrandService())->brands();
         //Delete directory on page refresh
        \Illuminate\Support\Facades\Storage::deleteDirectory('brands');
        //dd($brands );
        if($brands || $brands==[]){
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
         //Retrieve URL API
        $url=(new UrlApiService())->getUrl();
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

            if($brand->status() == 201){

                //Now uploading brand's logo
                $id = json_decode((string) $brand->getBody(), true)['data']['id'];
                $token=Session::get('tokenUser');
                foreach (\Illuminate\Support\Facades\Storage::files('brands') as $filename) {
                    $logo = \Illuminate\Support\Facades\Storage::get($filename);
                    //dd($logo);
                    $responseImage = Http::attach(
                        'file', $logo, $filename
                    )->withToken($token)->post($url."/api/v1/brand/image", [
                            'brand_id' => $id,
                    ]);

                    //dd($responseImage->getBody());

                }
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
    public function delete($brand)
    {
       $response = (new BrandService)->delete($brand);

       if($response->status() == 204){
        return Redirect::back()->with('success',"Brand has been successfully deleted");
       }
       else{
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured why deleting"]);
       }
    }

    public function uploadImage(Request $request){
      
        $image = $request->file('file');
        $extension = $image->getClientOriginalExtension();

        $allowedfileExtension=['jpg','png','jpeg'];

        $check = in_array($extension,$allowedfileExtension);

        

        if(!$check){

            return response('Extension invalide', 400);
        }
        else{

            
        //Storing file in disk
        // $image = Image::make($request->file('file'));
        $imageName = $request->file_id . '_'.$request->file('file')->getClientOriginalName();
              
        //Make directory on page refresh
        \Illuminate\Support\Facades\Storage::makeDirectory('brands');
        //$request->file->move(public_path('images'), $imageName);
        $request->file->storeAs('brands', $imageName);
        // if($extension === 'jpg')
        //     $request->file->move(storage_path('app\brands',$imageName));
        // else
        //     $request->file->move(storage_path('app\brands',$imageName));

                
                return response('Logo addedd successfuly', 200);
            }

    }

    public function deleteImage(Request $request){

         \Illuminate\Support\Facades\Storage::deleteDirectory('brands');
       
          return response("deleted successfully", 200)
                  ->header('Content-Type', 'application/json');
    }
}
