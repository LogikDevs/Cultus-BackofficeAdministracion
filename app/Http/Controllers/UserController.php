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

    public function ListUserMail(request $request){
        {
            $user = null;
           
            $email = $request->input('email');
            $users = User::where('email', 'LIKE', "%{$email}%")->paginate(30);
            return view('users.email', compact('users'));
        }
    }

    public function destroy(User $user){
    $user->delete();
    return view('users.index')->with('success', 'Usuario eliminado exitosamente');
    }   

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required | integer',
            'email' => 'required| email',
        ]);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->email = $request->email;

        $user->update();
        return view('users.edit', compact('user'))->with('success', 'Usuario actualizado exitosamente');
    }
}
