<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\parentdatas;
use App\Models\childrendatas;
use App\Models\childcourse;
use App\Models\coursedatas;

use Auth;



class ParentController extends Controller
{
    public function view_parent_main(){
        return view('parent_module/main');
    }
    public function view_parent_support(){
        return view('parent_module/support');
    }
    public function classdojo(){
        return view('parent_module/classdojo');
    }
    public function parenttraining(){
        return view('parent_module/training');
    }
    public function checkparent(){
        $current=auth()->user()->id;

        // Retrieve a parent with ID 1
        $parent = parentdatas::find($current);

// Retrieve all children associated with the parent
        $children = $parent->childrendata;


        return view('parent_module.children', compact('parent', 'children'));

        
    }
    public function showDetailsParentChild($childId)
    {
        $child = childrendatas::findOrFail($childId);

        $columnName = 'child_id'; // Replace with the actual column name you want to search
        $columnValue = $childId; // Replace with the value you want to search for

        $data = childcourse::where($columnName, $columnValue)->first();
        $course = coursedatas::findOrFail($data->course_id);

        // return $course;




        return view('parent_module.show_child_detail',  ['course' => $course, 'child' => $child]);

    }

}
