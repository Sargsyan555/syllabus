<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_videos', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['use_of_software','manually_setup','automated_setup','run_simulation','flat_bet_and_videos']);
            $table->string('name');
            $table->string('link');
            $table->string('status');
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
        Schema::dropIfExists('members_videos');
    }
}
