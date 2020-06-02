<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_name");
            $table->text("product_desc");
            $table->decimal("price", 12, 4);//toi da 12 chu so
            $table->unsignedInteger("qty")->default(1);//neu ko truyen gia tri tu dong co gia tri = 1, unsigned là số ko âm
            $table->unsignedBigInteger("category_id");//tạo trường cho khóa ngoại và phải cùng kiểu và phải thêm unsign tức là không âm
            $table->foreign("category_id")->references("id")->on("categories");//gắn khóa, tham chiếu sang trường id của bảng categories
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
        Schema::dropIfExists('products');
    }
}
