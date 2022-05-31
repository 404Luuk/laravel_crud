<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Bier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;       


class BierController extends Controller
{
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index() // Join tables for easy viewing? <<
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
      public function create()
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

         return redirect('/');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
         //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
         //
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
         //
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
         //
      }
}
