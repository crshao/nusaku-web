<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            
            $table->increments('destination_id'); // $table->id();
            
            $table->unsignedBigInteger('destinationtype_id');
            $table->string('title');
            $table->string('description');
            $table->string('nation');
            $table->string('city');
            $table->string('image');
            $table->timestamps();

            $table->index('destinationtype_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
