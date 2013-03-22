<?php
/***************************************************************************
 *                              install.php
 *                            -------------------
 *   begin                : Thursday, March 21, 2013
 *   copyright            : (C) 2013 The Brisingr Group
 *   email                : <your@email.com>
 *
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/*
	This program was written by Krzysztof Pazdur and Tomasz Tomala, members of Brisingr Group.  
	It is main install scirpt. Ours program creating list directiores, indexing files,
	saving passwords and more.
	After all, this program creating file config.php with settings and defining IS_INSTALLED as True.
*/
	# Yes ... 
	define('Brisingr',true);
	
	$settigns = array();
	
	
	$files_to_include = glob('./install/DB_*.php');
		
		foreach( $files_to_include as $key => $val ) 
		{
			include($val);	
		}
		
	// dev
		var_dump($settings);
	



		
?>