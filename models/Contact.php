<?php namespace Genius\Contacts\Models;

use Model;

/**
 * contact Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'genius_contacts_contacts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];

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

    public $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email',
        'phone' => 'required|min:8',
        'text' => 'required|min:4'
    ];

    public function getCreatedAtDateAttribute ()
    {
        return $this->created_at ? $this->created_at->format('d/m/Y H:i') : '';
    }

    public function setCreatedAtDateAttribute ($v)
    {
        return;
    }
}