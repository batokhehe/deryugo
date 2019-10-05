<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('influencers', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('gender');
        $table->date('birthdate');
        $table->string('engagement_rate');
        $table->string('type');
        $table->string('followers');
        $table->string('avg_impression');
        $table->string('avg_impression_image');
        $table->string('instagram_username');
        $table->string('email');
        $table->string('phone_number')->nullable();
        $table->string('password');
        $table->integer('user_id');
        $table->longtext('image');
        $table->integer('status');
        $table->rememberToken();
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
        Schema::dropIfExists('influencers');
    }
}
