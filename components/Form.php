<?php namespace Genius\Contacts\Components;

use Cms\Classes\ComponentBase;
use Genius\Contacts\Models\Contact;
use Genius\Contacts\Models\Setting;

class Form extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'genius.contacts::lang.components.form.name',
            'description' => 'genius.contacts::lang.components.form.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onContact ()
    {
        $setting = Setting::first();

        $data = \Request::all();

        Contact::create($data);

        \Mail::send('genius.base::contact', $data, function ($message) use ($setting, $data) {
            $message->to($setting->form_email);
            $message->replyTo($data['email'], $data['name']);
        });
        return 1;
    }
}