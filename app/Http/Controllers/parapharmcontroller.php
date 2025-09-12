<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\parapharme;

class parapharmcontroller extends Controller
{
    
    public function parapharme(Request $request){

        $parapharme=new parapharme();
        $parapharme->name="Soins Visages";
        $parapharme->description="Découvrez notre gamme de soins pour le visage, conçue pour nourrir";
        $parapharme->imagepath="img/avaters/avatar1.png";
        $parapharme->save();
        
        }
        
}
