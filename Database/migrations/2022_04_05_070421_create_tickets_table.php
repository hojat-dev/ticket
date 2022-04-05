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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('order_id')->default(0);
            $table->string('title',100);
            $table->text('description');
            $table->boolean('is_deleted')->comment('1 -> test,2->test 1');
            $table->tinyInteger('part')->comment('1 -> test,2->test 1');
            $table->tinyInteger('important')->comment('1 ->low,2->medium,3-> high');
            $table->string('status',20);
            $table->timestamp('date_last_reply')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
