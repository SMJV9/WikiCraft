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
INSERT INTO items (id, name, stack, image) VALUES (null, 'diamond sword', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest/scale-to-width-down/30?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'diamond axe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest/scale-to-width-down/30?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'diamond pickaxe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest/scale-to-width-down/30?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'diamond shovel', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest/scale-to-width-down/30?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'diamond hoe', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Wooden_Sword_JE1_BE1.png/revision/latest/scale-to-width-down/30?cb=20190516111313');
INSERT INTO items (id, name, stack, image) VALUES (null, 'bow', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Bow_%28item%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO items (id, name, stack, image) VALUES (null, 'crossbow', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Bow_%28item%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO items (id, name, stack, image) VALUES (null, 'leather helmet', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Leather_Helmet_JE3_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO items (id, name, stack, image) VALUES (null, 'leather chestplate', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Leather_Chestplate_JE3_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO items (id, name, stack, image) VALUES (null, 'leather leggings', 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Leather_Leggings_JE3_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
*/