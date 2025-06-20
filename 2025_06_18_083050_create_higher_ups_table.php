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
        Schema::create('higher_ups', function (Blueprint $table) {
            $table->id('Higher-up_id');
            $table->string('Higher-up_name');
            $table->string('Higher-up_gender');
            $table->string('Higher-up_department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('higher_ups');
    }
};
