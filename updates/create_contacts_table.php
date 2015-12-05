<?php namespace Genius\Contacts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('genius_contacts_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('text');
            $table->boolean('is_read');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('genius_contacts_contacts');
    }

}
