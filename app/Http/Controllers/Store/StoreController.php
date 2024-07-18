<?php

namespace App\Http\Controllers\Store;
use App\Http\Controllers\Controller;
use App\Services\Api\Stores\StoreService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Str;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = (new StoreService())->getVendorStore();
        if($store != null){
            $store = $store[0];
            //dd($store);
            //Delete directory on page refresh
            \Illuminate\Support\Facades\Storage::deleteDirectory('stores');
            return view('dashboard.vendor.store.index', compact('store'));
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
        \Illuminate\Support\Facades\Storage::deleteDirectory('stores');
        //dd('hi');
        return view('dashboard.vendor.store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
         $store['name'] = $request->name;
         $store['email'] = $request->email;
         $store['phone'] = $request->phone;
         $store['description'] = $request->description;

         $store = (new storeService)->create($store);
        //dd($store->body());
         if($store){

            if($store->status() == 201){

                //Now uploading store's logo
                $id = json_decode((string) $store->getBody(), true)['data']['id'];
                $token=Session::get('tokenUser');
                foreach (\Illuminate\Support\Facades\Storage::files('stores') as $filename) {
                    $logo = \Illuminate\Support\Facades\Storage::get($filename);
                    //dd($logo);
                    $responseImage = Http::attach(
                        'file', $logo, $filename
                    )->withToken($token)->post($url."/api/v1/store/image", [
                            'store_id' => $id,
                    ]);

                    //dd($responseImage->getBody());

                }
                $store =  (json_decode((string) $store->getBody(), true))['data'];
              
                return redirect()->route('store')->with('success',"store has been successfully added");


            }
            elseif($store->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $store->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured"]);
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $store = (new storeService())->getstore($id);
         //Delete directory on page refresh
        \Illuminate\Support\Facades\Storage::deleteDirectory('stores');
        //dd($store);
        $stores = (new storeService())->stores();
        if($store){
            return view('dashboard.admin.store.edit', compact('store', 'stores'));
        }

        else
            dd('error');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestoreRequest $request, store $store)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($store)
    { 
       //dd($store);
       $response = (new storeService)->delete($store);

       if($response->status() == 204){
        return Redirect::back()->with('success',"store has been successfully deleted");
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
        \Illuminate\Support\Facades\Storage::makeDirectory('stores');
        //$request->file->move(public_path('images'), $imageName);
        $request->file->storeAs('stores', $imageName);
        // if($extension === 'jpg')
        //     $request->file->move(storage_path('app\stores',$imageName));
        // else
        //     $request->file->move(storage_path('app\stores',$imageName));

                
                return response('Image addedd successfuly', 200);
            }

    }

    public function storeImage($id, $path)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/storeImage/'.$id.'/'.$path);
        return $response;

    }

    public function deleteImage(Request $request){

        //  return response($request->filename, 200)
        //           ->header('Content-Type', 'application/json');
        foreach (\Illuminate\Support\Facades\Storage::files('stores') as $filename) {
                       
              
                if(str_contains($filename, $request->filename)){
                     \Illuminate\Support\Facades\Storage::delete($filename);
                }
                        
                   

                }
        
       
          return response("deleted successfully", 200)
                  ->header('Content-Type', 'application/json');
    }
}
