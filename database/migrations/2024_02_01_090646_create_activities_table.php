<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing ID
            $table->string('name'); // TEXT type
            $table->integer('age')->nullable(); // INTEGER, nullable
            $table->string('activity'); // TEXT type
            $table->text('description')->nullable(); // TEXT, nullable
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
