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
            $table->string("loot");
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
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'cow', 'leather', 10, 1, 1, 'https://th.bing.com/th/id/OIP.AfT_Ss8uW0v2RCflnQVwHQHaG4?rs=1&pid=ImgDetMain');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'chicken', 'feather', 5, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'pig', 'porkchop', 10, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'sheep', 'wool', 10, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'rabbit', 'rabbit hide', 5, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'horse', 'leather', 15, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'donkey', 'leather', 15, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'mule', 'leather', 15, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'llama', 'leather', 15, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
INSERT INTO mobs (id, name, loot, health, attack, xp, image) VALUES (null, 'wolf', 'leather', 10, 1, 1, 'https://th.bing.com/th/id/OIP.5Z3Z3Z3Z3Z3Z3Z3Z3Z3Z3AHaHa?rs=1&pid=ImgDet&rs=1');
*/
