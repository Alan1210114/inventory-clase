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
          Schema::create('facturas_proveedores_detalles', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->bigIncrements('facturas_proveedores_id');
              $table->bigIncrements('material_id');
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
          Schema::dropIfExists('facturas_proveedores_detalles');
      }
  };
