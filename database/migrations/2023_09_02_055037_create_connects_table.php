<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('connects', function (Blueprint $table) {
            $table->integer('connectable_id');
            $table->string('connectable_type');
            $table->integer('connect_id');
            $table->string('connect_type');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('connects');
    }
};
