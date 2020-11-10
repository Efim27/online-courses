<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesBlocks extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_blocks', function($table)
        {
            $table->string('number');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_blocks', function($table)
        {
            $table->dropColumn('number');
        });
    }
}
