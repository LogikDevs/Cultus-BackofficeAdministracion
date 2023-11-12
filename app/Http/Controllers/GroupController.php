<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groups;
use App\Models\user;
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
    
    public function destroy(groups $group){
        $group->delete();
        return view('groups.index')->with('success', 'Grupo eliminado exitosamente');
    }   
   
    public function edit(groups $group){
        return view('groups.edit', compact('group'));
    }

    public function update(Request $request, groups $group){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'privacy' => 'required',
        ]);
        $group->name = $request->name;
        $group->description = $request->description;
        $group->privacy = $request->privacy;
        $group->save();
        return view('groups.index')->with('success', 'Grupo actualizado exitosamente');
    }

    public function GroupIntegrates(groups $group){
        $users = $group->users()->paginate(30);
        return view('users.userslist', compact('users'));  
    }
}
