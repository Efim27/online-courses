<?php namespace Hima\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaNewsNews extends Migration
{
    public function up()
    {
        Schema::table('hima_news_news', function($table)
        {
            $table->dropColumn('news_time');
        });
    }
    
    public function down()
    {
        Schema::table('hima_news_news', function($table)
        {
            $table->date('news_time');
        });
    }
}
