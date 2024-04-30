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
          Schema::create('devoluciones_ventas_detalles', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->bigIncrements('devoluciones_venta_id');
              $table->bigIncrements('producto_id');
              $table->bigIncrements('cantidad');
              $table->decimal('precio_venta',10,2);
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
          Schema::dropIfExists('devoluciones_ventas_detalles');
      }
  };
