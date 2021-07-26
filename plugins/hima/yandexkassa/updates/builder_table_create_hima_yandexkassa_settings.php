<?php namespace Hima\Yandexkassa\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHimaYandexkassaSettings extends Migration
{
    public function up()
    {
        Schema::create('hima_yandexkassa_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('secret_key');
            $table->string('shop_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hima_yandexkassa_settings');
    }
}
