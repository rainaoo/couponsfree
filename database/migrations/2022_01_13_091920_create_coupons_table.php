<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Coupon;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('store_id');
            $table->string('title');
            $table->string('title_ar');
            $table->string('coupon_code');
            $table->float('coupon_discount');
            $table->string('main_image');
            $table->string('link');
            $table->text('description');
            $table->text('description_ar');
            $table->date('expires');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('coupons');
    }
}
