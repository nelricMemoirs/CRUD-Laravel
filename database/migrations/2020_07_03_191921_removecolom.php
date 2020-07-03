<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Removecolom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('pertanyaans', 'user_name')){

            Schema::table('pertanyaans', function (Blueprint $table) {
                $table->dropColumn('user_name');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaans', function(Blueprint $table) {
            $table->string('user_name');
            
        });
    }
}
