<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('telefono')->unique();
            $table->string('email')->unique();
            $table->date('date_born');
            $table->string('domicilio');
            $table->string('ctutor');
            $table->string('ttutor')->unique();

            $table->boolean('cocina')->default(false);
            $table->boolean('papel_nono')->default(false);
            $table->boolean('danza')->default(false);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        /**Schema::create('talleres', function (Blueprint $table) {
            $table->boolean('servicio1')->deafult(false);
            $table->boolean('servicio2')->deafult(false);
            $table->boolean('servicio3')->deafult(false);
        });**/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
