<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable  extends Migration
{
    public function up()
    {
        Schema::create('files', function(Blueprint $table) {

            $table->increments('id');
            $table->string("title")->nullable();
            $table->string("alt")->nullable();
            $table->string("size")->nullable();
            $table->string("extension")->nullable();
            $table->string("type")->nullable();
            $table->string("path")->nullable();
            $table->integer("fileable_id")->nullable();
            $table->integer("fileable_type")->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
