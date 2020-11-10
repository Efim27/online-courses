<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesTags5 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_tags', function($table)
        {
            $table->integer('course_id')->nullable()->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_tags', function($table)
        {
            $table->integer('course_id')->nullable(false)->unsigned()->change();
        });
    }
}
