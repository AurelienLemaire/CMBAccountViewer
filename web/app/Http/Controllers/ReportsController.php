<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Operation;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return $this->listAll();
    }

    /**
     * 
     */
    public function listAll()
    {
        $reports = DB::table('monthly_reports');
        return $this->displayListView( $reports );
    }

    /**
     * 
     */
    public function listByMonth(){
        $month = request( 'month' );
        $reports = DB::table('monthly_reports')
                            ->whereRaw('mois like ?', $month.'%');
        return $this->displayListView( $reports );
    }

    /**
        * 
        */
    public function listByType(){
        $type = request( 'type' );
        $reports = DB::table('monthly_reports')
                            ->whereRaw('type = \'' .$type.'\'');
        return $this->displayListView( $reports );
    }

   /**
    * 
    */
    public function listByParams(){
        $type = request( 'type' );
        $month = request( 'month' );

        $select = "1";
        if( $type ) $select .= " AND type = '$type'";
        if( $month ) $select .= " AND mois like '$month%'";

        $reports = DB::table('monthly_reports')
                            ->whereRaw( $select );
        return $this->displayListView( $reports );
    }



   /**
    * 
    */
   public function displayListView( $reports ){


        return view('reports', [
            'reports' => $reports->simplePaginate(20),
        ]);
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
