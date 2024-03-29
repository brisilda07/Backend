<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function onSelectThree(){
        $result = Projects::limit(3)->get();
        return $result;
    }

    public function onSelectAll(){
        $result = Projects::all();
        return $result;
    }

    public function ProjectDetails($projectId){
        $id = $projectId;
        $result = Projects::where('id', $id)->get();
        return $result;
    }
}
