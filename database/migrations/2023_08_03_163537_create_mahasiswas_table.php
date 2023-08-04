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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nim')->unique();
            $table->string('password');
            $table->string('fullname');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('jenjang');
            $table->string('foto')->nullable();
            $table->integer('kelompok')->nullable();
            $table->string('instagram')->nullable();
            $table->string('line')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('hobi')->nullable();
            $table->integer('minat_ukm')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
