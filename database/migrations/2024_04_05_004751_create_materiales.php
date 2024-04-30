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
          Schema::create('materiales', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->integer('nombre_material');
              $table->decimal('precio_costo',10,2);
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
          Schema::dropIfExists('materiales');
      }
  };
