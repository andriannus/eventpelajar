<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('title', 100);
            $table->enum('category', ['lomba', 'seminar', 'workstop', 'pensi', 'other']);
            $table->string('picture');
            $table->text('description');
            $table->string('contact', 20)->nullable();
            $table->string('link', 30)->nullable();
            $table->char('id_user', 36);
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
        Schema::dropIfExists('events');
    }
}
