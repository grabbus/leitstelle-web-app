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
        Schema::create('abeks', function (Blueprint $table) {
            $table->id();
            $table->string('heading')
                ->nullable(false);
            $table->string('category')
                ->nullable(false);
            $table->string('keyword')
                ->nullable(false);
            $table->string('note')
                ->nullable();
            $table->tinyInteger('min_req_manpower')
                ->nullable();
            $table->tinyInteger('min_req_water')
                ->nullable();
            $table->tinyInteger('min_req_scba')
                ->nullable();
            $table->boolean('min_req_chief')
                ->default(false)
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abeks');
    }
};
