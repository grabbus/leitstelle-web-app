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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('abek_heading')->nullable(false);
            $table->string('abek_category')->nullable(false);
            $table->string('abek_keyword')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('postal_code')->nullable(false);
            $table->string('street')->nullable(false);
            $table->string('house_number');
            $table->string('building');
            $table->string('object');
            $table->string('operational_plan');
            $table->tinyText('message');
            $table->string('change_reason');
            $table->string('change_parameter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls');
    }
};
