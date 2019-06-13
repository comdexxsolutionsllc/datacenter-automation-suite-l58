<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('resellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id');
            $table->integer('company_id')->unsigned();
            $table->timestamp('expiry_date')->nullable();
            $table->integer('salesrep_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('resellers');
    }
}
