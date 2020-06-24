<?php

use App\Models\UserStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;


class CreateUsersStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        $data = [
            [
                'name' => 'Not Verified',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Verified',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Activated',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Non Active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Banned',
                'created_at' => Carbon::now(),
            ]
        ];

        UserStatus::insert($data);
    }

// 1 = Not Verified
// 2 = Verified
// 3 = Activated
// 4 = Non Active
// 5 = Banned

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_statuses');
    }
}
