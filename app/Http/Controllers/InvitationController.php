<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Invitation;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Invitations = Invitation::all();
        $Users = User::all();
        $Events = DB::table('events')->where('userOwner', '=', Auth::id())->get();
        return view('Invitations.InvitationList',compact('Events','Users', 'Invitations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $Users = User::all();
        $Events = DB::table('events')->where('userOwner', '=', Auth::id())->get();
        return view('Invitations.InvitationCreate', compact('Events', 'Users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $Users = explode( "," , $request->input('UsersList'));

        foreach ($Users as $user) {
            $inv = new Invitation();
            $inv->userInvited = $user;
            $inv->idEvent = $request->input('eventId');

            $inv->save();
        }
        $operacion= 'Invitation created ';
        return view('correct', compact('operacion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
