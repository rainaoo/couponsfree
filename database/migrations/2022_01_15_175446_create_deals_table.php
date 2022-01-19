<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Deal;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('store_id');
            $table->string('title');
            $table->string('title_ar');
            $table->string('description');
            $table->string('description_ar');
            $table->string('main_image');
            $table->string('link');
            $table->float('price_old');
            $table->float('price_new');
            $table->integer('discount');
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
        Schema::dropIfExists('deals');
    }
}
