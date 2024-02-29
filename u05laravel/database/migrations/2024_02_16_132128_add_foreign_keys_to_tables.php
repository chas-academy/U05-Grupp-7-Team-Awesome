<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * För att göra databasen skallbar så har jag lagt in tabellern var för sig i --step som gör att alla tabeller får en egegen migration.
     * Och i Foregin Keys så har jag lagt in den column i tabellen som följer med nyckel plus själva nyckeln. Detta för att om man ska ta bort eller lägga till någon nyckel så kan man bara rollbacka tabellen med foreign keys.
     */
    public function up(): void
    {
        Schema::table('movie_my_list', function (Blueprint $table) {
            $table->unsignedBigInteger('my_list_id');
            $table->unsignedBigInteger('movie_id');


            $table->foreign('my_list_id')->references('id')->on('my_lists')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });




        Schema::table('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('user_id');


            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });




        Schema::table('my_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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


// Mike

// Jag tyckte jag var riktigt smart och implementerade inte in Foregien keys i borden olika migrationer
// Utan jag gjorde hör istället en egen migration bara för foregien keys.
// Jag hade en tanke om att detta skulle göra den enklare och mer skalbart om man hade velat lägga till eller ta bort dessa.
// Jag använde ->onDelete('cascade') som gör så att om man deletar id med denna funktion i en tabell så deletas detta in från alla tabeller som det finns i.