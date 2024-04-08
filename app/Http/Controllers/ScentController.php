<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scent;

class ScentController extends Controller
{
  //public function __construct(){
   // $this->middleware('auth');

  //}
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
          $scent = Scent::findOrFail($id);
       //  $scent = Scent::find($id);
          return view('show', ['scent' => $scent]);

        }
        public function create() {
    return view('input.create');
        }

        public function love() {
          return view('body.love');
              }

              public function store() {

                $scent = new Scent();

            $scent->name = request('name');
            $scent->type = request('type');
            $scent->amount = request('amount');
            $scent->price = request('price');

            $scent->save();


                return redirect('/')->with('mssg', 'Thanks for order');
                    }
      public function destroy($id) {
        $scent = Scent::findOrFail($id);
        $scent->delete();

        return redirect('/body');

      }

}

    


