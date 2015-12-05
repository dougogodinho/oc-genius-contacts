<?php namespace Genius\Contacts\Updates;

use Illuminate\Support\Facades\DB;
use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('genius_contacts_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('form_email');
            $table->string('title');
            $table->text('text');
            $table->text('contacts');
            $table->timestamps();
        });

        DB::table('genius_contacts_settings')->insert(['id'=>1]);
    }

    public function down()
    {
        Schema::dropIfExists('genius_contacts_settings');
    }

}
