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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

/*
INSERT INTO users VALUES(null, 'julio','vasquez','julio@gmail.com',662441945,now(),123456,'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'juan','perez','juan@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'pedro','lopez','pedro@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'maria','gomez','maria@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'luis','ramirez','ramirez@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'laura','rodriguez','laura@gmail.com,662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'lucia','sanchez','lucia@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'lupita','hernandez','lupita@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'luisa','torres','luisa@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'lucero','garcia','lucero@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'marco','mendez','marco@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'mario','mendoza','mario@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'miguel','martinez','miguel@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'angel','martinez','angel@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
INSERT INTO users VALUES(null, 'jose','altamira','jose@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
Insert into users values(null, 'luis','smith','luis@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
Insert into users values(null, 'brayan','amaya','brayan@gmail.com',662441945,now(), bcrypt('123456'),'image.jpg',null,now(),now());
Insert into users values(null, 'diana','montoya','diana@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
Insert into users values(null, 'josue','alvarez','josue@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
Insert into users values(null, 'jose','lopez','jose12@gmail.com',662441945, now(),bcrypt('123456'),'image.jpg',null,now(),now());
*/