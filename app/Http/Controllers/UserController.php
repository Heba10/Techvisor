<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
=======

use Illuminate\Support\Facades\Auth;
>>>>>>> ca148419e3d6cf16f286acdb46ec2c7b6aeb0ba2

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        $users=User::whereHas("roles", function($q){ $q->where("name", "user"); })->get();
        //dd($users);
        return view('admin/user/index',[
        'users' => $users
            ]);
    }
    //
    public function edit()
    {

        $userId = Auth::id();
        $user = User::find($userId);
        return view('users/edit', [
            'user' => $user
        ]);
    }
    public function show(Request $request)
    {
        $profId = $request->prof;
        $prof = User::find($profId);

        return view('professionals/show', [
            'prof' => $prof,
        ]);
    }
    public function update()
    {
        $request = request();
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/');
    }
    public function show($id)
    {   $request = request();
        $userId = $request->user;
        $user = User::find($userId);
       
        return view('admin.users.show', [
             'user' => $user
                     ]);
    }
}