<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('immobilieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->float('prix');
            $table->float('prixParJour')->nullable();
            $table->text('description');
            $table->integer('nbrChamber')->nullable();
            $table->integer('nprToilets')->nullable();
            $table->string('sector')->nullable();
            

            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');

            $table->bigInteger('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade') ->onUpdate('cascade');

            $table->bigInteger('proprietaire_id')->unsigned();
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires')->onDelete('cascade') ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immobilieres');
    }
};
