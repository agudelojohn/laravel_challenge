<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = Auth::user();
        
        return view('Users.UserEdit',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        // return 'Modificado correctamente <br> <a href="/" > Home </a>';
        $operacion= 'Updated';
        return view('correct', compact('operacion'));
    }
    public function store(Request $request){
        return 'nn';
    }
}
