<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Bier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BierController extends Controller
{
      /**
       * TODO:
       * Add join to index for easy viewing?
       * Create joint edit page ?
       * Add styling <
       *  */ 

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index() 
      {
            $bieren = DB::table("bier")->get()->sortByDesc('biernummer');
            $bierkaarten = DB::table("bierkaart")->get();
            $brouwerijen = DB::table("brouwerij")->get();
            $cafes = DB::table("cafe")->get();

            return view("index", [
               "bieren" => $bieren,
               "bierkaarten" => $bierkaarten,
               "brouwerijen" => $brouwerijen,
               "cafes" => $cafes,
            ]);
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create() // returns view to create new item
      {
         return view('create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
         Bier::create([
            'naam' => $request->naam,
            'soort' => $request->soort,
            'alcoholpercentage' => $request->alcoholpercentage,
         ]);

         return redirect('/')->with('message', "Bier toegevoegd");
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show(Bier $bier)
      {
         return view('/show' , ['bier'=>$bier]);
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit(Bier $bier)
      {
         return view('/edit', ['bier'=>$bier]);
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, Bier $bier)
      {
         $bier->update([
            'naam'=>$request->naam,
            'soort'=>$request->soort,
            'alcoholpercentage'=>$request->alcoholpercentage
         ]);

         return redirect('/')->with('message', 'beer updated');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy(Bier $bier)
      {
         $bier->delete();

         return redirect('/index')->with('message', 'beer deleted');
      }
}
