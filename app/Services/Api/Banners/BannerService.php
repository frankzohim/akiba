<?php

namespace App\Services\Api\Brands;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class BrandService{

     public function brands(){
        
        $url=(new UrlApiService())->getUrl();
            
            try{

                $response = Http::asForm()->get($url."/api/brands");
              
                $brands = json_decode((string) $response->getBody(), true);

                if($brands['data'] === null){
                    return null;
                }
                else{
                    return $brands['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

    public function getbrand($id){
        
        $url=(new UrlApiService())->getUrl();
            
            try{

                $response = Http::asForm()->get($url."/api/brands/".$id);
                $brand = json_decode((string) $response->getBody(), true);

                if($brand['data'] === null){
                    return null;
                }
                else{
                    return $brand['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($brand){

        $url=(new UrlApiService())->getUrl();
        $status = ($brand['status'] == "on") ? 1 : 0;
        
        if($brand['uploadedFile']){
         
            $image = $brand['myfile'];
            //Storing file in disk
            $fileName = $image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
            $image->storeAs('brands/'.$brand['id'], $fileName);

            $photo = \Illuminate\Support\Facades\Storage::get('brands/'.$brand['id'].'/'.$fileName);
        //dd($status);
            try{

                $response = Http::attach('myfile', $photo, $fileName)->post($url."/api/brands", [
                            'id' => $brand['id'],
                            'uploadedFile' => 1,
                            'status' => $status,
                        ]);

                dd($response->body());

                //Delete directory
                \Illuminate\Support\Facades\Storage::deleteDirectory('brands/'.$brand['id']);

                return $response;

            }
            catch(\Exception $e){
                return $e;
            }
        }
        else{

            try{

                $response = Http::put($url."/api/brands/".$brand['id'], [
                             'id' => $brand['id'],
                             'uploadedFile' => 0,
                             'status' => $status,
                        ]);

                //dd($response->body());

                return $response;

            }
            catch(\Exception $e){
                return $e;
            }
        }
    }
}
