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
          Schema::create('facturas_clientes_detalles', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->bigIncrements('facturas_clientes_id');
              $table->bigIncrements('producto_id');
              $table->string('lote',120);
              $table->integer('cantidad');
              $table->decimal('importe',10,2);
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
          Schema::dropIfExists('facturas_clientes_detalles');
      }
  };
