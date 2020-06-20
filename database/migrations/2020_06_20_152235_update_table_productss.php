<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableProductss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
           $table->string("product_image")->change();
           $table->string("product_image1")->after("product_image");
           $table->string("product_image2")->after("product_image1");
           $table->string("product_image3")->after("product_image2");
           $table->string("product_image4")->after("product_image3");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
           $table->dropColumn(["product_image"]);
           $table->dropColumn(["product_image1"]);
           $table->dropColumn(["product_image2"]);
           $table->dropColumn(["product_image3"]);
           $table->dropColumn(["product_image4"]);
        });
    }
}
