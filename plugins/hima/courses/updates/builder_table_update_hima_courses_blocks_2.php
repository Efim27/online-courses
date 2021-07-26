<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesBlocks2 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_blocks', function($table)
        {
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_blocks', function($table)
        {
            $table->dropColumn('course_id');
        });
    }
}
