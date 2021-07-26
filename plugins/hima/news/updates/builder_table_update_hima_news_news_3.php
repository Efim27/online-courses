<?php namespace Hima\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHimaNewsNews3 extends Migration
{
    public function up()
    {
        Schema::table('hima_news_news', function($table)
        {
            $table->binary('mini');
        });
    }
    
    public function down()
    {
        Schema::table('hima_news_news', function($table)
        {
            $table->dropColumn('mini');
        });
    }
}
