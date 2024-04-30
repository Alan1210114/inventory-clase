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
          Schema::create('empleados', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('nombre',200);
              $table->string('apellido_paterno',200);
              $table->string('apellido_materno',200);
              $table->bigIncrements('departamento_id');
              $table->date('fecha_nacimiento');
              $table->string('curp',80);
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
          Schema::dropIfExists('empleados');
      }
  };
