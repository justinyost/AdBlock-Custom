<?php
//This is a valid GitHub Post Recieve Hook - Post data and IP Addresses match
if (
	array_key_exists('payload', $_POST)
	&& (
		$_SERVER['REMOTE_ADDR'] == '207.97.227.253'
		|| $_SERVER['REMOTE_ADDR'] == '50.57.128.197'
		|| $_SERVER['REMOTE_ADDR'] == '108.171.174.178'
	)
) {
	//Basic Pull Rebase
	exec('git pull --rebase');
	exit;
}

exit;
?>