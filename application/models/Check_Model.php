

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check_model extends CI_Model {

   //  circle office insert  shiva
   public function gb($array)
   {
	  if($this->db->insert('data_insert',$array))
		{
		  return true;
		}
	   else
	   {
		   return false;
	   }
   }

}