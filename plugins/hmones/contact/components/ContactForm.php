<?php namespace Hmones\Contact\Components;


use Cms\Classes\ComponentBase;
use Input;
use Mail;

/**
 *
 */
class ContactForm extends ComponentBase
{
  public function componentDetails(){
    return [
      'name' => 'Contact Form',
      'description' => 'Simple Contact Form'
    ];
  }

  public function onSend(){
    // These variables are available inside the message as Twig
    $vars = ['name' => Input::get('name'), 'email' => Input::get('email') , 'content' => Input::get('content')];

    Mail::send('hmones.contact::mail.content', $vars, function($content) {

        $content->to('haythameyd@gmail.com', 'Haytham Mones');
        $content->subject('New Message from the website');

    });
  }
}

?>
