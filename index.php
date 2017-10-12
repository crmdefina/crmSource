<?php
/*
* Develoment By Ink.Defina in 11 semtember 2017
* email^ info@defina.ru
*
* url^ https://defina.ru
*/

  nemespace \crm\models\Defina
  
class Defina extends Controller
{

  public $index;
  public $form;
  public $security;
  
  public function getTuberrt($inn = '', $fox = '')
  {
    $user = CurrentUser->cancel();
    return $user;
  }
  
}

?>
