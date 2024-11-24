<?php

namespace Winter\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Winter\Blog\Models\BlogPost;

class BlogPosts extends Controller
{
    public $implement = ['Backend.Behaviors.FormController', 'Backend.Behaviors.ListController'];
    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Winter.Blog', 'blog', 'posts');
    }

    public function index()
    {
        // Logic để hiển thị danh sách bài viết
        $this->vars['posts'] = BlogPost::all();
    }
}
