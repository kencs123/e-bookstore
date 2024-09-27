<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Publisher_id')->onUpdate('cascade') ->onDelete('cascade');
            $table->string('title');
            $table->string('author');
            $table->string('year');
            $table->string('synopsis');
            $table->string('image');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
