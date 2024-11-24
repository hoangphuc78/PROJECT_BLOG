<?php

namespace Winter\Blog;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;
use Winter\Blog\Models\BlogPost;

/**
 * Blog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'winter.blog::lang.plugin.name',
            'description' => 'winter.blog::lang.plugin.description',
            'author'      => 'Winter',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {
        // Có thể sử dụng để đăng ký các dịch vụ hoặc bindings
    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {
        // Thực hiện các hành động khi plugin được khởi tạo
    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return [
            'Winter\Blog\Components\BlogPosts' => 'blogPosts', // Đăng ký component BlogPosts
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return [
            'winter.blog.manage_blog_posts' => [
                'tab' => 'winter.blog::lang.plugin.name',
                'label' => 'winter.blog::lang.permissions.manage_blog_posts',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }
    

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return [
            'blog' => [
                'label'       => 'winter.blog::lang.plugin.name',
                'url'         => Backend::url('winter/blog/posts'),
                'icon'        => 'icon-leaf',
                'permissions' => ['winter.blog.manage_blog_posts'],
                'order'       => 500,
            ],
        ];
    }
}
