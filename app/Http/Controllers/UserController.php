<?php namespace App\Http\Controllers;

use App\User;
use Request;

class UserController extends Controller
{ 
    public function index()
    {
        return User::all();
    }

    public function create(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return "success";
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return "success";
    }

    public function delete(Request $request, $id)
    {
        User::find($id)->delete();
        return "success";
    }
}
