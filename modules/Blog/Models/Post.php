<?php 
namespace Blog\Models;

use Model;

class Post extends Model
{
    protected $table = 'blog_posts';  // Tên bảng trong cơ sở dữ liệu
    protected $fillable = ['title', 'content', 'slug'];

    public $timestamps = true;
}
