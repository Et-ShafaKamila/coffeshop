<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKodePesananToKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('keuangan', function (Blueprint $table) {
            $table->string('kode_pesanan', 12)->nullable()->after('id');

            $table->foreign('kode_pesanan')->references('kode_pesanan')->on('pesanan')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keuangan', function (Blueprint $table) {
            $table->dropForeign('keuangan_kode_pesanan_foreign');
            
            $table->dropColumn('kode_pesanan');
        });
    }
}
