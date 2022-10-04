<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foundation;
use App\Models\Individual;
use App\Models\Pa;
use App\Models\Studio;


class DataController extends Controller
{
    
    public function foundationStore(Request $request)
    {
        // validate data
        $validated = $request->validate([
            'instrument' => 'required|string',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:foundations,email',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'dob' => 'required|date',
            'guardian' => 'nullable|string|max:255',
            'message' => 'required|max:255',
        ]);
        $foundation = new Foundation;
        $foundation->instrument = $request->get('instrument');
        $foundation->name = $request->get('name');
        $foundation->gender = $request->get('gender');
        $foundation->address = $request->get('address');
        $foundation->email = $request->get('email');
        $foundation->phone = $request->get('phone');
        $foundation->dob = $request->get('dob');
        $foundation->guardian = $request->get('guardian');
        $foundation->message = $request->get('message');

        $foundation->save();

        return back()->with('success','Congratulations your application has been received !!');
    }


    // get all foundation applications
    public function foundationGetAll() {

        $apps = Foundation::all();
        return view('admin.application.foundation', compact('apps'));
    
    }


    public function individualStore(Request $request)
    {
        // validate data
        $validated = $request->validate([
            'instrument' => 'required|string',
            'custom' => 'nullable|string|max:255',
            'course_name' => 'required|string|max:255',
            'course_type' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:foundations,email',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'dob' => 'required|date',
            'guardian' => 'nullable|string|max:255',
            'message' => 'required|max:255',
        ]);
        $individual = new Individual;
       
        $instrument = "";
        if($request->get('instrument') == "Other") {
          $instrument =  $request->get('custom');;
        }else {
          $instrument =  $request->get('instrument');
        }
        $individual->instrument = $instrument;
        $individual->course_name = $request->get('course_name');
        $individual->course_type = $request->get('course_type');
        $individual->duration = $request->get('duration');
        $individual->name = $request->get('name');
        $individual->gender = $request->get('gender');
        $individual->address = $request->get('address');
        $individual->email = $request->get('email');
        $individual->phone = $request->get('phone');
        $individual->dob = $request->get('dob');
        $individual->guardian = $request->get('guardian');
        $individual->message = $request->get('message');

        $individual->save();

        return back()->with('success','Congratulations your application has been received !!');
    }

    // get all indv applications
    public function individualGetAll() {

        $apps = Individual::all();
        return view('admin.application.individual', compact('apps'));
    
    }


    public function paStore(Request $request)
    {
        // validate data
        $validated = $request->validate([
            'event' => 'required|string',
            'songs' => 'required|integer',
            'date' => 'required|date',
            'company' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:foundations,email',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'message' => 'required|max:255',
        ]);
        $pa = new Pa;
        $pa->event = $request->get('event');
        $pa->songs = $request->get('songs');
        $pa->date = $request->get('date');
        $pa->company = $request->get('company');
        $pa->contact = $request->get('contact');
        $pa->position = $request->get('position');
        $pa->address = $request->get('address');
        $pa->email = $request->get('email');
        $pa->phone = $request->get('phone');
        $pa->message = $request->get('message');

        $pa->save();

        return back()->with('success','Congratulations your application has been received !!');
    }

    // get all pa applications
    public function paGetAll() {

        $apps = Pa::all();
        return view('admin.application.pa', compact('apps'));
    
    }


    public function studioStore(Request $request)
    {
        // validate data
        $validated = $request->validate([
            'record' => 'required|string',
            'songs' => 'required|integer',
            'instrument' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:foundations,email',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'message' => 'required|max:255',
        ]);
        $studio = new Studio;
        $studio->record = $request->get('record');
        $studio->songs = $request->get('songs');
        $studio->instrument = $request->get('instrument');
        $studio->name = $request->get('name');
        $studio->address = $request->get('address');
        $studio->email = $request->get('email');
        $studio->phone = $request->get('phone');
        $studio->message = $request->get('message');

        $studio->save();

        return back()->with('success','Congratulations your application has been received !!');
    }

    // get all studio applications
    public function studioGetAll() {

        $apps = Studio::all();
        return view('admin.application.studio', compact('apps'));
    
    }

}
