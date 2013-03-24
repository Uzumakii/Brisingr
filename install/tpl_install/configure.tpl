<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web-Brisingr	</title>
        <link href="./install/tpl_install/install.css" rel="stylesheet" type="text/css">
    </head>
<body>

<div class="window">
<form action="install.php" method="post" >
	<div class="window_head">
    	<h3><strong><em>Web-Brisingr</em></strong> &raquo; <span class="current">Konfiguracja</span>  &raquo; Test  &raquo; Instalacja  &raquo; Sprzątanie</h3>
    </div>
    {DISPLAY_ERROR}
    
        <div class="window_content">
            <div id="load_content" class="content">
		<label>
         Folder plików w których będą przechowywane wszystkie pliki:
         <input type="text" name="for_cache" value="cache" style="float:right">
        </label>
        <br  class="c4">
 		<label>
         Folder plików w których będą przechowywane artykuły:
         <input type="text" name="for_news" value="news" style="float:right">
        </label>  
        <br  class="c4">   
 		<label>
         Folder plików który zawierać będzie ostatnie mangi i chaptery:
         <input type="text" name="for_mangs_chapt" value="MiCh" style="float:right">
        </label> 
        <br  class="c4">
 		<label>
         Folder plików w których będą ustawienia i użytkownicy:
         <input type="text" name="for_settings" value="settings" style="float:right">
        </label>  
        <br  class="c4"> 
 		<label>
         Folder plików w których będą przechowywane komentarze:
         <input type="text" name="for_comments" value="comments" style="float:right">
        </label>   
            </div>
        </div>
        
        
  <div class="window_options">
  		<div style="float:right; padding-left:10px; padding-right:10px;">
            <button class="button" type="submit" name="submit_configure">Zapisz</button>
        </div>
  </div>
</form>
</div>

</body>
</html>
