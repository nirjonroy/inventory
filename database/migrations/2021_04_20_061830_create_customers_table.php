<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('CustomerId');
            $table->string('CustomerName');
            $table->string('CustomerContactNoF');
            $table->string('CustomerContactNoS')->nullable();
            $table->string('CustomerAddressF');
            $table->string('CustomerAddressS')->nullable();
            $table->string('LatNo')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
