<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesLessons2 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_lessons', function($table)
        {
            $table->integer('block_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_lessons', function($table)
        {
            $table->integer('block_id')->nullable(false)->change();
        });
    }
}
