<?php

namespace Winter\Parsedown;

use Illuminate\Support\Facades\App;
use System\Classes\PluginBase;
use Winter\Parsedown\Classes\Markdown;

/**
 * Parsedown Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'winter.parsedown::lang.plugin.name',
            'description' => 'winter.parsedown::lang.plugin.description',
            'author'      => 'Winter CMS',
            'icon'        => 'icon-markdown'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {
        App::bind('parse.markdown', function () {
            return new Markdown;
        });
    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }
}
