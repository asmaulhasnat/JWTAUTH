<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('financial_organization_id')->comment = 'Bank table primary id';
            $table->bigInteger('store_id')->nullable();
            $table->string('account_name');
            $table->string('account_no')->nullable();
             $table->string('branch')->nullable();
            $table->tinyInteger('account_type')->nullable()->comment = '1 = Savings Account, 2 = Current
Account, 3 = Joint Account';
            $table->string('swift_code')->nullable();
            $table->string('route_no')->nullable();
           
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
