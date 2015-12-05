<?php namespace Genius\Contacts\Models;

use Model;

/**
 * Setting Model
 */
class Setting extends Model
{

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['text', 'contacts'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'genius_contacts_settings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}