<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = Auth::user();
        
        return view('Users.UserEdit',compact('user'));
    }
    public function update(Request $request, $id)
    {
        return $request;
        // $user = Auth::user($id);
        // $user->fill($request->all());
        // $user->save();
        // $user->profile->save();
        // $operacion= 'Update';
        // return view('correct', compact('operacion'));
    }
    public function store(Request $request){
        return 'nn';
    }
}
