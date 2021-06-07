<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actor_movie', function (Blueprint $table) {
            $table  -> foreign('actor_id', 'actormovie')
                    -> references('id')
                    -> on('actors');
                    
            $table  -> foreign('movie_id', 'movieactor')
                    -> references('id')
                    -> on('movies');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actor_movie', function (Blueprint $table) {
            $table  -> dropForeign('actormovie');
            $table  -> dropForeign('movieactor');
        });
    }
}
