<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a homepage.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('page.home')->with(['page' => Page::findByName('homepage')->get()[0]]);
	}
	/**
	 * Display an about page.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('page.about')->with(['page' => Page::findByName('about')->get()[0]]);
	}


}
