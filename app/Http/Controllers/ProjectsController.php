<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Projects;
use DB;

class ProjectsController extends Controller
{
    public function getAllProjects() {
        return view("projects.index", [
            "projects" => Projects::paginate(20)
        ]);
    }
    
    public function getProject($projID) {
        return view("projects.project", [
            "thisProject" => Projects::where('id', $projID)->FirstOrFail()
        ]);
    }
}
