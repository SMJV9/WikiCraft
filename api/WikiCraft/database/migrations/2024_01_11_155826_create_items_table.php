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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("stack");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
/*
INSERT INTO items (id, name, stack, image) VALUES (null, 'sword', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'axe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'pickaxe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'shovel', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'hoe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'iron sword', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'iron axe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'iron pickaxe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'iron shovel', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'iron hoe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest?cb=20190516111313');
*/