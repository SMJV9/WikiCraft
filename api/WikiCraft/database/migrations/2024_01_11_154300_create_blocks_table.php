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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("funtion");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
/*
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Cobblestone', 'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/3d/Cobblestone_%28Texture_Update_pre-release_2%29.png/revision/latest?cb=20200825030444 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Stone', 'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/64/Stone_JE5_move.png/revision/latest?cb=20200317041613 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Dirt', 'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/9b/Dirt_JE2_BE2.png/revision/latest?cb=20200309195232 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Grass Block',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/12/Grass_Block_JE2.png/revision/latest?cb=20200830142618 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Log',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/56/Oak_Log_%28UD%29_JE2_BE1.png/revision/latest?cb=20191220083731 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Planks',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/37/Oak_Planks_JE6_BE3.png/revision/latest?cb=20200317041640 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Leaves',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Oak_Leaves.png/revision/latest?cb=20230226143713 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Sapling',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/1c/Oak_Sapling_JE14.png/revision/latest/scale-to-width/360?cb=20211128154319 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Chest',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/11/Chest_%28S%29_BE1.png/revision/latest?cb=20191203082210 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Crafting Table',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/93/Crafting_Table_JE3_BE2.png/revision/latest?cb=20190606093431 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Furnace',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/5c/Furnace_JE3_BE2.png/revision/latest?cb=20190606093431 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Cobblestone Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/3d/Cobblestone_%28Texture_Update_pre-release_2%29.png/revision/latest?cb=20200825030444 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Stone Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/64/Stone_JE5_move.png/revision/latest?cb=20200317041613 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Dirt Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/9b/Dirt_JE2_BE2.png/revision/latest?cb=20200309195232 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Grass Block Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/12/Grass_Block_JE2.png/revision/latest?cb=20200830142618 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Log Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/56/Oak_Log_%28UD%29_JE2_BE1.png/revision/latest?cb=20191220083731 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Planks Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/37/Oak_Planks_JE6_BE3.png/revision/latest?cb=20200317041640 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Leaves Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Oak_Leaves.png/revision/latest?cb=20230226143713 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Oak Sapling Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/1c/Oak_Sapling_JE14.png/revision/latest/scale-to-width/360?cb=20211128154319 ');
INSERT INTO blocks (id, name, funtion, image) VALUES (null, 'Chest Stairs',  'Building','https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/11/Chest_%28S%29_BE1.png/revision/latest?cb=20191203082210 ');
*/