<?php

namespace App\Http\Controllers;
use App\Http\Requests\CoursecateFormRequest;
use Illuminate\Http\Request;
use App\Models\Coursecate;

class CoursecateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cate = Coursecate::all();
        return view('admin.cate.index', compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursecateFormRequest $request)
    {
        //
        $data = $request->validated();
        $cate = new Coursecate;
        $cate->name = $data['name'];
        $cate->save();
        return redirect('admin/cate')-> with('message', 'categorycourse Added Successfully');
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
    public function edit($coursecate_id)
    {
        //
        $cate = Coursecate::find($coursecate_id);
        return view('admin.cate.edit', compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoursecateFormRequest $request, $coursecate_id)
    {
        //
        $data = $request->validated();
        $cat = Coursecate::find( $coursecate_id);
        $cat->name = $data['name'];
        $cat->update();

        return redirect('admin/cate')-> with('message', 'Catcourse Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($coursecate_id)
    {
        //

        $cat = Coursecate::find($coursecate_id);
        if($cat)
        {
           $cat ->delete();
           return redirect('admin/cat')-> with('message', 'Cat Deleted Successfully');
        }
        else
        {
          return redirect('admin/cat')-> with('message', 'No Cat Id Found!!');
        }
    }
}
