<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id();
            $table->string('surname', 100);
            $table->string('name', 60);
            $table->string('patronymic', 100);
            $table->string('company')->nullable()->default('Нет компании');
            $table->string('phone', 12);
            $table->string('email');
            $table->date('birth_date')->nullable();
            $table->string('photo')->nullable()->default('Нет фото');
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
        Schema::dropIfExists('notebooks');
    }
}
