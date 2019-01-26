<?php
class product
{
   $name;
   $product_des;
   $product_pri;

   //simple setters
   function set_name($n)
   {
      $name = $n;
   }

   function set_description($d)
   {
      $product_des = $d;
   }

   function set_price($p)
   {
      $product_pri = $p;
   }

   //simple getters
   function get_name()
   {
      return $name;
   }

   function get_description()
   {
      return $product_des;.2
   }

   function get_price()
   {
      return $product_pri;
   }

}
?>