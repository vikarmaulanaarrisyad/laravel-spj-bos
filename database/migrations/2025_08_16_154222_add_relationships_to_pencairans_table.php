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
        Schema::table('pencairans', function (Blueprint $table) {
            $table->foreign('rkas_id')->references('id')->on('rkas')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pencairans', function (Blueprint $table) {
            $table->dropForeign('pencairans_rkas_id_foreign');
        });
    }
};
