<?php 
class Cms5f9f3a30a1821823360290_da5ee4f4ef83be576e9dd677f34eaa53Class extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['backend_user'] = BackendAuth::getUser();
}
}
