<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMovies2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies',function(Blueprint $table){
            $table->string('critics',500);
            $table->dropColumn('rating');
            $table->renameColumn('length','duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies',function(Blueprint $table){
            $table->dropColumn('critics');
            $table->decimal('rating',3,1);
            $table->renameColumn('duration','length');
        });
    }
}
