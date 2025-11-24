<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyodhyaController extends Controller
{
    //
  public function index() {
    return view('welcome');
}
public function theme(){
    return view('themes.index');
}

public function adventur(){
    return view('themes.adventure-tours');
}

public function ayurved(){
    return view('themes.yoga-ayurveda-tour');
}

public function beach(){
    return view('themes.beach-vacations-tours');
}
public function keral(){
    return view('themes.kerala-backwaters-tour');
}
public function buddhist(){
    return view('themes.buddhist-tours');
}
public function culture(){
    return view('themes.heritage-tours');
}
public function famil(){
    return view('themes.family-vacation-tours');
}
public function golde(){
    return view('themes.golden-triangle-tour');
}
public function hil(){
    return view('themes.hill-station-tours');
}
public function himacha(){
    return view('themes.himachal-tour');
}
public function honeymoo(){
    return view('themes.honeymoon-tours');
}
public function luxur(){
    return view('themes.luxury-train-tour');
}
public function nort(){
    return view('themes.north-east-india-tours');
}
public function pigha(){
    return view('themes.pilgrimage-tours');
}
public function wildlif(){
    return view('themes.wildlife-tours');
}







}

