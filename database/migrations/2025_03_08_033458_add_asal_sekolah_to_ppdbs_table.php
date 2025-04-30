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
        if (!Schema::hasColumn('ppdbs', 'asal_sekolah')) {
            Schema::table('ppdbs', function (Blueprint $table) {
                $table->string('asal_sekolah')->after('agama');
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('ppdbs', 'asal_sekolah')) {
            Schema::table('ppdbs', function (Blueprint $table) {
                $table->dropColumn('asal_sekolah');
            });
        }
    }

};
