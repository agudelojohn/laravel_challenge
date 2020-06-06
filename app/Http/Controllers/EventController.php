<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Exports\EventsExport;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::all();
        $events = DB::table('events')->where('userOwner', '=', Auth::id())->get();
        $type = 'all';
        return view('Events.EventList', compact('events', 'type'));
    }
    public function listar($type)
    {
        if ($type == 'today'){
            $today =  Carbon::today();
            $events = DB::table('events')->where('userOwner', '=', Auth::id())->where('startDate', '=', $today)->get();
            return view('Events.EventList', compact('events', 'type'));
        }else{
            if($type == 'five')
            {

                $today =  date("Y/m/d");
                $user = Auth::id();
                $end = Carbon::today();
                $daysToAdd = 5;
                $end = $end->addDays($daysToAdd);
                // dd($end);
                $events = DB::table('events')->where('userOwner', '=', Auth::id())->whereBetween('startDate', [$today, $end])->get();
                return view('Events.EventList', compact('events', 'type'));
                // return $end->date;
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();
        return view('Events.EventCreate', compact('userId'));
        // return view('Events.EventCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $event = new Event();
        
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->startDate = $request->input('startDate');
        $event->endDate = $request->input('endDate');
        $event->status = '1';
        $event->userOwner = $request->input('userOwner');

        $event-> save();

        // return 'Guardado correctamente <br> <a href="/" > Home </a>';
        $operacion= 'Created';
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
        $event = Event::find($id);
        
        return view('Events.EventEdit',compact('event'));
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
        $event = Event::find($id);
        $event->fill($request->all());
        $event->save();
        // return 'Modificado correctamente <br> <a href="/" > Home </a>';
        $operacion= 'Updated';
        return view('correct', compact('operacion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        // return 'Eliminado  correctamente <br> <a href="/" > Home </a>';
        $operacion= 'Deleted';
        return view('correct', compact('operacion'));
    }
    public function EventList()
    {
        return view('Events.EventList');
    }
    public function delete($id)
    {
        $event = Event::find($id);
        return view('Events.EventDelete', compact('event'));
    }
    public function export($type) 
    {
        return (new EventsExport($type))->download('events.xlsx');        
    }
}
