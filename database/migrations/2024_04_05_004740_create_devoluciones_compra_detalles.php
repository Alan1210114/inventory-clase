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
          Schema::create('devoluciones_compra_detalles', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->bigIncrements('devoluciones_compra_id');
              $table->bigIncrements('material_id');
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
          Schema::dropIfExists('devoluciones_compra_detalles');
      }
  };
