<?php
//This is not a valid GitHub Post Recieve Hook, ignore
if (!array_key_exists('payload', $_POST)) {
	exit;
}

//Extract GitHub Payload
//extract(json_decode(stripslashes($_POST['payload']), true));

//Basic Pull Rebase
exec('git pull --rebase');

?>