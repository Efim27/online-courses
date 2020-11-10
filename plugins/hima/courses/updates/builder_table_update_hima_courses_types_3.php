<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesTypes3 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_types', function($table)
        {
            $table->string('slug', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_types', function($table)
        {
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
}
