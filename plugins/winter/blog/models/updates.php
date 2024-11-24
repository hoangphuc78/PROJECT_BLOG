<?php namespace Winter\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBlogpostsTable extends Migration
{
    public function up()
    {
        Schema::create('winter_blog_posts', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('winter_blog_posts');
    }
}
