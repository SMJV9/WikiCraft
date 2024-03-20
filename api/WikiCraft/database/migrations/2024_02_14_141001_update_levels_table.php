<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('levels', function (Blueprint $table): void {
           
            $table->integer('status')->default(1)->after('name');
        });
    }

    public function down(): void
    {
        Schema::table('levels', function (Blueprint $table): void {
           
            $table->dropColumn('status');
        });
    }
};
