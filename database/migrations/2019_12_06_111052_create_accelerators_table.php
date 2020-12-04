<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceleratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accelerators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('AcceleratorName');
            $table->string('slug');
            $table->string('Logo');
            $table->longtext('MoreInfo');
            $table->string('Category');
            $table->float('Value');
            $table->string('Link');
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
        Schema::dropIfExists('accelerators');
    }
}
