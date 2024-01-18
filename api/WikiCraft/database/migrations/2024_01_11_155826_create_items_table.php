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
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Stone_sword', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/b/b1/Stone_Sword_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200217235849');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Stone_pickaxe', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/c/c4/Stone_Pickaxe_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200217234007');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Stone_axe', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/0/02/Stone_Axe_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200217234417');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Stone_shovel', '1','https://static.wikia.nocookie.net/minecraftuniverse/images/4/48/Stone_Shovel.png/revision/latest/scale-to-width-down/150?cb=20120904165400');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Stone_hoe', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6c/Stone_Hoe_JE1_BE1.png/revision/latest?cb=20190403173937');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Iron_sword', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/8/8e/Iron_Sword_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200217235910');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Iron_pickaxe', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/d/d1/Iron_Pickaxe_JE3_BE2.png/revision/latest/scale-to-width/360?cb=20200105053011');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Iron_axe', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5e/Iron_Axe_JE5_BE2.png/revision/latest/scale-to-width/360?cb=20200217234438');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Iron_shovel', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/a/aa/Iron_Shovel_JE3_BE2.png/revision/latest/scale-to-width/360?cb=20200217235306');
INSERT INTO items (id, name, stack, category_id) VALUES (null, 'Iron_hoe', '1','https://static.wikia.nocookie.net/minecraft_gamepedia/images/b/ba/Iron_Hoe_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200128141346');
*/