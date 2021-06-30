<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetnastr(){
        $naslov = 'Dobrodosli na pocetnu stranu Stranu!';
        return view('stranice.pocetna', compact('naslov'));
        }
        public function about(){
             $naslov = 'O nama!';
             return view('stranice.onama')->with('naslov', $naslov);
             }
            
             public function klubovi(){
                
                $podaci = array(
                'naslov' => 'Nasi Klubovi',
                'nizklubova'=>[' Real Madrid FC', 'Real Madrid Baloncesto', 'Real Madrid Femenino']
                );
                return view('stranice.klubovi')->with($podaci);
               }
       public function kontakt(){
           $naslov = "Kontakt";
           return view('stranice.kontakt')->with('naslov',$naslov);
       }
}
