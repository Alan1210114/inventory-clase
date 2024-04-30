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
          Schema::create('devoluciones_ventas', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->date('fecha');
              $table->bigIncrements('cliente_id');
              $table->bigIncrements('factura_clientes_id');
              $table->decimal('total',10,2);
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
          Schema::dropIfExists('devoluciones_ventas');
      }
  };
