<?php namespace Hima\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaCoursesPreview2 extends Migration
{
    public function up()
    {
        Schema::table('hima_courses_preview', function($table)
        {
            $table->text('work_examples');
            $table->text('audience');
            $table->text('authors');
            $table->text('faq');
            $table->string('creative_result_n1');
            $table->string('creative_result_n2');
            $table->string('creative_result_n3');
            $table->string('creative_result_n4');
            $table->string('creative_result_n5');
            $table->string('creative_result_n6');
        });
    }
    
    public function down()
    {
        Schema::table('hima_courses_preview', function($table)
        {
            $table->dropColumn('work_examples');
            $table->dropColumn('audience');
            $table->dropColumn('authors');
            $table->dropColumn('faq');
            $table->dropColumn('creative_result_n1');
            $table->dropColumn('creative_result_n2');
            $table->dropColumn('creative_result_n3');
            $table->dropColumn('creative_result_n4');
            $table->dropColumn('creative_result_n5');
            $table->dropColumn('creative_result_n6');
        });
    }
}
