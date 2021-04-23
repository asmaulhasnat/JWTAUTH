<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="bank_accounts";
    protected $fillable=['financial_organization_id','store_id','account_name','account_no','branch','account_type','swift_code','route_no','deleted_at'];

    public function bank_name(){
    	return $this->hasOne(FinancialOrganization::class,'id','financial_organization_id');
    }
}


