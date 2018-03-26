<html>
<!-- .php? game database [WIP] for Hackhi2 CE by DNA64 (aka viral_dna) -->
<!-- Licensed under the GNU General Public License v3.0 https://github.com/DNA64/DataBase-Files-For-Hakchi2/blob/master/LICENSE -->
<head>
	<title>H2CEDB Submission Form by DNA64</title>
</head>


<body>
<?php
if (isset($_REQUEST['ok'])) {
	$xml = new DOMDocument("1.0","UTF-8");
	$xml->load("masterdb.xml");
 
	$rootTag = $xml->getElementsByTagName("data")->item(0);
 
	$gameTag = $xml->createElement("game");
 
	$systemTag = $xml->createElement("system",$_REQUEST['system']);
	$nameTag = $xml->createElement("name",$_REQUEST['name']);
	$playersTag = $xml->createElement("players",$_REQUEST['players']);
	$simultaneousTag = $xml->createElement("simultaneous",$_REQUEST['simultaneous']);
	$crcTag = $xml->createElement("crc",$_REQUEST['crc']);
	$dateTag = $xml->createElement("date",$_REQUEST['date']);
	$publisherTag = $xml->createElement("publisher",$_REQUEST['publisher']);
	$regionTag = $xml->createElement("region",$_REQUEST['region']);
	$statusTag = $xml->createElement("status",$_REQUEST['status']);
	$coverTag = $xml->createElement("cover",$_REQUEST['cover']);
	$api_idTag = $xml->createElement("api_id",$_REQUEST['api_id']);
 
	$gameTag->appendChild($systemTag);
	$gameTag->appendChild($nameTag);
 	$gameTag->appendChild($playersTag);
	$gameTag->appendChild($simultaneousTag);
	$gameTag->appendChild($crcTag);
	$gameTag->appendChild($dateTag);
	$gameTag->appendChild($publisherTag);
	$gameTag->appendChild($regionTag);
	$gameTag->appendChild($statusTag);
	$gameTag->appendChild($coverTag);
	$gameTag->appendChild($api_idTag);
	
	$rootTag->appendChild($gameTag);
 
	$xml->save("masterdb.xml");
}
?>



<form id="masterdb" name="masterdb" class="form-horizontal" accept-charset="UTF-8" autocomplete="off" action="index.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Hakchi2 CE Video Game Database Submission Form</legend>
<header id="header" class="info">
	<h2 class="0"></h2>
	<br>
	<div class="0">Help us create a complete new database of systems and games for Hakchi2 CE.</div>
	<br>
</header>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="system">System Name:</label>  
  <div class="col-md-4">
  <input id="system" name="system" type="text" placeholder="Sony Playstation" class="form-control input-md" required="">
  <span class="help-block">Which system is this game for?</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Game Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Crash Bandicoot (USA)" class="form-control input-md" required="">
  <span class="help-block">Try to make sure the name is identical to the ROM name.</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="players">Is this a Multiplayer game?</label>
  <div class="col-md-4">
    <select id="players" name="players" class="form-control">
      <option value="0">No - Single Player</option>
      <option value="1">Yes - Multiplayer</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simultaneous">Is there Multiplayer Co-Op?</label>
  <div class="col-md-1">
    <select id="simultaneous" name="simultaneous" class="form-control">
      <option value="0">No</option>
      <option value="1">Yes</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="crc">CRC-32 Checksum Value:</label>  
  <div class="col-md-2">
  <input id="crc" name="crc" type="text" placeholder="41b5f211" class="form-control input-md">
  <span class="help-block">Enter the CRC-32 checksum value of the uncompressed ROM image.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Release Date</label>  
  <div class="col-md-2">
  <input id="date" name="date" type="text" placeholder="YYYY-MM-DD" class="form-control input-md">
  <span class="help-block">Enter the official release date of the game for this system.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">Publisher Name:</label>  
  <div class="col-md-4">
  <input id="publisher" name="publisher" type="text" placeholder="Sony Computer Entertainment" class="form-control input-md">
  <span class="help-block">Enter the name of the publishing company here.</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="region">Region:</label>
  <div class="col-md-2">
    <select id="region" name="region" class="form-control">
      <option value="USA">USA</option>
      <option value="EUR">EUR</option>
      <option value="JAP">JAP</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="status">How well does the game work?:</label>
  <div class="col-md-2">
    <select id="status" name="status" class="form-control">
      <option value="excellent">Excellent</option>
      <option value="great">Great</option>
      <option value="good">Good</option>
      <option value="ok">OK</option>
      <option value="poor">Poor</option>
      <option value="bad">Bad</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cover">Cover Art Link:</label>  
  <div class="col-md-8">
  <input id="cover" name="cover" type="text" placeholder="http://thegamesdb.net/banners/_gameviewcache/boxart/original/front/1006-2.jpg" class="form-control input-md">
  <span class="help-block">Check http://thegamesdb.net for cover art.</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="api_id">API_ID</label>  
  <div class="col-md-2">
  <input id="api_id" name="api_id" type="text" placeholder="1006" class="form-control input-md">
  <span class="help-block">The API ID can be found in the cover art image url.</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
  <input type="submit" name="ok">
  </div>
</div>

</fieldset>
</form>


</body>
</html>﻿