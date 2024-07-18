<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Services\Api\Stores\StoreService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = (new StoreService())->getVendorStore();
        if($store != null){
            $store = $store[0];
            //dd($Product);
            //Delete directory on page refresh
            \Illuminate\Support\Facades\Storage::deleteDirectory('products');
            return view('dashboard.vendor.product.index', compact('store'));
        }
        else
         return redirect()->route('db.vendor.index');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

         //Delete directory on page refresh
         $user = Session::get('currentUser');
        \Illuminate\Support\Facades\Storage::deleteDirectory('products./'.$user->id);
        return view('dashboard.vendor.product.create');
    }

    /**
     * Product a newly created resource in storage.
     */
    public function Product(Request $request)
    {
        
         //Retrieve URL API
        $url=(new UrlApiService())->getUrl();
        //Validate data

        //  $validator = Validator::make($request->all(), [
        //     'name' => ['required', 'string','max:50'],
        //     'email' => ['required', 'email','max:50'],
        //     'phone' => ['required', 'integer','max:50'],
        //     'description' => ['required', 'string','max:2000']
        // ]);
 
     
        // if($validator->fails()) {
        //     return Redirect::back()->withErrors($validator)
        //                             ->withInput();
        // }

        //Validation passed, processing with API storage
       
        //dd($request->phone);
         $Product['name'] = $request->name;
         $Product['email'] = $request->email;
         $Product['phone'] = $request->phone;
         $Product['description'] = $request->description;

         $Product = (new ProductService)->create($Product);
        //dd($Product->body());
         if($Product){

            if($Product->status() == 201){

                //Now uploading Product's logo
                $id = json_decode((string) $Product->getBody(), true)['data']['id'];
                $token=Session::get('tokenUser');
                foreach (\Illuminate\Support\Facades\Storage::files('Products') as $filename) {
                    $logo = \Illuminate\Support\Facades\Storage::get($filename);
                    //dd($logo);
                    $responseImage = Http::attach(
                        'file', $logo, $filename
                    )->withToken($token)->post($url."/api/v1/Product/image", [
                            'Product_id' => $id,
                    ]);

                    //dd($responseImage->getBody());

                }
                $Product =  (json_decode((string) $Product->getBody(), true))['data'];
              
                return redirect()->route('Product')->with('success',"Product has been successfully added");


            }
            elseif($Product->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $Product->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured"]);
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $Product = (new ProductService())->getProduct($id);
         //Delete directory on page refresh
        \Illuminate\Support\Facades\Storage::deleteDirectory('Products');
        //dd($Product);
        $Products = (new ProductService())->Products();
        if($Product){
            return view('dashboard.admin.Product.edit', compact('Product', 'Products'));
        }

        else
            dd('error');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $Product)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($Product)
    { 
       //dd($Product);
       $response = (new ProductService)->delete($Product);

       if($response->status() == 204){
        return Redirect::back()->with('success',"Product has been successfully deleted");
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
        \Illuminate\Support\Facades\Storage::makeDirectory('Products');
        //$request->file->move(public_path('images'), $imageName);
        $request->file->ProductAs('Products', $imageName);
        // if($extension === 'jpg')
        //     $request->file->move(storage_path('app\Products',$imageName));
        // else
        //     $request->file->move(storage_path('app\Products',$imageName));

                
                return response('Image addedd successfuly', 200);
            }

    }

    public function ProductImage($id, $path)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/ProductImage/'.$id.'/'.$path);
        return $response;

    }

    public function deleteImage(Request $request){

        //  return response($request->filename, 200)
        //           ->header('Content-Type', 'application/json');
        foreach (\Illuminate\Support\Facades\Storage::files('Products') as $filename) {
                       
              
                if(str_contains($filename, $request->filename)){
                     \Illuminate\Support\Facades\Storage::delete($filename);
                }
                        
                   

                }
        
       
          return response("deleted successfully", 200)
                  ->header('Content-Type', 'application/json');
    }
}
