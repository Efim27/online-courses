<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaCoursesCourses extends Migration
{
    public function up()
    {
        Schema::create('hima_courses_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('about');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_courses_courses');
    }
}
