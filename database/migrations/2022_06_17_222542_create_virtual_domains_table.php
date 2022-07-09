<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_domains', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->unique();
            $table->string('home', 150);
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
        Schema::dropIfExists('virtual_domains');
    }
}
