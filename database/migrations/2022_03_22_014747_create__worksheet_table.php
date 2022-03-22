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
        Schema::create('worksheets', function (Blueprint $table) {
            $table->id();
            $table->text('instruction');
            $table->text('options');
            $table->integer('ganswer');
            $table->integer('place');
            $table->timestamps();
        });
        Schema::create('post_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('taskId');
            //$table->foreign('taskId')->references("id")->on('worktasks');
            $table->integer('optionId');
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
        Schema::dropIfExists('worksheet');
    }
};
