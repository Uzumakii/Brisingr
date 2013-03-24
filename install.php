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
	session_start();
	
	# requires
	require("./includes/module.template.inc.php");
	require("./includes/module.functions.inc.php");
	$template = new Template('./install/tpl_install/');
	
	# If config exists
	if(file_exists("config.php") and !file_exists(".lock"))
	{
		header("location:./");
		exit;
	}
	
	
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
			$_SESSION['passwd'] = $_POST['for_passwd'];
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
function run_test_function()
{
	global $template;
	
	if( $_SESSION['configure'] and !$_SESSION['test'])
		{
			if( isset($_POST["submit_fail"]))
			{
				unset($_SESSION);	
				session_destroy();
				header("location: install.php");
			}
			elseif(  isset($_POST["submit_ok"]))
			{
				$_SESSION['test'] = true;
				header("location: install.php?do=install");
			}
			else
			{
				$template->set_filenames(array('test' => 'test.tpl'));
					
				$template->assign_vars(array(
					'FOR_CACHE' => $_SESSION['cache'],
					'FOR_NEWS'  => $_SESSION['news'],
					'MANGAICH'  => $_SESSION['MANGAICH'],
					'FOR_SETT'  => $_SESSION['settings'],
					'FOR_COMM'  => $_SESSION['comments'],
					'FOR_LOGI' => $_SESSION['login'],
					'FOR_PASS'  => $_SESSION['passwd'],
				));	
					
					
				$template->pparse('test');
			}
		}	
}

function run_install_function()
{
	global $template; 
	if( $_SESSION['configure'] and $_SESSION['test'])
		{
$config = '<?php
//This file has been generated automatically.
//Please do not edit anything.
// (c) '.date("Y").' Brisingr Group.
//-------------------------------------------				
// Diectores
if(!defined("Brisingr")){ die("Odmowa dostępu.");}
$CFiles		= "'.$_SESSION['cache'].'";		// def. val. cache
$NFiles		= "'.$_SESSION['news'].'";		// def. val. news
$MICHfiles	= "'.$_SESSION['MANGAICH'].'";		// def. val. MiCh ( For latest Manga and Chapters }
$setFiles	= "'.$_SESSION['settings'].'";		// def val. settings
$ComDB		= "'.$_SESSION['comments'].'";		// def. val. comments

define("Script_installed",true);
?>';

			if(!is_dir($_SESSION['cache']))
			{
				mkdir($_SESSION['cache'],777);
				mkdir($_SESSION['cache'].'/'.$_SESSION['news'],777);
				mkdir($_SESSION['cache'].'/'.$_SESSION['MANGAICH'],777);
				mkdir($_SESSION['cache'].'/'.$_SESSION['settings'],777);
				mkdir($_SESSION['cache'].'/'.$_SESSION['comments'],777);
			}
				$settings['user'] = array (
					"id" => 0,
					"login" => $_SESSION['login'],
					"haslo" => md5_hash($_SESSION['passwd'],"\\/(^#!HJRW*OBH)"),
					"e-mail" => "",
					"gg" => "",
					"data_urodzenia" => "",
					"data_konta" => date("Y:m:d, H:i:s"),
					"uprawnienia" => 7,
				);
			
			@file_put_contents($_SESSION['cache'].'/'.$_SESSION['settings'].'/.users_db',serialize($settings['user'])) or die("config.php -> install.php cannot save this file");
			@file_put_contents("config.php",$config) or die("config.php -> install.php cannot save this file");
			
			header("location: install.php");
		}
		else
		{
			die();
		}
}

	#printing if debug mode
	if(defined('Brisingr_deb')){ message_DEBUG($script = array($_SESSION,$settings));
	}
		
?>