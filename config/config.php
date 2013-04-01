<?php
	/* 
	 * This file outlines all the configurations that you must make for the site to operate
	 * correctly and to make complete use of the features available.
	 */
	
	/* Database configuration (MySQL Only) */
	// $user is your MySQL connection username
	// $pass is your MySQL connection password
	// $host is your MySQL connection ip/hostname
	// $dbname is the name of the MySQL database you are using
	
	$user = 'user';
	$pass = 'pass';
	$host = 'host';
	$dbname = 'db_name';
	
	
	/* General Configuation */
	// $website is your web-url without the www. and without a trailing slash.
	
	$website = 'website';
	
	
	/* Index Configuration (Paging)
	 * If you happen to add more pages you must add a row to this array
	 * Format:
	 * 		'[link_short_url]' => '[link_to_file]',
	 *
	 * Where [link_short_url] is what you would use to link people for instance:
	 * 		http://somewebsite.com/?p=[link_short_url]
	 *
	 * Also where [link_to_file] is where the page content file is located, for instance:
	 *		'content/home.php' - points to the content folder and the home.php file. 
	 */
	$page = array('home' => 'content/home.php',
				  'register' => 'content/register.php',
				 );
	
	
	/* Meta Data Setup (what you want search engines to recognize you for) 
	 * Note: Fill in the details you so desire
	 */
    // $meta_desc is the description of your website for search engines
	// $meta_key is an array of the keywords that search engines will use to find your website
	// this can be extended for as many keywords as you desire, just add another set of single quotes
	// followed by a comma, for each. 
	
	$meta_desc = 'This is a temporary description';
	$meta_key = array('these',
					  'are',
					  'some',
					  'keywords',
					  );
	
	
	
	/* =============== DO NOT EDIT BELOW THIS LINE =============== */
	try {
		$conn = new PDO("mysql::host=$host;dbname=$dbname", $user,$pass);
	} 
	catch (PDOException $e) {  
		echo $e->getMessage();  
	}
	
	function meta($meta_key){
		for($i=0;$i<count($meta_key);$i++){
			if(($i+1) == count($meta_key))
				echo $meta_key[$i];
			else
				echo $meta_key[$i].', ';
		}
	}
	
	function jselector(){
		if(isset($_GET['p'])){
			//TODO other pages
		} else {
			//TODO home page
		}
	}
?>