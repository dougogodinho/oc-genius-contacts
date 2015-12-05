<?php namespace Genius\Contacts\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use Genius\Contacts\Models\Contact;
use Lang;

/**
 * Contacts Back-end Controller
 */
class Contacts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Genius.Base', 'admin');
    }

    /**
     * Deleted checked contacts.
     */
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $contactId) {
                if (!$contact = Contact::find($contactId)) continue;
                $contact->delete();
            }

            Flash::success(Lang::get('genius.contacts::lang.contacts.delete_selected_success'));
        }
        else {
            Flash::error(Lang::get('genius.contacts::lang.contacts.delete_selected_empty'));
        }

        return $this->listRefresh();
    }

    public function preview ($id = null, $context = null) {

        parent::preview($id, $context);

        $this->vars['formModel']->is_read = 1;
        $this->vars['formModel']->update();
    }
}