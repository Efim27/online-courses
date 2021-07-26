<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesTypes extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_types', function($table)
        {
            $table->string('slag');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_types', function($table)
        {
            $table->dropColumn('slag');
        });
    }
}
