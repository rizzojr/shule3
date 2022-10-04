<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LevelFormRequest;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = Level::all();
        return view('admin.level.index', compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.level.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelFormRequest $request)
    {
        //
        $data = $request->validated();
        $level = new Level;
        $level->name = $data['name'];
       // $level->user_id = Auth::user()->id;
        $level->save();
        return redirect('admin/level')-> with('message', 'Level Added Successfully');
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
    public function edit($level_id)
    {
        //
        $level = Level::find($level_id);
        return view('admin.level.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LevelFormRequest $request, $level_id)
    {
        //
        $data = $request->validated();
        $level = Level::find( $level_id);
        $level->name = $data['name'];
        $level->update();

        return redirect('admin/level')-> with('message', 'Level Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($level_id)
    {
        //

        $level = Level::find($level_id);
        if($level)
        {
           $level ->delete();
           return redirect('admin/level')-> with('message', 'Level Deleted Successfully');
        }
        else
        {
          return redirect('admin/level')-> with('message', 'No Level Id Found!!');
        }
    }
}
