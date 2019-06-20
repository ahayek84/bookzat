<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function available_properties(Request $request)
    {
        $email = $request->all();
        //Dd($email['price_calculator']);
        // to contntioune doing the logic if query comes
        $data = [];
        $data['records'] = Property::visiable()->get();
        return view('available_properties.index',$data);
    }

    public function referral()
    {
        $data = [];
        //$data['records'] = Property::visiable()->get();
        return view('referral.index',$data);
    }


    public function team()
    {
        $data = [];
        //$data['records'] = Property::visiable()->get();
        return view('team.index',$data);
    }

    public function pricing()
    {
        $data = [];
        //$data['records'] = Property::visiable()->get();
        return view('pricing.index',$data);
    }

    public function index()
    {
        //
        $data = [];
        $data['records'] = Property::all();
        return view('available_properties.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
        $data = [];
        $data['property'] = $property;
        return view('property_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
        //$input = $request->all();
        $input['visibility'] = false;
        $input['updated_by'] = Auth::user()->id;
        $property->update($input);
        return redirect()->route('available_properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }



}
