<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsAnchoringImageTileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_anchoring_image_tile_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->integer('cms_anchoring_image_tile_id');
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
        Schema::dropIfExists('cms_anchoring_image_tile_details');
    }
}
