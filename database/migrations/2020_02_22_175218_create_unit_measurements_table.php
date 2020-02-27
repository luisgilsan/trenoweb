<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('unit_measurements', function (Blueprint $table) {


            $table->boolean('active');	

        });

        // Schema::create('unit_measurements', function (Blueprint $table) {
        //     $table->bigIncrements('id');

        //     $table->string('name', 100);
        //     $table->string('description', 255)->nullable();
        //     $table->string('prefix', 20);
            

        //     $table->timestamps();
        // });
    }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    // public function down()
    // {
    //     Schema::dropIfExists('unit_measurements');
    // }
}
