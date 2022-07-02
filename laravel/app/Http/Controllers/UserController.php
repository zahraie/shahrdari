<?php
namespace APP\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class UserController
{
    public function getPrivilege()
    {
        $user = Auth::user();
        if($user->Privilege()->find(1)!= null || $user->Privilege()->find(2)!= null || $user->Privilege()->find(3)!= null || $user->Privilege()->find(4)!= null)
        {
            return view('panel');
        }
        else {
            return redirect(url('/'));
        }
    }
    public function getNewManager()
    {
        $user = Auth::user();
        if($user->Privilege()->find(1)!= null)
        {
            return view('new-manager');
        }
        else{
            return redirect(url('/panel'));
        }
    }
    public function postNewManager()
    {
        $user = Auth::user();
        if($user->Privilege()->find(1)!= null)
        {
            $register = new RegisterController();
            $validator = $register->validator(Request::input());
            if ($validator->fails()) {
                return $validator->messages()->toJson();
            }
            // Create new user
            $user = new User();
            $user->name = Request::input('name');
            $user->email = Request::input('email');
            $user->password = Hash::make(Request::input('password'));
            $user->save();
            $user->Privilege()->attach(Request::input('privileges'));
            return redirect(url('panel/manager-added'));
        }
        else{
            return redirect(url('/panel'));
        }
    }
}