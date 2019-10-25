<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->String("maincategory");
            $table->String("subcategory");
            $table->String('companyname');
            $table->String('fax1')->nullable();
            $table->String('fax2')->nullable();
            $table->String("phone")->nullable();
            $table->String("phone1")->nullable();
            // cell phones
            $table->String("mobile1")->nullable();
            $table->String("mobile2")->nullable();
            $table->String("email")->nullable();
            $table->String("location")->nullable();
            $table->String("website")->nullable();
            $table->String("picture")->nullable();
            $table->String("p_o_box")->nullable();
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
        Schema::dropIfExists('categories');
    }
}
