<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('token');
            $table->string('status');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        $data = [
            [
                'name' => 'Developer',
                'token' => Str::random(40),
                'status' => 'Active',
                'start_date' => null,
                'end_date' => null,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Admin',
                'token' => Str::random(40),
                'status' => 'Active',
                'start_date' => Carbon::now(),
                'end_date' =>  Carbon::create(2020, 12, 31, 24),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Pencari Kerja',
                'token' => Str::random(40),
                'status' => 'Active',
                'start_date' => Carbon::now(),
                'end_date' =>  Carbon::create(2020, 12, 31, 24),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Pemberi Kerja',
                'token' => Str::random(40),
                'status' => 'Active',
                'start_date' => Carbon::now(),
                'end_date' =>  Carbon::create(2020, 12, 31, 24),
                'created_at' => Carbon::now(),
            ],
        ];
        Role::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
