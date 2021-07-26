<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesTags2 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_tags', function($table)
        {
            $table->string('color');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_tags', function($table)
        {
            $table->dropColumn('color');
        });
    }
}
