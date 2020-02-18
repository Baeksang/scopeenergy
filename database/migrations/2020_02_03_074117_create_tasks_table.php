<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('projectname')->Nullable();
            $table->string('projectid')->Nullable();
            $table->string('customername')->Nullable();
            $table->string('customercontact')->Nullable();
            $table->string('customerphone')->Nullable();
            $table->string('address1')->Nullable();
            $table->string('address2')->Nullable();
            $table->string('address3')->Nullable();
            $table->string('kepcoid')->Nullable();
            $table->string('businessmodel')->Nullable();
            $table->string('building')->Nullable();
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
        Schema::dropIfExists('tasks');
    }
}
