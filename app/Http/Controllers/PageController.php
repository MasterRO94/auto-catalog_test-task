<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a homepage.
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('page.home')->with(['page' => count(Page::findByName('homepage')->get()) ? Page::findByName('homepage')->get()[0] : null]);
	}
	/**
	 * Display an about page.
	 *
	 * @return \Illuminate\View\View
	 */
	public function about()
	{
		return view('page.about')->with(['page' => count(Page::findByName('about')->get()) ? Page::findByName('about')->get()[0] : null]);
	}


}
