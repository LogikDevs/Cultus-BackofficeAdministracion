<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserController extends Controller
{

    public function index(){
     return view('users.index');
    }

    public function ListAllUsers(){
        $users = user::paginate(30);
        return view('users.userslist', ['users' => $users]);
    }

    public function ListUser(request $request){
        {
            $user = null;
        
            if ($request->has('id')) {
                $id = $request->input('id');
                $user = User::find($id);

            }
        
            return view('users.user', compact('user'));
        }
    }

    public function destroy(User $user){
    $user->delete();
    return view('users.index')->with('success', 'Usuario eliminado exitosamente');
    }   
}
