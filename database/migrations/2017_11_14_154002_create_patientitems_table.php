<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientitems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->float('trough', 8, 2);
            $table->float('dose_1', 8, 2);
            $table->date('set_date');
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
        Schema::dropIfExists('patientitems');
    }
}
