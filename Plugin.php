<?php namespace Genius\Contacts;

use Backend\Facades\Backend;
use Illuminate\Support\Facades\Event;
use System\Classes\PluginBase;

/**
 * Contacts Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'genius.contacts::lang.plugin.name',
            'description' => 'genius.contacts::lang.plugin.description',
            'author'      => 'Genius',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            Components\Form::class => 'contactForm'
        ];
    }

    public function boot()
    {
        Event::listen('backend.menu.extendItems', function($manager) {
            $manager->addSideMenuItems('Genius.Base', 'pages', [
                'contacts' => [
                    'label' => 'genius.contacts::lang.settings.menu_label',
                    'icon' => 'icon-envelope-o',
                    'url' => Backend::url('genius/contacts/settings/update/1'),
                    'order' => 20,
                ],
            ]);
            $manager->addSideMenuItems('Genius.Base', 'admin', [
                'contacts' => [
                    'label' => 'genius.contacts::lang.contacts.menu_label',
                    'icon' => 'icon-envelope-o',
                    'url' => Backend::url('genius/contacts/contacts'),
                    'order' => 20,
                ],
            ]);
        });
    }

}
