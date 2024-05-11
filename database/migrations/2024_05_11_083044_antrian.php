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
        schema::create('antrian',function(blueprint $table){
            $table->id();
            $table->string('no_antrian',50);
            $table->string('status_antrian');
            $table->unsignedbiginteger('dokter_id');
            $table->unsignedbiginteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('pasien');
            $table->foreign('dokter_id')->references('id')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
