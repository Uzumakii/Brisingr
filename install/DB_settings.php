<?php
/*
  	This file is part of install.php

    Brisingr is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    Brisingr is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA


-------------------------------------------------------------------------------

	In File: 
		
	Database 'settings'
		"menu" = array of str,
		"homepage" = str,
		"about" = str,
		"max_news" = int,
		"max_manga" = int,
		"max_ostatnie" = int, 
		title = str

*/

	if (!defined('Brisingr'))
	{
		die ("Odmowa dostępu");	
	}
	
	$settings['settings'] = array (
		"menu" => array ( "Menu  = 1" => "#"),
		"homepage" => "#",
		"about" => "",
		"max_news"  => 5,
		"max_manga" => 5,
		"max_ostatnie"	=> 10, # efik: Ostatnie 10 dodanych chapterów.
		"title" => "Brisingr Grupa Skanacyjna",	
	);

?>