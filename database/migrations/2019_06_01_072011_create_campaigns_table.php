<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brand_id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('plan_engagement');
            $table->string('plan_budget');
            $table->string('plan_cost');
            $table->string('real_engagement')->nullable();
            $table->string('real_budget')->nullable();
            $table->string('real_cost')->nullable();
            $table->string('content_type')->nullable();
            $table->string('post_frequency')->nullable();
            $table->string('post_reference')->nullable();
            $table->string('post_image')->nullable();
            $table->text('post_rules')->nullable();
            $table->string('caption')->nullable();
            $table->date('deadline_date')->nullable();
            $table->integer('status');
            $table->date('stopped_at')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
