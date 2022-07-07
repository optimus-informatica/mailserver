<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('virtual_domain_id')->constrained();
	    $table->string('email', 150);
            $table->string('password');
            $table->string('home', 50);
            $table->unsignedInteger('uid')->default(1000);
	    $table->unsignedInteger('gid')->default(1000);
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
        Schema::dropIfExists('virtual_users');
    }
}
