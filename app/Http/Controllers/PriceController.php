<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PriceFormRequest;
use App\Models\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $price = Price::all();
        return view('admin.price.index', compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PriceFormRequest $request)
    {
        //
        $data = $request->validated();
        $price = new Price;
        $price->name = $data['name'];
        $price->save();
        return redirect('admin/price')-> with('message', 'price Added Successfully');
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
    public function edit($price_id)
    {
        //
        $price = Price::find($price_id);
        return view('admin.price.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PriceFormRequest $request, $price_id)
    {
        //
        $data = $request->validated();
        $price = Price::find( $price_id);
        $price->name = $data['name'];
        $price->update();

        return redirect('admin/price')-> with('message', 'Level Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($price_id)
    {
        //

        $price = Price::find($price_id);
        if($price)
        {
           $price ->delete();
           return redirect('admin/price')-> with('message', 'price Deleted Successfully');
        }
        else
        {
          return redirect('admin/price')-> with('message', 'No price Id Found!!');
        }
    }
}
