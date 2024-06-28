<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use  App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\User\UserTypeService;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;

class DashboardCustomerController extends Controller
{

    public function index(){

            $user = Session::get('currentUser');

            //Ensuring we are having a customer
            if($user && $user->role_id === 3){
                    
                //Rendering customer dashboard
                return view('dashboard.customer.index', compact('user'));
            }
                
            else
                return to_route("homepage");

    }

}
