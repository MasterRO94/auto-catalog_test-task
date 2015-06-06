<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SavePageRequest;
use App\Page;
use App\User;
use Auth;

class PagesController extends Controller{

    /**
     * Display pages list
     *
     * @return $this
     */
    public function index()
    {
        return view('admin.pages.list')->with(['pages' => Page::paginate(10)]);
    }


    /**
     * Show Page edit form
     *
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(SavePageRequest $request, Page $page)
    {
        $page->update($request->all());

        return redirect(route('admin_pages'));
    }



}