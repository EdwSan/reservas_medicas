<?php

function get_param($param_name)
{

  $param_value = "";
  if(isset($_GET[$param_name])) {
    $param_value = $_GET[$param_name];
	print "Get_Parameter Entro por _GET";
  } else if(isset($_POST[$param_name])) {
    $param_value = $_POST[$param_name];
	print "Get_Parameter Entro por _POST";
  } 
  
  //else 
  if ($param_name=="") {
    $param_value = $_SESSION[$param_name];
	print "Get_Parameter Entro por _SESSION";
  }

	print "prametro de Get_Parameter = ".$param_value;
  
  return $param_value;
}

?>
