# [Grav](http://getgrav.org/) Transliterate Cyrillic Plugin

Transliterates cyrillic text into latin into twig templates. 

# Installation and Configuration

1. Download the zip version of [this repository](https://github.com/Captain-Flint/grav-plugin-transliterate-cyrillic-twig-filter) and unzip it under `/your/site/grav/user/plugins`.
2. Rename the folder to `transliterate-cyrillic-twig-filter`.

You should now have all the plugin files under

    /your/site/grav/user/plugins/transliterate-cyrillic-twig-filter

The plugin is enabled by default, and can be disabled by copying `user/plugins/transliterate-cyrillic-twig-filter/transliterate-cyrillic.yaml` into `user/config/plugins/transliterate-cyrillic-twig-filter.yaml` and setting `enabled: false`.

## Usage and configuration

A Twig-function, `transliterate_cyrillic()`, can be used to apply the functionality directly in Twig. Just pass content into it like `transliterate_cyrillic(page.content)`, or use it as a filter like `page.content|transliterate_cyrillic`.

MIT License 2018 by [Ole Vik](http://github.com/olevik).
MIT License 2019 by [Captain Flint](http://github.com/Captain-Flint).
