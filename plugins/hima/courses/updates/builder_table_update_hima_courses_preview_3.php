<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesPreview3 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_preview', function($table)
        {
            $table->text('materials');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_preview', function($table)
        {
            $table->dropColumn('materials');
        });
    }
}
