<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaCoursesPreview extends Migration
{
    public function up()
    {
        Schema::create('hima_courses_preview', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('about_mini');
            $table->text('about');
            $table->string('video_about');
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_courses_preview');
    }
}
