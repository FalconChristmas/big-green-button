<?php
$playlists = Array();
foreach(scandir($playlistDirectory) as $pFile)
	if ($pFile != "." && $pFile != "..")
		$playlists[$pFile] = $pFile;
?>

<script>
function StartPlaylist()
{
	var Playlist =  $("#PlaylistSelect").val();
	var Repeat = $("#Repeat").is(':checked')?'checked':'unchecked';
	var xmlhttp=new XMLHttpRequest();
	var url = "fppxml.php?command=startPlaylist&playList=" + Playlist + "&repeat=" + Repeat ;
	xmlhttp.open("GET",url,true);
	xmlhttp.setRequestHeader('Content-Type', 'text/xml');
	xmlhttp.send();
}
</script>

<div id="start" class="settings">
<fieldset>
<legend>Big Green Button</legend>

<p>Playlist: <?php PrintSettingSelect("Playlist", "PlaylistSelect", "0", "0", "disabled", $playlists, "big-green-button"); ?> Repeat: <?php PrintSettingCheckbox("Repeat", "Repeat", "1", "0", "big-green-button"); ?></p>

<p><input class="button" onClick="StartPlaylist();" type="submit" value="Start" /></p>

</fieldset>
</div>

<br />
