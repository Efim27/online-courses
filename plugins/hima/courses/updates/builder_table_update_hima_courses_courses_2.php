<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesCourses2 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
