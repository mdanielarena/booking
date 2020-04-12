<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_keys', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('pax')->nullable();
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_keys');
    }
}
