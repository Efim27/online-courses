<?php 
class Cms5f9eb20a68405486615387_1401ecc98a271b7bbcc57eb0d30006aaClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['backend_user'] = BackendAuth::getUser();
}
}
