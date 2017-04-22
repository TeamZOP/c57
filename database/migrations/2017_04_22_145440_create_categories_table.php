<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('categories', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
    });

    Schema::table('posts', function (Blueprint $table) {
      $table->integer('category_id')->unsigned();
      $table->foreign('category_id')->references('id')->on('categories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::table('posts', function (Blueprint $table) {
      $table->dropForeign('posts_category_id_foreign');
      $table->dropColumn('category_id');
    });

    Schema::dropIfExists('categories');
  }
}
