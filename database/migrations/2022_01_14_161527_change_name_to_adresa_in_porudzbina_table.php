<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNameToAdresaInPorudzbinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('porudzbina', function (Blueprint $table) {
            //
            $table->renameColumn('adresa','adresaPosiljaoca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('porudzbina', function (Blueprint $table) {
            //
            $table->renameColumn('adresaPosiljaoca','adresa');
        });
    }
}
