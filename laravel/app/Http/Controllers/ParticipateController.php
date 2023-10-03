<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    
    public function index(){
       $participates=response()->json(Participate::all());
        return $participates;
    }
    public function show($id){
        $participates = response()->json(Participate::find($id));
        return $participates;
    }
    public function destroy($id)
    {
        Participate::find($id)->delete();
        return redirect('/Participate/list');
    }
    public function store(Request $request){
        $participates=new Participate();
        $participates->id('participate_id');
        $participates->boolean('present');
        $participates->foreignid('event_id')->references('event_id')->on('events');
        $participates->foreignid('user_id')->references('user_id')->on('users');
        $participates->timestamps();
        $participates->save();
    }
    public function update(Request $request, $id){
        $participates=Participate::find($id);
        $participates->id('participate_id');
        $participates->boolean('present');
        $participates->foreignid('event_id')->references('event_id')->on('events');
        $participates->foreignid('user_id')->references('user_id')->on('users');
        $participates->timestamps();
    }
    public function newView(){
        $participates=Participate::all();
        return $participates('participates.new',['participates'=> $participates]);
    }
    public function editView(){
        $participates=Participate::all();
        $participates=Participate::all();
        return $participates('participates.edit',['participates'=> $participates]);
    }
    public function listView(){
        $participates=Participate::all();
        return view('participates.list',['task'=>$participates]);
    }

}
