<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subtitle');
            $table->string('descriptiontitle');
            $table->text('description');
            $table->text('description2');
            $table->string('clienttitle');
            $table->string('servicetitle');
            $table->string('teamtitle');
            $table->string('browsetitle');
            $table->text('browsesubtitle');
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
        Schema::dropIfExists('homepages');
    }
}
