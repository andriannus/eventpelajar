<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('email', 30)->unique();
            $table->string('password');
            $table->string('avatar')->default('avatar.jpeg');
            $table->enum('gender', ['l', 'p']);
            $table->date('birthday');
            $table->text('description')->nullable();
            $table->string('institution', 30)->nullable();
            $table->text('address')->nullable();
            $table->string('contact', 20)->nullable();
            $table->boolean('block')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
