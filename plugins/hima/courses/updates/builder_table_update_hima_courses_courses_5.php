<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesCourses5 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->integer('type_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_courses', function($table)
        {
            $table->integer('type_id')->nullable(false)->change();
        });
    }
}
