<?php

namespace App\Services\User;

class UserTypeService{

    public function checkRole($role_id){
        
        if($role_id===1){
            return to_route('admin.dashboard');
        }else if($role_id===2){
            return to_route('db.vendor.index');
        }
        else if($role_id===3){
            return to_route('db.customer.index');
        }
        else if($role_id===4){
            return to_route('db.shipper.index');
        }
    }
}
