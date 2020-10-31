<?php 
class Cms5f9df4cef11c0448428373_fd765de9c85df06e10152fdc7aa760b5Class extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['backend_user'] = BackendAuth::getUser();
}
}
