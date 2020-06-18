<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->text("username")->after("user_id");
            $table->text("address")->after("username");
            $table->text("telephone")->after("address");
            $table->text("note")->after("telephone")->nullable(); //co the null tuy vao khach hang
            $table->unsignedBigInteger("status")->default(0)->after("grand_total");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['username']);
            $table->dropColumn(['address']);
            $table->dropColumn(['telephone']);
            $table->dropColumn(['status']);
            $table->dropColumn(['note']);
        });
    }
}
