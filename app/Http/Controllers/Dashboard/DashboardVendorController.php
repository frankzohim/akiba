<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Services\Api\Stores\StoreService;
use  App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\User\UserTypeService;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;


class DashboardVendorController extends Controller
{

    public function index(){

            $user = Session::get('currentUser');
            //dd($user);
            //Ensuring we are having an escort
            if($user && $user->role_id === 2){

                //Fetching store, products & others data
                $stores  = (new StoreService())->getVendorStore();
                //dd($stores);
                return view('dashboard.vendor.index', compact('user', 'stores'));

            }
            else{
                return to_route("homepage");
            }

    }

}
