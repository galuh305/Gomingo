<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tempat_wisata_id')->constrained('tempat_wisatas')->onDelete('cascade');
            $table->string('user_name', 100);
            $table->tinyInteger('rating')->unsigned()->default(5);
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
