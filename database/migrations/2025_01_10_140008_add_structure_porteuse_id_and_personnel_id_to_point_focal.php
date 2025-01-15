<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('point_focal', function (Blueprint $table) {

            $table->foreignId('personnel_id')->constrained()->onDelete('cascade');
            $table->foreignId('structure_porteuse_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('point_focal', function (Blueprint $table) {
            $table->dropForeign(['personnel_id']);
            $table->dropColumn('personnel_id');

            $table->dropForeign(['structure_porteuse_id']);
            $table->dropColumn('structure_porteuse_id');
        });
    }
};
