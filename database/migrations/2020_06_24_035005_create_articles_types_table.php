<?php

use App\Models\ArticleType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $data = [
            [
                'name' => 'Job',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Article',
                'created_at' => Carbon::now(),
            ]
        ];
        ArticleType::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_types');
    }
}
