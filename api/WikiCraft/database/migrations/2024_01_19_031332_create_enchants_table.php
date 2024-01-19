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
        Schema::create('enchants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('description');
            $table->integer('min_level');
            $table->integer('max_level');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enchants');
    }
};
/*
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Sharpness', 'Sword', 'Increases the damage dealt by the enchanted sword.', 1, 5, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Smite', 'Sword', 'Increases damage to "undead" mobs (skeletons, zombies, withers, wither skeletons, zombie pigmen, skeleton horses, strays, husks, phantoms, and drowned).', 1, 5, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Bane of Arthropods', 'Sword', 'Increases damage to "arthropod" mobs (spiders, cave spiders, bees, silverfish and endermites).', 1, 5, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Knockback', 'Sword', 'Increases knockback.', 1, 2, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Fire Aspect', 'Sword', 'Sets the target on fire.', 1, 2, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Looting', 'Sword', 'Increases mob loot.', 1, 3, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Sweeping Edge', 'Sword', 'Increases sweeping attack damage.', 1, 3, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Sharpness%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Efficiency', 'Tool', 'Increases mining speed.', 1, 5, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Efficiency%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Silk Touch', 'Tool', 'Mined blocks drop themselves instead of their usual items.', 1, 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Efficiency%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Unbreaking', 'Tool', 'Increases durability.', 1, 3, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Efficiency%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Fortune', 'Tool', 'Increases block drops.', 1, 3, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Efficiency%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Power', 'Bow', 'Increases arrow damage.', 1, 5, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Power%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Punch', 'Bow', 'Increases arrow knockback.', 1, 2, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Power%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Flame', 'Bow', 'Turns arrows into flaming arrows, which ignite mobs and players hit by them.', 1, 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Power%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Infinity', 'Bow', 'Shooting consumes no arrows.', 1, 1, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Power%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Protection', 'Armor', 'Reduces most types of damage.', 1, 4, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Protection%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Fire Protection', 'Armor', 'Reduces fire damage.', 1, 4, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Protection%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Feather Falling', 'Armor', 'Reduces fall damage.', 1, 4, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Protection%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Blast Protection', 'Armor', 'Reduces explosion damage and knockback.', 1, 4, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Protection%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
INSERT INTO enchants (name, type, description, min_level, max_level, image) VALUES ('Projectile Protection', 'Armor', 'Reduces projectile damage.', 1, 4, 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4a/Enchanted_Book_%28Protection%29_JE2_BE2.png/revision/latest/scale-to-width-down/30?cb=20200317175748');
*/