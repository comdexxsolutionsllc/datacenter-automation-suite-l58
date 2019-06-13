<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagCloudTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('tag_cloud', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tag_type')->unsigned()->nullable();
            $table->string('keyword');
            $table->integer('frequency')->unsigned()->default(0)->nullable();
            $table->boolean('visible')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('tag_cloud');
    }
}
