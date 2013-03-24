<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web-Brisingr	</title>
        <link href="./install/tpl_install/install.css" rel="stylesheet" type="text/css">
    </head>
<body>

<div class="window">
<form action="install.php?do=test" method="post" >
	<div class="window_head">
    	<h3><strong><em>Web-Brisingr</em></strong> &raquo; Konfiguracja  &raquo; <span class="current">Test</span> &raquo; Instalacja  &raquo; Sprzątanie</h3>
    </div>
    
    
        <div class="window_content">
            <div id="load_content" class="content">
		<label>
         Folder plików w których będą przechowywane wszystkie pliki:
         <input disabled  value="{FOR_CACHE}" style="float:right">
        </label>
        <br  class="c4">
 		<label>
         Folder plików w których będą przechowywane artykuły:
         <input disabled  value="{FOR_NEWS}" style="float:right">
        </label>  
        <br  class="c4">   
 		<label>
         Folder plików który zawierać będzie ostatnie mangi i chaptery:
			<input disabled  value="{MANGAICH}" style="float:right">
        </label> 
        <br  class="c4">
 		<label>
         Folder plików w których będą ustawienia i użytkownicy:
         <input disabled  value="{FOR_SETT}" style="float:right">
        </label>  
        <br  class="c4"> 
 		<label>
         Folder plików w których będą przechowywane komentarze:
         <input disabled  value="{FOR_COMM}" style="float:right">
        </label>  
        <br  class="c4"> 
 		<label>
         Login głównego administratora:
			<input disabled  value="{FOR_LOGI}" style="float:right">	
        </label>
		<br  class="c4"> 
 		<label>
         Hasło głównego administratora(*):
         <input disabled  value="{FOR_PASS}" style="float:right">
        </label>  
		<br  class="c4"> 
		<pre>
* Hasło Administratora: hasło nie zostało jeszcze zakodowane więc jest widoczne tylko tutaj.

Sprawdź, czy wporwadzone dane, są poprawne, w przypadku nie zgodności, kliknij "Nie"
		</pre>

            </div>
        </div>
        
        
  <div class="window_options">
  		<div style="float:right; padding-left:10px; padding-right:10px;">
        	<button class="button" type="submit" name="submit_fail">Niestety NIE!</button>
            <button class="button" type="submit" name="submit_ok"><strong>Wszystko Ok!</strong></button>
        </div>
  </div>
</form>
</div>

</body>
</html>
