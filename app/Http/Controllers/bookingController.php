<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booker;
use Mail;

class bookingController extends Controller
{
public function book(){
	return view('book');
}
	public function submit(Request $request){
		$this->validate($request, [
			'fullname' => 'required',
			'email' => 'required',
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
		
		
		//$room = Booker::where('roomname', '=', $booker->roomname)
		
		//$rooms = DB::table('booker')->select('name', 'roomname as user_room')->first();
		/*if ($room) {
			return redirect('/book')->with('failed', 'Not booked');
		}
		else {
			//save a booker
			$booker->save();
			return redirect('/book')->with('success', 'Message Sent');
		}*/
		
		//save a booker
		$booker->save();
		return redirect('/book')->with('success', 'Message Sent');
	}
	
	
	public function getBookers(){
		$bookers = Booker::all();
		
		return view('messages')->with('messages', $messages);
	}
}
