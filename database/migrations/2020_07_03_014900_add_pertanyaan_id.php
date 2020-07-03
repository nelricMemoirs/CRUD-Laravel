<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanId extends Migration
{   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

            Schema::table('jawabans', function (Blueprint $table) {
                $table->integer('pertanyaan_id');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('jawabans', 'pertanyaan_id')){
            Schema::table('jawabans', function(Blueprint $table) {
                $table->dropColumn('pertanyaan_id');
                
            });
        }
    }
}
