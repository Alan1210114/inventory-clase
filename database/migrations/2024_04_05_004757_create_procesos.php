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
          Schema::create('procesos', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('tipo_proceso',200);
              $table->bigIncrements('operador_id');
              $table->bigIncrements('material_id');
              $table->bigIncrements('producto_resultante');
              $table->bigIncrements('tipo_pieza_id');
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
          Schema::dropIfExists('procesos');
      }
  };
