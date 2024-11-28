<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultiColumnToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('externals', function (Blueprint $table) {
            $table->unsignedInteger('ex_route_id')->after('dts');
            $table->foreign('ex_route_id')->references('id')->on('ex_route')->onDelete('set null');
        });

        Schema::table('internals', function (Blueprint $table) {
            $table->unsignedInteger('in_route_id')->after('dts');
            $table->foreign('in_route_id')->references('id')->on('in_route')->onDelete('set null');
        });

        Schema::table('in_route', function (Blueprint $table) {
            $table->unsignedInteger('internals_id')->after('dts_no');
            $table->foreign('internals_id')->references('id')->on('internals')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('', function (Blueprint $table) {
            //
        });
    }
}
