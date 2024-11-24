<?php

use Winter\Blog\Models\BlogPost;
use October\Rain\Database\Updates\Migration;
use Illuminate\Database\Schema\Blueprint;
use Schema;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('winter_blog_posts', function (Blueprint $table) {
            $table->id();
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
