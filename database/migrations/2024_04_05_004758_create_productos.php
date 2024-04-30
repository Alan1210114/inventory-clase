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
          Schema::create('productos', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->bigIncrements('empresa_id');
              $table->bigIncrements('proveedor_id');
              $table->bigIncrements('tipo_pieza');
              $table->string('nombre_producto',400);
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
          Schema::dropIfExists('productos');
      }
  };
