<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesTags4 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_tags', function($table)
        {
            $table->integer('course_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_tags', function($table)
        {
            $table->integer('course_id')->unsigned(false)->change();
        });
    }
}
