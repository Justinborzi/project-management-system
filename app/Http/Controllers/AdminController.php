<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;
use App\Projects;
use App\Users;


class AdminController extends Controller
{
    public function showAllUsers() {
        return view('admin', [
            "userObj" => Users::all()
        ]);
    }

    public function editUser($id)
    { 
        $user = Users::where('id', $id)->FirstOrFail();
        $user->InsertUserData();
    }
}
