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
            $table->string('provinces_id');
            $table->string('cities_id');
            $table->string('districts_id');
            $table->string('subdistricts_id');
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
