<?php

namespace App\Http\Controllers;

use App\Models\FinancialOrganization;
use Illuminate\Http\Request;

class FinancialOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forganization = FinancialOrganization::get(); 
       return response()->json([
            'message' => 'FinancialOrganization Information',
            'forganization' => $forganization
        ], 200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialOrganization $financialOrganization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function edit(FinancialOrganization $financialOrganization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialOrganization $financialOrganization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialOrganization $financialOrganization)
    {
        //
    }
}
