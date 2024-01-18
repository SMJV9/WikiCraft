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
        Schema::create('biomes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("wood");
            $table->string("spawn");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biomes');
    }
};
/*
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Forest', 'Oak', 'Easy', 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Desert', 'Acacia', 'Easy', 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Desert.png/revision/latest?cb=20220103192043');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Jungle', 'Jungle', 'Difficult', 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/a/ae/Jungle.png/revision/latest?cb=20220617002056');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Snowy Tundra', 'Spruce', 'Moderate', 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/e/e3/Tundra.jpg/revision/latest?cb=20191227143153');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Mushroom Fields', 'Mushroom', 'Rare', 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/minecraft/5/57/Mushroom_Fields.png');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Swamp', 'Oak', 'Moderate', 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/3e/Swamp.png/revision/latest?cb=20230112124954');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Savanna', 'Acacia', 'Easy', 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/e/e5/Savanna.png/revision/latest?cb=20220324155028');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Taiga', 'Spruce', 'Moderate', 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/a/ad/Giant_Tree_Taiga.png/revision/latest?cb=20230112170503');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Plains', 'Oak', 'Easy', 'https://static.wikia.nocookie.net/minecraft/images/a/af/PlainsBiome.png/revision/latest?cb=20160513002855');
INSERT INTO biomes (id, name, wood, spawn, image) VALUES (null, 'Badlands', 'Dark Oak', 'Difficult', 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/minecraft/6/67/Badlands.png');
*/    