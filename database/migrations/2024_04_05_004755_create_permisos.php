<?php


 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;

  return new class extends Migration
  {
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up():void
      {
          Schema::create('permisos', function (Blueprint $table) {
              $table->integer('id');
              $table->string('nombrePermiso',1600);
              $table->string('slug',960);
              $table->integer('id_parent');
              $table->tinyInteger('isgroup');
              $table->tinyInteger('orden');
              $table->string('route',800);
              $table->string('icon',640);
              $table->string('image',800);
              $table->string('color',320);
              $table->timestamps();
          });
      }

      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down():void
      {
          Schema::dropIfExists('permisos');
      }
  };
