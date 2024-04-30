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
          Schema::create('cotizaciones', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->date('fecha');
              $table->bigIncrements('cliente_id');
              $table->string('cliente_nombre',100);
              $table->decimal('sub_total',10,2);
              $table->decimal('iva',10,2);
              $table->decimal('total',10,2);
              $table->integer('status');
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
          Schema::dropIfExists('cotizaciones');
      }
  };
