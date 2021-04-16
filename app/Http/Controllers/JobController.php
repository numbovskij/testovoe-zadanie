<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

use App\Jobs\LeadJob;

class JobController extends Controller
{
	public function submit(Request $req) {
		$lead = new Lead();
		
		$leadJob = (new LeadJob())->delay(now()->addSeconds(1));
		$this->dispatch($leadJob);


		$lead->name = $req->input('name');
		$lead->phone = $req->input('phone');
		$lead->email = $req->input('email');
		$lead->whantToBy = $req->input('whantToBy');

		$lead->save();

		return redirect()->route('index');

	}
}
