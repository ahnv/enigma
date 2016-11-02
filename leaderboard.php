<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/cryptic/inc/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/cryptic/classes/LeaderBoardHelper.php';
require $_SERVER['DOCUMENT_ROOT'].'/cryptic/classes/LoginHelper.php';
$lb = new LeaderBoardHelper($db);
$log = new LoginHelper($db);
$l = $lb->get();
?>
<!DOCTYPE html>
<html>
<head>
<title>nCrypt</title>
<link href="<?php echo SSTATIC; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo SSTATIC; ?>css/sb-admin-2.css" rel="stylesheet">
<link href="<?php echo SSTATIC; ?>css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<?php include 'inc/nav.php';?>
</div>
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Leaderboard</h1>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="table-responsive">
<table class="table table-striped">
<tr><th>Position</th><th>Name</th><th>Level</th></tr>
<?php $i = 1; foreach($l as $data):?>
<tr><td><?php echo $i++?></td><td><?php echo $data['name'] ?></td><td><?php echo $data['level'] ?></td></tr>
<?php endforeach;?>
</table>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo SSTATIC; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo SSTATIC; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SSTATIC; ?>js/sb-admin-2.js"></script> 
</body>
</html>
