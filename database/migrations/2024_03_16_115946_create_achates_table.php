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
        Schema::create('achates', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateReservation')->default(date('Y-m-d H:i:s'));
            $table->string('etate')->default('en cours');
            $table->bigInteger('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade') ->onUpdate('cascade');

            $table->bigInteger('immobiliere_id')->unsigned();
            $table->foreign('immobiliere_id')->references('id')->on('immobilieres')->onDelete('cascade') ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achates');
    }
};
