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
        Schema::create('hostiles', function (Blueprint $table) {
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
        Schema::dropIfExists('hostiles');
    }
};
/*
INSERT INTO hostiles VALUES(null, 'Zombie', 'Rotten Flesh', 20, 2, 5, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4d/Zombie_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200217235933');

*/

