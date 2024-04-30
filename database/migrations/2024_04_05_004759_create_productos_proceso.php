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
          Schema::create('productos_proceso', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->bigIncrements('producto_id');
              $table->string('lote',120);
              $table->bigIncrements('tipo_pieza');
              $table->decimal('precio_costo',10,2);
              $table->decimal('precio_venta',10,2);
              $table->integer('cantidad');
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
          Schema::dropIfExists('productos_proceso');
      }
  };
