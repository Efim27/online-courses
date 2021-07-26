<?php namespace Hima\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaNewsNews extends Migration
{
    public function up()
    {
        Schema::create('hima_news_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('news_time');
            $table->string('title');
            $table->text('about');
            $table->text('news_text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_news_news');
    }
}
