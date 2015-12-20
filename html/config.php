<?php

$path_to_git_head = '../.git/HEAD';
if (file_exists($path_to_git_head)) {
	if ($git_head = file($path_to_git_head, FILE_USE_INCLUDE_PATH)) {
 	$git_head = $git_head[0];
 	$git_head_exploded = explode("/", $git_head);
 	$git_branch = rtrim($git_head_exploded[2]);
 	$original_dbname = 'ekdev';
 	$dbnameWithBranchPostfix = $original_dbname . "_" . $git_branch;
	}
}

$config['db']['host'] = 'localhost';
$config['db']['port'] = '3306';
$config['db']['username'] = 'ekdevusr';
$config['db']['password'] = 'ekdevpw';
$config['db']['dbname'] = isset($dbnameWithBranchPostfix) ? $dbnameWithBranchPostfix : 'ekdev'; 
$config['debug'] = 'enable';


$config['superAdmins'] = '1';

echo $config['db']['dbname'];