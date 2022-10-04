<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coze;
use App\Http\Requests\Admin\CozFormRequest;

class CozeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Coze::all();
        return view('admin.coze.index',['courzes'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.coze.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CozFormRequest $request)
    {
        //
        $data = $request->validated();
        $coz = new Coze();
        $coz->instructor_name = $data['instructor_name'];
        $coz->description = $data['description'];
        $coz->cost= $data['cost'];

        if ($request->hasfile('image_cover'))
        {

            $file = $request->file('image_cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/coz/', $filename);
            $coz->image_cover = $filename;
        }

        if ($request->hasfile('image_instructor'))
        {

            $file = $request->file('image_instructor');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/coz/', $filename);
            $coz->image_instructor = $filename;
        }


        $coz->save();
        return redirect('admin/courzes')-> with('message', 'Coz Added Successfully');
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

            $data = Coze::find($id);
            return view('admin.coze.edit',['coz'=>$data]);
        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CozFormRequest $request, $id)
    {
        //

        $data = $request->validated();
        $coz = Coze::find($id);
        $coz->instructor_name = $data['instructor_name'];
        $coz->description = $data['description'];
        $coz->cost= $data['cost'];

        if ($request->hasfile('image_cover'))
        {

            $file = $request->file('image_cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/coz/', $filename);
            $coz->image_cover = $filename;
        }

        if ($request->hasfile('image_instructor'))
        {

            $file = $request->file('image_instructor');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/coz/', $filename);
            $coz->image_instructor = $filename;
        }


        $coz->update();

        return redirect('admin/courzes')-> with('message', 'Coz Updated Successfully');


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
