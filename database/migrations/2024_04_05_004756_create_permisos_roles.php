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
          Schema::create('permisos_roles', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->integer('idRol');
              $table->tinyInteger('isgroup');
              $table->tinyInteger('orden');
              $table->integer('idPermiso');
              $table->tinyInteger('Listar');
              $table->tinyInteger('Ver');
              $table->tinyInteger('Agregar');
              $table->tinyInteger('Modificar');
              $table->tinyInteger('Borrar');
              $table->integer('Docs');
              $table->integer('Lotes');
              $table->integer('EdoCta');
              $table->integer('Contract');
              $table->integer('MostrarDatos');
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
          Schema::dropIfExists('permisos_roles');
      }
  };
