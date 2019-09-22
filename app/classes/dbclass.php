<?php

class dbclass{

var $con;

private $level;
private $result;
private $query;

/*MAKE CONSTRUCTOR FOR  CONNECTION*/
public  function __construct() {	
	$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	// Check connection
	if(mysqli_connect_errno($this->con)){
	  die( "Database Error: " . mysqli_connect_error() );
	}    
}


public function ipAddress(){
	return $_SERVER['REMOTE_ADDR'];
}

public function fetchRow($sql) {
	if($this->result=mysqli_query($this->con,$sql)){
		return mysqli_fetch_assoc($this->result);
	} else {
		return false;
	}
}

public function fetchResult($sql) {
	$this->result=mysqli_query($this->con,$sql) or die ( mysqli_error($this->con));
	while ($row = mysqli_fetch_assoc($this->result)) {
	  $data[] = $row;
	}	
	if(is_array($data)){
		return $data;
	} else {
		return false;
	}
}


public function _insert($table, $data, $exclude = array()) {

    $fields = $values = array();
    if( !is_array($exclude) ) $exclude = array($exclude);
    foreach( array_keys($data) as $key ) {
        if( !in_array($key, $exclude) ) {
            $fields[] = "`$key`";
			$values[] = "'" . $data[$key] . "'";
        }
    }

    $fields = implode(",", $fields);
    $values = implode(",", $values);
	
	$sqlQuery = "INSERT INTO `$table` ($fields) VALUES ($values)";
	
	if($this->query=mysqli_query($this->con, $sqlQuery)){
		return array( 
			'mysql_error' => false,
			'mysql_insert_id'=> mysqli_insert_id($this->con),
			'mysql_affected_rows' => mysqli_affected_rows($this->con),
			'mysql_info' => mysqli_info($this->con)
		);
	} else {
		return array( 'mysql_error' => mysqli_error($this->con) );
	}	
}



public function _update($table, $colums = array(), $where = array(), $exclude = array()) {
	
	$fields = $values = array();
    if( !is_array($exclude) ) $exclude = array($exclude);
    foreach( array_keys($colums) as $key ) {
        if( !in_array($key, $exclude) ) {			
			$fields[] = "`$key`='" . $colums[$key]. "'";
        }
    }
	
	foreach( array_keys($where) as $k) {
		$w[] = "`$k`='".$where[$k]."'";
	}

	$sqlQuery = "UPDATE `$table` SET " . implode( ', ', $fields ) . ' WHERE ' . implode( ' AND ', $w );
	
	if($this->query=mysqli_query($this->con, $sqlQuery)){
		return array( 
			'mysql_error' => false,
			'mysql_affected_rows' => mysqli_affected_rows($this->con),
			'mysql_info' => mysqli_info($this->con)
		);
	} else {
		return array( 'mysql_error' => mysqli_error($this->con) );
	}	
	
}

public function _query($sql) {
	$query = $this->result=mysqli_query($this->con,$sql) or die ( mysqli_error($this->con));	
	if($query){
		return array( 
			'mysql_error' => false,
			'mysql_affected_rows' => mysqli_affected_rows($this->con),
			'mysql_info' => mysqli_info($this->con)
		);
	} else {
		return array( 'mysql_error' => mysqli_error($this->con) );
	}
}

public function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
}


public function created($time){
	return date('d-m-Y', $time);
}

public function timestamp($time, $formate){
	if($formate=='date'){
		return date('d-m-Y', $time);
	} else {
		return date('d-m-Y', $time);
	}
}

public function dateReplace($date){  
	$d = explode('-', $date);
	return $d[2].'-'.$d[1].'-'.$d[0];
}

public function time_stamp($session_time) {
	
	  $time_difference = time() - $session_time;
	  $seconds = $time_difference ;
	  $minutes = round($time_difference / 60 );
	  $hours = round($time_difference / 3600 );
	  $days = round($time_difference / 86400 );
	  $weeks = round($time_difference / 604800 );
	  $months = round($time_difference / 2419200 );
	  $years = round($time_difference / 29030400 );
	  
	  // Seconds
	  if($seconds <= 60) {
	  $time = "$seconds seconds ago";
	  }
	  //Minutes
	  else if($minutes <=60) {	
		  $time = ($minutes==1) ? "one minute ago" : "$minutes minutes ago" ;
	  }
	  //Hours
	  else if($hours <=24) {
		 $time = ($hours==1) ? "one hour ago" : "$hours hours ago" ;
	  }
	  
	  //Days
	  else if($days <= 7) {
		$time = ($days==1) ? "one day ago" : "$days days ago" ;
	  }
	  //Weeks
	  else if($weeks <= 4){
		 $time = ($weeks==1) ? "one week ago" : "$weeks weeks ago" ;
	  }
	  //Months
	  else if($months <=12){
		 $time = ($weeks==1) ? "one month ago" : "$months months ago" ;
	  }
	  //Years
	  else {
		 $time = ($years==1) ? "one year ago" : "$years years ago" ;
	  }
	  return $time;
}


public function slug($string){   
   $string = str_replace(' ', '-', $string);
   $string = str_replace('_', '-', $string);
   $string = trim($string, '-');
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
   $string = strtolower($string);
   return $string;	
}


public function getPageSlug(){
	$b = explode(SITE_URL.'/', $this->curPageURL());
	return $p = explode('/',$b[1]);
}

public function loadPhpFile($file='404', $page=array()){
	include BASE_DIR.'/'.$file.'.php';
}




} // END CLASS 

$db = new dbclass();