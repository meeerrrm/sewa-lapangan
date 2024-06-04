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
        Schema::create('place_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id');
            $table->string('field_type');
            $table->integer('field_number');
            $table->bigInteger('price_on_hour');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_fields');
    }
};
