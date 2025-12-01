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

public function special(){
    return view('special_tours.index');
}

public function bicycle(){
    return view('special_tours.bicycle-tours');
}

public function wine(){
    return view('special_tours.wine-tours');
}

public function haunted(){
    return view('special_tours.haunted-tours-india');
}

public function slum(){
    return view('special_tours.slum-tours');
}

public function bollywood(){
    return view('special_tours.bollywood-tours');
}

public function fair(){
    return view('fair-festival');
}

public function hot(){
    return view('hot-deals');
}

public function enquir(){
    return view('enquiry');
}

public function abou(){
    return view('about');
}

public function director(){
    return view('directors');
}

public function she(){
    return view('themes.comman.sher');
}
public function gujrat(){
    return view('themes.comman.gujrat');
}
public function goldenVaranasi(){
    return view('themes.comman.golden-triangle-with-varanasi-tour');
}

public function blo(){
    return view('blog');
}

public function blog1(){
    return view('blogs.blog1');
}
public function blog2(){
    return view('blogs.blog2');
}

public function blog3(){
    return view('blogs.blog3');
}
public function blog4(){
    return view('blogs.blog4');
}            
public function blog5(){
    return view('blogs.blog5');
}

public function blog6(){
    return view('blogs.blog6');
}

public function mumbaiAjantaEllora(){
    return view('themes.comman.mumbai-ajanta-ellora-cave-tour');
}
public function discoverKarnataka(){
    return view('themes.comman.discover-karnataka-tour');
}
public function haridwarRishikesh(){
    return view('themes.comman.haridwar-rishikesh-with-golden-triangle-tour');
}

public function bicycleDetails(){
    return view('special_tours.bicycle-tour-details');
}
public function wineDetails(){
    return view('special_tours.wine-tour-packages-details');
}

public function hauntedDetails(){
    return view('special_tours.haunted-tours-india-packages-details');
}

public function dharaviDetails(){
    return view('special_tours.dharavi-slum-tour-details');
}

public function bollywoodDetails(){
    return view('special_tours.bollywood-tour-details');
}




}

