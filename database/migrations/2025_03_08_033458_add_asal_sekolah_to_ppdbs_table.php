<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('ppdbs', function (Blueprint $table) {
        $table->string('asal_sekolah')->after('agama');
    });
}

public function down()
{
    Schema::table('ppdbs', function (Blueprint $table) {
        $table->dropColumn('asal_sekolah');
    });
}

};
