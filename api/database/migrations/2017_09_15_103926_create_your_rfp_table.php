<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYourRfpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('your_rfp', function (Blueprint $table) {
            $table->increments('id');
            $table->string("requirement_document")->nullable();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("email")->nullable();
			$table->string("phone")->nullable();
            $table->string("company")->nullable();
            $table->string("country")->nullable();
            $table->text("solutions")->nullable();
            $table->text("describe_requirement")->nullable();
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
        Schema::dropIfExists('your_rfp');
    }
}
