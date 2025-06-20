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
       Schema::create('meetings', function (Blueprint $table) {
            $table->id('Meeting_id');
            $table->string('Meeting_name');
            $table->foreignId('Organizer_id')->constrained('organizers', 'Organizer_id');
            $table->foreignId('Higher-up_id')->constrained('higher_ups', 'Higher-up_id');
            $table->foreignId('Staff_id')->constrained('staff', 'Staff_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting');
    }
};
