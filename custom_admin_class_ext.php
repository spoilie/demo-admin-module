<?php

class custom_admin_class_ext extends custom_admin_class_ext_parent {

   public function sayHello() {
      $oUser = $this->getUser();
      
      $content = "<h2>hello ".$oUser->oxuser__oxfname->value." ".$oUser->oxuser__oxlname->value."!</h2>";

      return $content;
   }

}
