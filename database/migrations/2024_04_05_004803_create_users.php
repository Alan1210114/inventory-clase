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
          Schema::create('users', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('name',400);
              $table->string('email',600);
              $table->bigIncrements('empresa_id');
              $table->bigIncrements('idRole');
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
          Schema::dropIfExists('users');
      }
  };
