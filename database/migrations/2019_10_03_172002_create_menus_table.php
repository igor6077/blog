<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
                           $table->bigIncrements('id');
                $table->integer('parent_id')
                    ->default(null);
                $table->integer('sort')
                    ->default(0);
                $table->string('name', 100)
                    ->nullable();
                $table->string('link')
                    ->nullable();
                $table->string('type')
                    ->nullable();
                $table->boolean('active')
                    ->default(true);
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
        Schema::dropIfExists('menus');
    }
}
