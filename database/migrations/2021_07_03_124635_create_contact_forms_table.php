<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {      #PK主キー
            $table->id();
            $table->string('last_name', 20);
            $table->string('first_name', 20);
            $table->string('email', 255);
            $table->boolean('gender');
            $table->tinyInteger('age');
            $table->string('contact')->nullable();
            $table->timestamps();
        });

        // Schema::create('products', function (Blueprint $table) {          #FK外部キー
        //     $table->id();
        //     $table->UnsignedBigInteger('bought_user_id');
        //     $table->timestamps();
        //     $table->foreign('primary_category_id')->references('id')->on('contact_forms');
        //     // primary_category_idカラムに外部キー制約を付与
        // });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
        // Schema::dropIfExists('products');
    }
}
