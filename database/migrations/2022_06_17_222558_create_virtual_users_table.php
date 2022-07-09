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
            $table->foreignId('domain_id')->constrained('virtual_domains');
            $table->string('email', 150);
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['email', 'domain_id']);
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
