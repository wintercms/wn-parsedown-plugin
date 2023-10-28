# Parsedown plugin

Provides backwards compatibility for older Markdown content by reverting the Markdown parser in Winter CMS back to the [Parsedown](https://github.com/erusev/parsedown) library.

## Installation

```
composer require winter/wn-parsedown-plugin
```

## Usage

As long as this plugin is enabled, it should work automatically. Any usage of the `Markdown` facade or making of the `parse.markdown` app binding should use Parsedown library instead.

This plugin has been set up to be API-compatible with the CommonMark library that is now installed with Winter CMS, but using the new API to enable or disable configuration will be ignored for Parsedown.

## License

MIT.
