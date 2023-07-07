<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_title')->nullable();
            $table->text('slug')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->text('android_application_link')->nullable();
            $table->text('ios_application_link')->nullable();
            $table->text('web_address_link')->nullable();
            $table->text('services')->nullable();
            $table->text('main_image')->nullable();
            $table->text('description')->nullable();
            $table->longText('extra_description')->nullable();
            $table->text('about_images')->nullable();
            $table->text('about_description')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
