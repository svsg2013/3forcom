<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantsNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_network', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("country")->nullable();
            $table->string("phone")->nullable();
            $table->smallInteger("technical_consultant")->default(0);
            $table->text("requirement_details")->nullable();
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
        Schema::dropIfExists('consultants_network');
    }
}
