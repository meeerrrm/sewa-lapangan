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
        Schema::create('trxes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('user_id');
            $table->foreignId('place_id');
            $table->foreignId('place_field_id');
            $table->timestamp('start');
            $table->bigInteger('qty');
            $table->bigInteger('price');
            $table->bigInteger('total');
            $table->string('proof');
            $table->enum('status',['payment-check','payment-success','user-check-in','user-check-out']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trxes');
    }
};
