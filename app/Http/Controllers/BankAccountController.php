<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\FinancialOrganization;
use Illuminate\Http\Request;
use Validator;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $bank = BankAccount::with(['bank_name'])->get(); 
        $forganization = FinancialOrganization::get(); 
       return response()->json([
            'message' => 'Bank Account Information',
            'bank' => $bank,
            'forganization' => $forganization,
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
        $req = Validator::make($request->all(), [
            'financial_organization_id' => 'required',
            'store_id' => 'required',
            'account_name' => 'required',
            'account_no' => 'required',
            'branch' => 'required',
            'account_type' => 'required',
            'swift_code' => 'required',
            'route_no' => 'required',
        ]);

        if($req->fails()){
            return response()->json(['error'=>$req->errors()], 200);
        }

        $bank = BankAccount::updateOrCreate(
            ['id'=>$request->id],$request->all());

        return response()->json([
            'message' => 'Bank Account Information Save Successfully',
            'bank' => $bank
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function show(BankAccount $bankAccount)
    {
        return response()->json([
            'message' => 'Bank Information',
            'bank' => $bankAccount
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        return response()->json([
            'message' => 'Bank Information',
            'bank' => BankAccount::find($id),
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankAccount $bankAccount)
    {
        $req = Validator::make($request->all(), [
            'financial_organization_id' => 'required',
            'store_id' => 'required',
            'account_name' => 'required',
            'account_no' => 'required',
            'branch' => 'required',
            'account_type' => 'required',
            'swift_code' => 'required',
            'route_no' => 'required',
        ]);

        if($req->fails()){
            return response()->json(['error'=>$req->errors()], 200);
        }
         $bankAccount->update($request->all());
        $bank = BankAccount::with(['bank_name'])->where('id',$bankAccount->id)->first(); 
        return response()->json([
            'message' => 'Bank Account Information Save Successfully',
            'bank' => $bank
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankAccount $bankAccount)
    {    $bank=$bankAccount->delete();   
         return response()->json([
            'message' => 'Bank Account Information Delete Successfully',
            'bank' => $bank
        ], 200);
    }
}
