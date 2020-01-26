<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;
use App\Projects;
use App\Users;


class AdminController extends Controller
{

    public function showDashboard() {
        return view("admin.index");
    }

    public function showAllUsers() {
        return view('admin.users', [
            "userObj" => Users::all() ? Users::all() : "No Users Found!"
        ]);
    }

    public function displayUser($id) {
        return view('users', [
            "user" => Users::where('id', $id)->FirstOrFail() ? Users::where('id', $id)->FirstOrFail() : "User cannot be found!"
        ]);
    }

    public function editUser($id)
    { 
        $user = Users::where('id', $id)->FirstOrFail();
        //$user->InsertUserData();
    }
}
