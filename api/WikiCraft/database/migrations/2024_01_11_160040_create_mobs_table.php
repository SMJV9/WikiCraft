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
        Schema::create('mobs', function (Blueprint $table) {
            $table->id();
            $table->string("name"); 
            $table->string("drop");
            $table->integer("health");
            $table->integer("attack");
            $table->integer("xp");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobs');
    }
};
/*
INSERT INTO mobs (id, name, drop, health, attack, xp, image) VALUES (null, 'cow', 'leather', 10, 1, 1, 'https://th.bing.com/th/id/OIP.AfT_Ss8uW0v2RCflnQVwHQHaG4?rs=1&pid=ImgDetMain');
*/
