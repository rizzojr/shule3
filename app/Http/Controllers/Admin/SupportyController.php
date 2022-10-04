<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supporty;
use App\Http\Requests\Admin\SupportyFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportyController extends Controller
{
    //

    public function index()
    {
        $supporters = Supporty::all();
        return view('admin.supporty.index', compact('supporters'));
    }

    public function create()
    {
        return view('frontend.support');
    }

    public function store(SupportyFormRequest $request)
    {
        $data = $request->validated();

        $supporty = new Supporty;
       
        $supporty->name = $data['name'];
        $supporty->email = $data['email'];
        $supporty->phone = $data['phone'];
        $supporty->message = $data['message'];

        $supporty -> save();

        return back()->with('success','Congratulations your application has been received !!');
    }
}
