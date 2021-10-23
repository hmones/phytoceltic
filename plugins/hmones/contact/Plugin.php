<?php namespace Hmones\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'Hmones\Contact\Components\ContactForm' => 'contactform'
      ];
    }

    public function registerSettings()
    {
    }
}
