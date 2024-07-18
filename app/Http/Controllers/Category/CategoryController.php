<?php

namespace App\Http\Controllers\Category;
use App\Http\Controllers\Controller;
use App\Services\Api\Categories\CategoryService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Session;
use Redirect;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = (new CategoryService())->categories();
         //Delete directory on page refresh
        \Illuminate\Support\Facades\Storage::deleteDirectory('categories');
        //dd($categories );
      
        if($categories || $categories==[]){
            return view('dashboard.admin.category.index', compact('categories'));
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
       
         $category['name'] = $request->name;
         $category['state'] = $request->state;
         $category['parent'] = $request->parent;

         $category = (new CategoryService)->create($category);
        //dd($category->body());
         if($category){

            if($category->status() == 201){

                //Now uploading Category's logo
                $id = json_decode((string) $category->getBody(), true)['data']['id'];
                $token=Session::get('tokenUser');
                foreach (\Illuminate\Support\Facades\Storage::files('categories') as $filename) {
                    $logo = \Illuminate\Support\Facades\Storage::get($filename);
                    //dd($logo);
                    $responseImage = Http::attach(
                        'file', $logo, $filename
                    )->withToken($token)->post($url."/api/v1/category/image", [
                            'category_id' => $id,
                    ]);

                    //dd($responseImage->getBody());

                }
                $category =  (json_decode((string) $category->getBody(), true))['data'];
              
                return Redirect::back()->with('success',"Category has been successfully added");


            }
            elseif($category->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $category->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured"]);
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $category = (new CategoryService())->getCategory($id);
         //Delete directory on page refresh
        \Illuminate\Support\Facades\Storage::deleteDirectory('categories');
        //dd($category);
        $categories = (new CategoryService())->categories();
        if($category){
            return view('dashboard.admin.category.edit', compact('category', 'categories'));
        }

        else
            dd('error');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($category)
    { 
       //dd($category);
       $response = (new CategoryService)->delete($category);

       if($response->status() == 204){
        return Redirect::back()->with('success',"Category has been successfully deleted");
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
        \Illuminate\Support\Facades\Storage::makeDirectory('categories');
        //$request->file->move(public_path('images'), $imageName);
        $request->file->storeAs('categories', $imageName);
        // if($extension === 'jpg')
        //     $request->file->move(storage_path('app\Categories',$imageName));
        // else
        //     $request->file->move(storage_path('app\Categories',$imageName));

                
                return response('Logo addedd successfuly', 200);
            }

    }

    public function categoryImage($id, $path)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/categoryImage/'.$id.'/'.$path);
        return $response;

    }

    public function deleteImage(Request $request){

         \Illuminate\Support\Facades\Storage::deleteDirectory('categories');
       
          return response("deleted successfully", 200)
                  ->header('Content-Type', 'application/json');
    }
}
