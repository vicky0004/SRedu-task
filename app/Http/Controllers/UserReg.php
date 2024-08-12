<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserReg extends Controller
{

    public function index(){
        $users = User::all();
        return view('index',compact('users'));
    }
    
    public function register(){
        return view('registration');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'mobile' => 'required|string|max:15',
            'password' => 'nullable',
        ]);
        
        $user = new User;
        $user->name = ucwords(strtolower($request['name']));
        $user->email = strtolower($request['email']);
        $user->mobile = $request['mobile'];
        $user->password = bcrypt($request['password']);
        $user->save();
        return redirect('/')->with('success', 'User Updated successfully.');
    }

    public function update($id){
        $user= User::find($id);
        return view('update',compact('user'));
    }

    public function saveUpdate(Request $request,$id){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'mobile' => 'required|string|max:15',
            'password' => 'nullable',
        ]);

        $user = User::find($id);
        $user->name = ucwords(strtolower($request['name']));
        $user->email = strtolower($request['email']);
        $user->mobile = $request['mobile'];
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->update();
        return redirect('/')->with('success', 'User Updated successfully.');
    }
    public function delete($id){
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect('/')->with('success', 'User deleted successfully.');
        } else {
            return redirect('/')->with('error', 'User not found.');
        }
    }

    

}
