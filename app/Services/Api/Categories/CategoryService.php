<?php

namespace App\Services\Api\Categories;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CategoryService{

     public function categories(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/categories");
               
                $Categories = json_decode((string) $response->getBody(), true);
                
                if($Categories['data'] === null){
                    return [];
                }
                else{
                    return $Categories['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

     public function getCategories(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $response = Http::get($url."/api/categoriesList");
                //dd($response->body());
                $Categories = json_decode((string) $response->getBody(), true);
                //dd($Categories);
                if($Categories['data'] === null){
                    return [];
                }
                else{
                    return $Categories['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getCategory($id){
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/categories/".$id);
                //dd($response->body());
                $category = json_decode((string) $response->getBody(), true);

                if($category['data'] === null){
                    return null;
                }
                else{
                    return $category['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($Category){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->post($url."/api/v1/categories", [
                'name' => $Category['name'],
                'state' => $Category['state'],
                'parent' => $Category['parent'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
        
    }

    public function delete($category){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->delete($url."/api/v1/categories/".$category, [
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
