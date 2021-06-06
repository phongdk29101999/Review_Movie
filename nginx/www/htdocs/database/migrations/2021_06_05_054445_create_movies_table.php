<?php
//phpcs:disable

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * This will suppress all the PMD warnings in
 * this class.
 *
 * @SuppressWarnings(PHPMD)
 */
class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->integer('movie_lenght');
            $table->string('director');
            $table->year('production_year');
            $table->float('expert_evaluation', 3, 1);
            $table->float('watched_evaluation', 3, 1);
            $table->text('description');
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
        Schema::dropIfExists('movies');
    }
}