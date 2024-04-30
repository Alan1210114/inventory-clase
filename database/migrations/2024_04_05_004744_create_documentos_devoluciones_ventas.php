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
          Schema::create('documentos_devoluciones_ventas', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('nombre',400);
              $table->bigIncrements('devolucion_ventas_id');
              $table->date('fecha');
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
          Schema::dropIfExists('documentos_devoluciones_ventas');
      }
  };
