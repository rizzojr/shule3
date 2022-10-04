<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\EventFormRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Event::all();
        return view('admin.event.index',['events'=>$data]);

    }

    public function all()
    {
        //
       // $data = Event::all();
       // return view('frontend.event',['events'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {

        $data = $request->validated();
        $event = new Event();
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->start_time= $data['start_time'];
        $event->end_time = $data['end_time'];
        $event->date = $data['date'];
        $event->month = $data['month'];
        $event->location = $data['location'];
        if ($request->hasfile('image'))
        {

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/event/', $filename);
            $event->image = $filename;
        }

        $event->user_id = Auth::user()->id;
        $event->save();
        return redirect('admin/events')-> with('message', 'Event Added Successfully');

       // 'user_id'=>Auth::user()->id

        /*
       * $validated = $request->validate([
        *    'name'=>'required',
       *     'date'=>'required',
       *     'description'=>'required',
            'time'=>'required'
        ]);

        $img = $request->file('image')->store('public/events');

        $data = Event::create([
            'name'=>$validated['name'],
            'date'=>$validated['date'],
            'description'=>$validated['description'],
            'time'=>$validated['time'],
            'image'=>$img,
            'user_id'=>Auth::user()->id
        ]);
        return view('admin.event.show',['event'=>$data]);
        */
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
        $data = Event::find($id);
        return view('admin.event.show',['event'=>$data]);
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

        $data = Event::find($id);
        return view('admin.event.edit',['event'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, $id)
    {
        //
        $data = $request->validated();
        $event = Event::find($id);
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->start_time = $data['start_time'];
        $event->end_time = $data['end_time'];
        $event->date = $data['date'];
        $event->month = $data['month'];
        $event->location = $data['location'];
        if ($request->hasfile('image'))
        {

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/event/', $filename);
            $event->image = $filename;
        }

        $event->update();

        return redirect('admin/events')-> with('message', 'Event Updated Successfully');

        /*
        $validated = $request->validate([
            'name'=>'required',
            'date'=>'required',
            'description'=>'required',
            'time'=>'required'
        ]);



        $data->update([
            'name'=>$validated['name'],
            'date'=>$validated['date'],
            'description'=>$validated['description'],
            'time'=>$validated['time'],
            'user_id'=>Auth::user()->id
        ]);
        */
      //  return redirect()->action([EventController::class,'show'],['event'=>$data->id]);
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
        $data = Event::find($id);
        $data->delete();
        $events = Event::all();
        return view('admin.event.index',['events'=>$events]);
    }
}
