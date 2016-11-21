<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function welcome()
	{
		return view('pages.welcome');
	}
	public function aktuell()
	{
		return view('pages.aktuell');
	}
	public function history()
	{
		return view('pages.history');
	}
	public function produkte()
	{
		return view('pages.produkte');
	}
	public function brotsortiment()
	{
		return view('pages.brotsortiment');
	}
	public function dolcesalato()
	{
		return view('pages.dolcesalato');
	}
	public function paneria()
	{
		return view('pages.paneria');
	}
	public function partyservice()
	{
		return view('pages.partyservice');
	}
	public function torten()
	{
		return view('pages.torten');
	}
	public function impressum()
	{
		return view('pages.impressum');
	}
	public function kontakt()
	{
		return view('pages.kontakt');
	}

}
