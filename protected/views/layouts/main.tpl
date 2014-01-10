{$js = '/static/js'}
{$css = '/staic/css'}
{$sb = '/static/sb-admin'}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Dashboard - SB Admin</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{$sb}/css/bootstrap.css">

<!-- Add custom CSS here -->
<link rel="stylesheet" href="{$sb}/css/sb-admin.css">
<link rel="stylesheet" href="{$sb}/font-awesome/css/font-awesome.min.css">

<!-- Page Specific CSS -->
<link rel="stylesheet" href="{$css}/morris-0.4.3.min.css">

</head>

<body>
	<div id="wrapper">
		{include './sidebar.tpl'}
		<div id="page-wrapper">{$content}</div>
	</div>

	<!-- JavaScript -->
	<script src="{$sb}/js/jquery-1.10.2.js"></script>
	<script src="{$sb}/js/bootstrap.js"></script>

	<!-- Page Specific Plugins -->
	<script src="{$js}/raphael-min.js"></script>
	<script src="{$js}/morris-0.4.3.min.js"></script>
	<script src="{$sb}/js/morris/chart-data-morris.js"></script>
	<script src="{$sb}/js/tablesorter/jquery.tablesorter.js"></script>
	<script src="{$sb}/js/tablesorter/tables.js"></script>

</body>
</html>