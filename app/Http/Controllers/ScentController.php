<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scent;

class ScentController extends Controller
{
    public function index() {

      //$scents = Scent::orderBy('name')->get();
    //  $scents = Scent::where('type', 'oluwatobiloba')->get();

$scents = Scent::latest()->get();



   //  $scents = [
    //  ['type' => 'fish', 'name' =>'grrgrg'],
   //   ['type' => 'meat', 'name' =>'ayotomiwa'],
    //  ];

   //   $scents = Scent::all();
       
        return view('body', [
         'scents' => $scents,
        ]);        
      }
    
        public function show($id) {
          return view('show', ['id'  => $id ]);
        }
    }

