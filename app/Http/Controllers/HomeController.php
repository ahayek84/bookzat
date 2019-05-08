<?php

namespace App\Http\Controllers;
use App\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // $this->middleware('subscribed');

        // $this->middleware('verified');
    }


    public function rented()
    {
        $data = [];
        $data['records'] = Property::invisiable()->get();
        return view('rented.rented_properties',$data);
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {
        return view('home');
    }

}
