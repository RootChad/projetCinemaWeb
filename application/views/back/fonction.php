<?php
  function verify1($string){
	
     $string = str_replace(" ","-",$string);
   
    $string = str_replace("!","",$string);
    $string = str_replace("?","",$string);
    $string = str_replace(":","_",$string);
   
    $string = str_replace("‘","",$string);
    $string = str_replace("'","_",$string);
	return $string;
  }
  function verify4($string){
	
     $string = str_replace(" ","_",$string);
   
    
    $string = str_replace(":","_",$string);
   
    
    $string = str_replace("'","_",$string);
	return $string;
  }
  function verify3($string){
    
    $string = str_replace("-","_",$string);        
    return $string;
  }
  function verify2($string){
    $string = str_replace("-"," ",$string);
    $string = str_replace("_",":",$string);    
    return $string;
  }
?>