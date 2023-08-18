<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->id('channelid'); 
            $table->string('channelname');
            $table->integer('subscriberscount');
            $table->string('URL');
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->useCurrent(); 
        });
    }
     /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}