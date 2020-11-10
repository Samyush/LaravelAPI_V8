<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityPolls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->timestamps();
//            $table->timestamps('created_at');
//            $table->timestamps('updated_at');
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->mediumText('question');
            $table->unsignedInteger('poll_id');
            $table->timestamps();

        });

        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('answer');
            $table->unsignedInteger('question_id');
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
        Schema::dropIfExists('polls');

        Schema::dropIfExists('questions');

        Schema::dropIfExists('answers');
    }
}
