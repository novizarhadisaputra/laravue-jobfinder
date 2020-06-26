<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_details', function (Blueprint $table) {
            $table->id();
            $table->string('profile_picture');
            $table->unsignedBigInteger('provinces_id');
            $table->unsignedBigInteger('cities_id');
            $table->unsignedBigInteger('districts_id');
            $table->unsignedBigInteger('subdistricts_id');
            $table->text('address');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('skills');
            $table->string('identity');
            $table->string('number_identity');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_details');
    }
}
