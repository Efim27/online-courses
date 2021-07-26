<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesBlocks3 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_blocks', function($table)
        {
            $table->integer('course_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_blocks', function($table)
        {
            $table->integer('course_id')->nullable(false)->change();
        });
    }
}
