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
INSERT INTO items (id, name, stack, image) VALUES (null, 'Wood', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Stone', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Iron', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Gold', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Diamond', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Stick', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Coal', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Redstone', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Lapis Lazuli', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
INSERT INTO items (id, name, stack, image) VALUES (null, 'Emerald', 64, 'https://minecrafthelp.zendesk.com/hc/article_attachments/4404133044493');
*/