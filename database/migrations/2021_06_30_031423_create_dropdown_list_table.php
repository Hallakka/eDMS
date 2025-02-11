<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropdownListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_class', function (Blueprint $table) {
            $table->id();
            $table->integer('doc_type_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('doc_type', function (Blueprint $table) {
            $table->id();
            $table->integer('doc_class_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_class');
        Schema::dropIfExists('doc_type_mod');
    }
}
