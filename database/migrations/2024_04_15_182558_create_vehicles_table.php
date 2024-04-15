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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('call_sign');
            $table->string('type');
            $table->string('type_long');
            $table->string('status')
                ->default('2');
            $table->string('organization');
            $table->dateTime('alarmed_at')
                ->nullable();
            $table->tinyInteger('equipment_scba')
                ->nullable();
            $table->tinyInteger('equipment_water')
                ->nullable();
            $table->tinyInteger('equipment_manpower')
                ->nullable();
            $table->boolean('equipment_chief')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
