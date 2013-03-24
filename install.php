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
	# definitions ... 
	define('Brisingr',true);
	define('Brisingr_deb',true);
	
	
	# requires
	require("./includes/module.template.inc.php");
	require("./includes/module.functions.inc.php");
	$template = new Template('./install/tpl_install/');
	
	
	#including
	$files_to_include = glob('./install/DB_*.php');
		
		foreach( $files_to_include as $key => $val ) 
		{
			include($val);	
		}
		
	
	switch($_GET['do'])
	{
		case 'test' 		: run_test_function(); break;
		case 'install' 		: run_install_function(); break;
		case 'clean' 		: run_clean_function(); break;
	}
	
	
	
	if(!$_SESSION['configure'])
	{
		if(isset($_POST["submit_configure"]))
		{
			$_SESSION['cache'] = $_POST['for_cache'];
			$_SESSION['news'] = $_POST['for_news'];
			$_SESSION['MANGAICH'] = $_POST['for_mangs_chapt'];
			$_SESSION['settings'] = $_POST['for_settings'];
			$_SESSION['comments'] = $_POST['for_comments'];
			$_SESSION['login'] = $_POST['for_login'];
			$_SESSION['passwd'] = $_POST['for_pass'];
			$_SESSION['configure'] = true;
			header("Location: install.php?do=test");
		}
		else
		{
		// efik:
		// do tablicy o indexie body będą się dodawać wszystkie zmienne a potem ta tablica
		// będzie parsowana do konkretnego pliku
		$template->set_filenames(array('configure' => 'configure.tpl'));
			
	
		// efik: 
		// Parsowanie tablicy o indexie 'body' i wyświetlanie pliku gotowego.
		$template->pparse('configure');
		
		}
	}
	if( $_SESSION['configure'] and !$_SESSION['test'])
		{
			if( isset($_POST["submit_test"]))
			{
				die('ok');
			}
			$template->set_filenames(array('test' => 'test.tpl'));
				
			$template->assign_vars(array(
				'for_cache' => $_SESSION['cache'],
				'for_news'  => $_SESSION['news'],
				'mangaich'  => $_SESSION['MANGAICH'],
				'for_sett'  => $_SESSION['settings'],
				'for_comm'  => $_SESSION['comments'],
				'for_login' => $_SESSION['login'],
				'for_pass'  => $_SESSION['passwd'],
				'for_conf' => $_SESSION['configure'],
			
			));	
				
				
			$template->pparse('test');
			
		}	
	#printing if debug mode
	if(defined('Brisingr_deb')){
	message_DEBUG($script = array($_SESSION,$settings));
	}
		
?>