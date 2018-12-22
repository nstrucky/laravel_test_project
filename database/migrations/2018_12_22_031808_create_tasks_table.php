<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('complete');
            $table->string('title', 100);
            $table->date('due_date');
            $table->unsignedInteger('assignment_id', false);
            $table->timestamps();
        });

        Schema::table('assignments', function (Blueprint $table) {
            $table->string('title', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');

        Schema::table('assignments', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
}
