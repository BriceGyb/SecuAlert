<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alert; 

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {   $alerts = Alert::all();
        return view('pages.display_alert', compact('alerts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('pages.creating_alert_form');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {     
    $newalert =  new Alert ; 
    $newalert->is_adressed =  False;
    $newalert->reaction =  0;
    $newalert->user_id =  1;
     $newalert->title =  $request->input('title');
     $newalert->description =  $request->input('description');
     $newalert->type =  $request->input('type');
     $newalert->level =  $request->input('level');
     $newalert->privacy =  $request->input('privacy');
     $newalert->save();
     return back()->with('success', 'Alerte créée avec succès !');

    //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

