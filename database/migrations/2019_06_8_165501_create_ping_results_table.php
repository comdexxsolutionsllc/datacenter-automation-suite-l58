<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePingResultsTable extends Migration
{

    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('ping_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('device_id')->nullable();
            $table->foreign('device_id')->references('id')->on('devices');
            $table->timestamp('run_date')->default(now());
            $table->unsignedInteger('timeout');
            $table->unsignedInteger('reply_i');
            $table->unsignedInteger('time_to_live');
            $table->timestamp('response_time')->default(now());
            $table->unsignedInteger('response_ttl');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('ping_results');
    }
}
