<?php

namespace App\Http\Controllers;

use App\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vente = Vente::all();
        return response()->json($vente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vente $vente)
    {
        $validator = Validator::make($request->all(),[
            'poids' => 'required|integer',
            'montant' => 'required|integer',
            'date' => 'required|',
            'pisteur_id' => 'required',
            'producteur_id' => 'required',
            'produit_id' => 'required',

        ]);


        if ($validator->fails())
        {

            return response()->json($validator->messages(), 400);
        }


        $vente->poids = $request->input('poids');
        $vente->montant = $request->input('montant');
        $vente->date = $request->input('date');
        $vente->pisteur_id = $request->input('pisteur_id');
        $vente->producteur_id = $request->input('producteur_id');
        $vente->produit_id = $request->input('produit_id');
        $vente->save();

        return response()->json($vente,200);
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
