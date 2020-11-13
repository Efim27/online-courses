<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesPreview extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_preview', function($table)
        {
            $table->integer('course_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_preview', function($table)
        {
            $table->integer('course_id')->nullable(false)->change();
        });
    }
}
