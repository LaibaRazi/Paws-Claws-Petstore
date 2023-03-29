<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetstoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petstore', function (Blueprint $table) {
            $table->id('Id_pet');
            $table->string('PetName');
            $table->string('Category');
            $table->string('BreedName');
            $table->bigInteger('Price');
            $table->string('Status')->default('In Stock');
            $table->string('Sale');
            $table->string('BuyerName')->default('No');
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
        Schema::dropIfExists('petstore');
    }
}
