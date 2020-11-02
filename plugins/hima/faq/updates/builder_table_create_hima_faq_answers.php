<?php namespace Hima\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaFaqAnswers extends Migration
{
    public function up()
    {
        Schema::create('hima_faq_answers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('question');
            $table->text('answer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_faq_answers');
    }
}
