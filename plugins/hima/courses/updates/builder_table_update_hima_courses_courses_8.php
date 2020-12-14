<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesCourses8 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->dropColumn('video_type');
            $table->dropColumn('video_link');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->string('video_type', 191)->default('youtube');
            $table->string('video_link', 191);
        });
    }
}
