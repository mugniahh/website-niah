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
        schema::create('pasien',function(blueprint $table){
            $table->id();
            $table->string('nama_pasien',50);
            $table->string('keterangan',50);
            $table->unsignedbiginteger('user_id');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
    });
    }
    /**
     * Reverse the migrations.s
     */
    public function down(): void
    {
        //
    }
};
