<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booker;         

class bookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookers = Booker::orderBy('created_at', 'desc')->get();
        return view('bookings')->with('bookers', $bookers);
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
        $this->validate($request, [
            'roomname' => 'required',
			'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
			'arrival' => 'required',
			'departure' => 'required'
			
		]);

        //create new booker
		$booker = new Booker;
		$booker->roomname= $request->input('roomname');
		$booker->fullname= $request->input('fullname');
		$booker->email= $request->input('email');
		$booker->phone= $request->input('phone');
		$booker->arrival= $request->input('arrival');
		$booker->departure= $request->input('departure');
		$booker->message= $request->input('message');

        
        $booker->save();

        return redirect('/book')->with('success', 'Booking Added. We will contact you soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booker = Booker::find($id);
        return view('showBookings')->with('booker', $booker);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booker = Booker::find($id);
        $booker->delete();
    }
}
