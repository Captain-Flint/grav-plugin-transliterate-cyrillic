<?php
namespace Grav\Plugin;

use Grav\Common\Grav;
use Grav\Common\Plugin;
use Grav\Common\Page\Page;
use Grav\Common\Twig\Twig;
use RocketTheme\Toolbox\Event\Event;

require 'transliterate-cyrillic-method.php';
use TransliterateCyrillicPlugin\TransliterateCyrillicMethod as TransliterateCyrillic;

/**
 * Transliterates cyrillic text into latin
 *
 * Class TransliterateCyrillicPlugin
 *
 * @package Grav\Plugin
 * @return  void
 * @license MIT License by Ole Vik
 */
class TransliterateCyrillicPlugin extends Plugin
{
    /**
     * Register events with Grav
     *
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     *
     * @return array
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            return;
        }
        
        $config = (array) $this->config->get('plugins');
        $config = $config['transliterate-cyrillic'];
        if ($config['enabled']) {
            $this->enable(
                [
                    'onTwigExtensions' => ['onTwigExtensions', 0]
                ]
            );
        } else {
            return;
        }
    }

    /**
     * Replaces content with transliterated Cyrillic content
     *
     * @param Event $event Instance of RocketTheme\Toolbox\Event\Event
     *
     * @return void
     */
    public function output(Event $event)
    {
        $page = $event['page'];
        $config = (array) $this->config->get('plugins');
        $config = $config['transliterate-cyrillic'];
        $page->setRawContent($content);
    }

    /**
     * Add Twig Extension
     *
     * @return void
     */
    public function onTwigExtensions()
    {
        include_once __DIR__ . '/twig/TransliterateCyrillicExtension.php';
        $this->grav['twig']->twig->addExtension(new TransliterateCyrillicExtension());
    }
}
