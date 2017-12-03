<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;

class EventController extends Controller
{
 //    function(Request $r){
	// 	event(new eventTrigger($r));
	// }

	public function eventHandler(Request $request)
	{

		event( new eventTrigger($request->all()) );
	}

}
