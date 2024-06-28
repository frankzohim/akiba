<?php
/**
 * Author : Frank Zohim
 * Dashboad Admin Controller
 */
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\StatService;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Services\Api\Ads\AdsService;

class DashboardAdminController extends Controller
{
    public function index(){

           $user = Session::get('currentUser');

            //Ensuring we are having an admin connected
            if($user && $user->role_id === 1){ 
                    
                //Rendering admin dashboard
                return view('dashboard.admin.index', compact('user'));
            }
                
            else
                return to_route("homepage");

    }
}
