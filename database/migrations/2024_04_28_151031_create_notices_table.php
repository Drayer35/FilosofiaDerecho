<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('title',300)->unique();
            $table->string('subtitle',300);
            $table->string('introduction',2000);
            $table->string('body',3000);
            $table->string('link',300)->nullable()->default('NOT DEFINED');
            $table->binary('images')->nullable();
            $table->integer('views')->nullable()->default(0);
            $table->timestamps();
            $table->foreignId('id_administrative')->constrained('administratives')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
