<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesLessons3 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_lessons', function($table)
        {
            $table->string('video_type')->default('youtube');
            $table->string('video_link');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_lessons', function($table)
        {
            $table->dropColumn('video_type');
            $table->dropColumn('video_link');
        });
    }
}
