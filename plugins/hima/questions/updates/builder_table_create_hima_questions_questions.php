<?php namespace Hima\Questions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaQuestionsQuestions extends Migration
{
    public function up()
    {
        Schema::create('hima_questions_questions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email');
            $table->string('phone');
            $table->text('question');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_questions_questions');
    }
}
