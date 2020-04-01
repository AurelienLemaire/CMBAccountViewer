<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Operation;


class OperationsController extends Controller
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
        $operations = DB::table('operations');
        return $this->displayListView( $operations );
    }

    /**
     * 
     */
    public function listByMonth(){
        $month = request( 'month' );
        $operations = DB::table('operations')
                            ->whereRaw('date_operation like ?', $month.'%');
        return $this->displayListView( $operations );
    }

    /**
        * 
        */
    public function listByType(){
        $type = request( 'type' );
        $operations = DB::table('operations')
                            ->whereRaw('type = \'' .$type.'\'');
        return $this->displayListView( $operations );
    }

   /**
    * 
    */
    public function listByParams(){
        $type = request( 'type' );
        $month = request( 'month' );

        $select = "1";
        if( $type ) $select .= " AND type = '$type'";
        if( $month ) $select .= " AND date_operation like '$month%'";

        $operations = DB::table('operations')
                            ->whereRaw( $select )
                            ->orderBy('date_operation', 'desc');
        return $this->displayListView( $operations );
    }



   /**
    * 
    */
   public function displayListView( $operations ){


        return view('operations', [
            'operations' => $operations->simplePaginate(20),
            'total_credit' => $operations->sum('credit'),
            'total_debit'  => $operations->sum('debit'),
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
