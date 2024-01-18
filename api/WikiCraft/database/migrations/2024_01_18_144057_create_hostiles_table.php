<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hostiles', function (Blueprint $table) {
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
    public function down(): void
    {
        Schema::dropIfExists('hostiles');
    }
};
/*
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Creeper', 'Gunpowder', 20, 6, 8, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/8/87/Zombie_JE3_BE2.png/revision/latest/scale-to-width/360?cb=20191227070025');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Spider', 'String', 16, 3, 4, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/7/7a/Lefthandedskeleton.png/revision/latest/scale-to-width/360?cb=20210301080603');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Enderman', 'Ender Pearl', 40, 8, 12, ''https://static.wikia.nocookie.net/minecraft_es_gamepedia/images/4/46/Enderman-con-bloque.png/revision/latest?cb=20121015100421);
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Cave Spider', 'Spider Eye', 18, 5, 6, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/1/17/Cave_Spider_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Silverfish', 'Silverfish Scales', 12, 3, 2, 'https://static.wikia.nocookie.net/minecraft360/images/d/d9/Silverfish-full.png/revision/latest?cb=20130101202126');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Blaze', 'Blaze Rod', 20, 8, 10, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/b/b8/BlazeNoParticles.png/revision/latest/scale-to-width-down/250?cb=20190512021145');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Ghast', 'Ghast Tear', 25, 10, 15, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/95/Ghast_shooting_JE2_BE2.png/revision/latest?cb=20201108223010');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Witch', 'Potion Ingredients', 30, 7, 12, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/0/0c/Witch.png/revision/latest?cb=20201108223010');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Husk', 'Sand', 22, 6, 7, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Husk_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Stray', 'Arrow', 20, 7, 8, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/7/7a/Stray_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Pillager', 'Crossbow', 25, 8, 10, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Pillager_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Vindicator', 'Emerald', 30, 9, 12, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Vindicator_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Evoker', 'Totem of Undying', 40, 10, 15, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Evoker.png/revision/latest?cb=20201108223010');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Drowned', 'Gold Ingot', 25, 7, 8, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Drowned_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Phantom', 'Phantom Membrane', 20, 6, 7, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Phantom_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Piglin', 'Gold Nugget', 35, 9, 10, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Piglin_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Zoglin', 'Rotten Flesh', 40, 12, 14, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Zoglin_JE2_BE2.png/revision/latest?cb=20191229160443');
INSERT INTO hostiles (id, name, loot, health, attack, xp, image) VALUES (null,'Endermite', 'Ender Pearl', 10, 3, 2, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6d/Endermite_JE2_BE2.png/revision/latest?cb=20191229160443');

*/

