<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesCourses3 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->string('tag_color');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->dropColumn('tag_color');
        });
    }
}
