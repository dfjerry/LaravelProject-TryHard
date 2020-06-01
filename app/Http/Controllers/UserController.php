<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //product Controller
    //brand Controller


    public function listUser()
    {
        $user = User::paginate(20);
        return view("user.list", [
            "users" => $user,
        ]);
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view("user.edit", ["user" => $user]);
    }

    public function updateUser($id, Request $request)
    {
        $user = User::findOrFail($id);
        $request->validate([
            "name" => "required|min:2|unique:users,name,{$id}"
        ]);

        try {

            $userImage = $user->get("image");

            if($request->hasFile("image")){
                $file = $request->file("image");

                $allow = ["png","jpg","jpeg","gif"];
                $extName = $file->getClientOriginalExtension();
                if(in_array($extName,$allow)){
                    $fileName = time().$file->getClientOriginalName();
                    $file->move(public_path("media"),$fileName);
                    $userImage = "media/".$fileName;

                }
            }
            $user->update([
                "name" => $request->get("name"),
                "image" =>$userImage,
                "email" =>  $request->get("email"),
                "telephone" =>  $request->get("telephone"),
                "address" =>  $request->get("address"),
                "password" => $request->get("password"),
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        try {
            $user->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }
    public function viewUser($id){
        $currentUser = User::findorFail($id);
        return view("user.viewuser",[
           "currentUser" => $currentUser,
        ]);
    }
    public function updateAccess($id, Request $request){
        $currentUser = User::findorFail($id);
        try{
               $currentUser->update([
                   "account_status" =>  $request->get("status"),
               ]);
               if($currentUser->__get("account_status") == "Admin Account"){
                   $currentUser->update([
                       "role" =>  1,
                   ]);
               }
               elseif (is_null($currentUser->__get("account_status"))){
                   $currentUser->update([
                       "account_status" =>  "User Account",
                   ]);
               }
               else{
                   $currentUser->update([
                       "role" =>  0,
                   ]);
               }
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }
}
