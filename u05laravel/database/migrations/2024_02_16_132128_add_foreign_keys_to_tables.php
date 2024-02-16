<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('my_list_movies', function (Blueprint $table) {
            $table->foreign('my_list_id')->references('id')->on('my_lists');
            $table->foreign('movie_id')->references('id')->on('movies');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('my_lists', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_list_movies');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('my_lists');
    }
};
