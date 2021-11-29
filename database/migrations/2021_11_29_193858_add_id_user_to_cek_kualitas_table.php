<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdUserToCekKualitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cek_kualitas', function (Blueprint $table) {
            $table->bigInteger('id_user', false, true)->after('id');

            $table->foreign('id_user')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cek_kualitas', function (Blueprint $table) {
            $table->dropForeign('cek_kualitas_id_user_foreign');
            
            $table->dropColumn('id_user');
        });
    }
}
