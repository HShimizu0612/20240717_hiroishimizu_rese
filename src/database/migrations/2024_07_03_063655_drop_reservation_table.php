<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('reservation');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::create('reservation', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        //     $table->foreignId('shop_id')->constrained()->cascadeOnDelete();
        //     $table->date('date');
        //     $table->foreignId('time_id')->constrained()->cascadeOnDelete();
        //     $table->foreignId('number_id')->constrained()->cascadeOnDelete();
        //     $table->timestamps();
        // });
    }
}