<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('feature_image');
            $table->string('first_image');
            $table->string('second_image');
            $table->integer('category_id');
            // Panaudota "nullable". Jeigu nėra subkategorijų, galima vis vien įkelti skelbimą.
            $table->integer('subcategory_id')->nullable();
            $table->integer('childcategory_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('price_status');
            $table->string('product_condition');
            $table->string('listing_location');
            $table->integer('country_id');
            // Panaudota "nullable". Jeigu nėra nurodytas miestas, valsijas, galima vis vien įkelti skelbimą.
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('phone_number');
            // Jeigu 1, skelbimas patalpintas, jeigu 0 laukia patvirtinimo
            $table->integer('published')->default(1);
            $table->string('link');
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
        Schema::dropIfExists('advertisements');
    }
};
