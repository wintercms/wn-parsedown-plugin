<?php

namespace Winter\Parsedown\Tests;

use Illuminate\Support\Facades\App;
use System\Tests\Bootstrap\PluginTestCase;
use Winter\Storm\Support\Facades\Markdown;

class ParseDownTest extends PluginTestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(\Winter\Parsedown\Classes\Markdown::class, App::make('parse.markdown'));
    }

    public function testFacade()
    {
        // Following Markdown does not work with CommonMark as it expects a space
        // after the hash to render a heading, but does with Parsedown.
        $markdown = '#Title' . PHP_EOL
            . PHP_EOL
            . 'Some content underneath.';

        $parsed = Markdown::parse($markdown);

        $this->assertEquals('<h1>Title</h1>' . PHP_EOL . '<p>Some content underneath.</p>', $parsed);
    }
}
