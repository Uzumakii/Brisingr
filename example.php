<?php
/***************************************************************************
 *                              example.php
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
	It is only example scirpt. 
*/
	//efik:
	// Miejsce w którym definiujemy stałe; 
	define('Brisingr',true);       // to nasz skrypt.
	define('Brisingr_deb',true);   // Włączona opcja debugowania, zakomentować jak nie trzeba/
	
	// efik:
	// uruchamianie sesji
	session_start();
	
	# Pliki wymagane przez skrypt:
	// efik:
	// Pobieranie pliku config.php, znajdują się tam nazwy katalogów podanych przy instalacji
	require("./config.php");
	if(!defined("IS_INSTALLED") or IS_INSTALLED == false){ die("Not Installed!");}
	
	// efik:
	// ładowanie potrzebnych funkcji dla programu
	require("./includes/module.template.inc.php");
	require("./includes/module.functions.inc.php");
	
	// efik:
	// Ustawianie folderu szablonów.
	$template = new Template('./templates/Brisingr/');
	
	
	//===========================================
	// efik:
	// Twój kod tutaj..
	// używaj zmiennych z pliku config.php !
	// główny folder jest w zmiennej $CFiles! 
	// nie zapomnij "/" pomiędzy zmiennymi.
	// przykładowy dostęp do katalogu z newsami:
	// $CFiles.'/'.$NFiles.'/'
	//===========================================

	
?>