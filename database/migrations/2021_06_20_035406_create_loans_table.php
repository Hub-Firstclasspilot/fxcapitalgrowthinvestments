<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->string("fullname");
            $table->integer("amount");
            $table->text("reason");
            $table->string("request_code")->unique();
            $table->integer("duration");
            $table->enum("status", ["pending", "repayed", "running"])->default("pending");
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
        Schema::dropIfExists('loans');
    }
}
