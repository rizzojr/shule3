<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AboutFormRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = About::all();
        return view('admin.about.index',['abouts'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutFormRequest $request)
    {
        //

        $data = $request->validated();
        $about = new About();
        $about->who_we_are = $data['who_we_are'];
        $about->what_we_do = $data['what_we_do'];
        $about->why_you_join= $data['why_you_join'];
        $about->what_our_goal= $data['what_our_goal'];

        if ($request->hasfile('image_cover_one'))
        {

            $file = $request->file('image_cover_one');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/about/', $filename);
            $about->image_cover_one = $filename;
        }

        if ($request->hasfile('image_cover_two'))
        {

            $file = $request->file('image_cover_two');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/about/', $filename);
            $about->image_cover_two = $filename;
        }


        if ($request->hasfile('image_cover_three'))
        {

            $file = $request->file('image_cover_three');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/about/', $filename);
            $about->image_cover_three = $filename;
        }



        $about->save();
        return redirect('admin/abouts')-> with('message', 'About Added Successfully');
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
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {

        $request ->validate([

        ]);

        $about ->update($request->all());
        return redirect('admin/abouts')->with('message', 'updated Successfull');
        /*
        $data = $request->validated();
        $about = About::find($id);
        $about->who_we_are = $data['who_we_are'];
        $about->what_we_do = $data['what_we_do'];
        $about->why_you_join = $data['why_you_join'];
        $about->what_our_goal = $data['what_our_goal'];


        if ($request->hasfile('image_cover_one'))
        {

            $file = $request->file('image_cover_one');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/about/', $filename);
            $about->image_cover_one = $filename;
        }

        if ($request->hasfile('image_cover_two'))
        {

            $file = $request->file('image_cover_two');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/about/', $filename);
            $about->image_cover_two = $filename;
        }


        if ($request->hasfile('image_cover_three'))
        {

            $file = $request->file('image_cover_three');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file ->move('uploads/about/', $filename);
            $about->image_cover_three = $filename;
        }

        $about->update();
        return redirect('admin/abouts')-> with('message', 'About Added Successfully');
        */
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
