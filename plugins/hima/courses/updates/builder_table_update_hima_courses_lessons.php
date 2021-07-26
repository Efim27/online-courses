<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesLessons extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_lessons', function($table)
        {
            $table->integer('block_id');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_lessons', function($table)
        {
            $table->dropColumn('block_id');
        });
    }
}
