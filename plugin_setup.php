<?php
$playlists = Array();
foreach(scandir($playlistDirectory) as $pFile)
    if ($pFile != "." && $pFile != "..") {
        if (preg_match('/\.json$/', $pFile))  {
            $pFile = preg_replace('/\.json$/', '', $pFile);
            $playlists[$pFile] = $pFile;
        }
    }
?>

<script>
function StartPlaylist() {
	var PlayList =  $("#PlaylistSelect").val();
	var command = "{\"command\": \"Start Playlist\"," 
  		+ "\"multisyncCommand\": false,"
  		+ "\"multisyncHosts\": \"\","
  		+ "\"args\": ["
    	+ "\"" + PlayList + "\","
    	+ ($("#Repeat").is(':checked') ? "\"true\"," : "\"false\",")
    	+ "\"false\" ] }";
	
	$.ajax({
			url: "api/command",
			type: 'POST',
			dataType: 'json',
			data: command
			
	});
}
</script>

<div id="start" class="settings">
<fieldset>
<legend>Big Green Button</legend>

<p>Playlist: <?php PrintSettingSelect("Playlist", "PlaylistSelect", "0", "0", "disabled", $playlists, "big-green-button"); ?> Repeat: <?php PrintSettingCheckbox("Repeat", "Repeat", 0, 0, "1", "0", "big-green-button"); ?></p>

<p><input class="button" onClick="StartPlaylist();" type="submit" value="Start" /></p>

</fieldset>
</div>

<br />
