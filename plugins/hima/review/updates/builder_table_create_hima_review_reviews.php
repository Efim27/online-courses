<?php namespace Hima\Review\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaReviewReviews extends Migration
{
    public function up()
    {
        Schema::create('hima_review_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('course_type');
            $table->string('owner_name');
            $table->string('owner_city');
            $table->text('review_text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_review_reviews');
    }
}
