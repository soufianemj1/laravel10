<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Comment;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('home',['films'=>$films]);
        
    }

    /**php arti
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
        $films= new film();
        $films->name=$request->titre;
        $films->image=$request->photo;
        
        
        $films->save();
        return redirect("adminfilms");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $id)
    {
        $comments=Comment::where("film_id",$id->id)->get();

        
        return view('singlefilm')->with('singlefilm',$id)->with('comment',$comments);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film=Film::find($id);
       
        return view('films.editfilms')->with('film',$film);
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
        $upd=Film::find($request->id);
        $upd->name=$request->titre;
        $upd->image=$request->photo;
        $upd->update();
        return redirect(route('adminfilms'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film=Film::find($id);
        $film->delete();
        return back();
    }
    public function admin(){
        return view("films.admin");
    }
    public function adminfilms()
    {
        $films = Film::all();
        return view('films.admincrud',['films'=>$films]);
        
    }
}
