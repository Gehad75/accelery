<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_type', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->biginteger('resource_id')->unsigned()->nullable();
            $table->foreign('resource_id')->references('id')
                  ->on('resources')->onDelete('cascade');
            $table->biginteger('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')
                  ->on('types')->onDelete('cascade');

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
        Schema::dropIfExists('resource_type_resource');
    }
}
