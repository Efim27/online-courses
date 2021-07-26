<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaCoursesCourseUser extends Migration
{
    public function up()
    {
        Schema::create('hima_courses_course_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('course_id');
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_courses_course_user');
    }
}
