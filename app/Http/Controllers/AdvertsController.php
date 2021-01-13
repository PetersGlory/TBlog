<?php

namespace TechObserversBlog\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use TechObserversBlog\Advert;

class AdvertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::paginate(10);
        return view('admin.adverts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('pages.adverts');
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
        $advert = new Advert;
       $advert->user_id = Auth::user()->id;
       $advert->title = $request->title;
       $advert->content = $request->content;
       $advert->link = $request->link;
       $advert->post_on = $request->post_on;

       $advert->save();

       return redirect('/adverts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advert = Advert::findOrFail($id);
        return view('pages.show', compact("advert"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advert = Advert::findOrFail($id);
        return view('adverts.edit', compact("advert"));
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
        $advert = Advert::findOrFail($id);
            $advert->update($request->all());
       return redirect('/adverts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advert::destroy($id);
        return redirect("/adverts");
    }
}
