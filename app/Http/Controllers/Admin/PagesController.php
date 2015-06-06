<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\User;
use Auth;

class PagesController extends Controller{

    public function index()
    {
        dd(Auth::user()->toArray());
    }



}