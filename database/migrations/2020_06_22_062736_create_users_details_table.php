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
            $table->unsignedBigInteger('users_id');
            $table->string('profile_picture')->nullable();
            $table->unsignedBigInteger('provinces_id')->nullable();
            $table->unsignedBigInteger('cities_id')->nullable();
            $table->unsignedBigInteger('districts_id')->nullable();
            $table->unsignedBigInteger('subdistricts_id')->nullable();
            $table->text('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('skills')->nullable();
            $table->string('identity')->nullable();
            $table->string('number_identity')->nullable();
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
