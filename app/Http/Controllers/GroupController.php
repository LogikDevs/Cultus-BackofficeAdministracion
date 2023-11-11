<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groups;
class GroupController extends Controller
{
    public function ListAllGroups(){
        $groups = groups::paginate(30);
        return view('groups.groupslist', ['groups' => $groups]);
    }

    public function ListGroup(request $request){
            $group = null;
            if ($request->has('id')) {
                $id_group = $request->input('id');
                $group = groups::find($id_group);
            }
            return view('groups.group', compact('group'));  
    }

    public function index(){
        return view('groups.index');
       }
    
}
