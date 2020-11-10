<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaCoursesTags extends Migration
{
    public function up()
    {
        Schema::create('hima_courses_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_courses_tags');
    }
}
