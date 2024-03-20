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
        Schema::table('levels', function (Blueprint $table): void {
            $table->string('name')->after('id');
            $table->integer('status')->default(1)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('levels', function (Blueprint $table): void {
            $table->dropColumn('name');
            $table->dropColumn('status');
        });
    }
};
/*
insert into levels (name,created_at,updated_at) values('user',Now(),now());
insert into levels (name,created_at,updated_at) values('admin',now(),now());
*/