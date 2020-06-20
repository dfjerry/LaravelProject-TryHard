<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->string("blog_image1")->after("blog_image")->nullable();
            $table->string("blog_image2")->after("blog_image1")->nullable();
            $table->string("blog_image3")->after("blog_image2")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->dropColumn(["blog_image1"]);
            $table->dropColumn(["blog_image2"]);
            $table->dropColumn(["blog_image3"]);
        });
    }
}
