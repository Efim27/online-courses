<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesTypes2 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_types', function($table)
        {
            $table->renameColumn('slag', 'slug');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_types', function($table)
        {
            $table->renameColumn('slug', 'slag');
        });
    }
}
