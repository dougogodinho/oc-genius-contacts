<?php namespace Genius\Contacts\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use Genius\Contacts\Models\Setting;
use Lang;

/**
 * Settings Back-end Controller
 */
class Settings extends Controller
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

        BackendMenu::setContext('Genius.Base', 'pages');
    }

    /**
     * Deleted checked settings.
     */
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $settingId) {
                if (!$setting = Setting::find($settingId)) continue;
                $setting->delete();
            }

            Flash::success(Lang::get('genius.contacts::lang.settings.delete_selected_success'));
        }
        else {
            Flash::error(Lang::get('genius.contacts::lang.settings.delete_selected_empty'));
        }

        return $this->listRefresh();
    }
}