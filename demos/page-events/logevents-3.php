<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page Events - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<script src="http://cdn.rawgit.com/arschmitz/jquery-mobile-event-debugger/v0.0.4/jquery.mobile.event.debugger.js"></script>
	<script>
		$.mobile.eventLogger({
			deprecated: true,
			events: {
				page: true
			},
			widgets: {
				page: true,
				pagecontainer: true
			}
		});
	</script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="toolbar" data-type="header" class="jqm-header">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p><span class="jqm-version"></span> Demos</p>
		<a href="#" class="jqm-navmenu-link ui-button ui-button-icon-only ui-corner-all ui-nodisc-icon ui-alt-icon ui-button-left">Menu<span class="ui-icon ui-icon-bars"></span></a>
		<a href="#" class="jqm-search-link ui-button ui-button-icon-only ui-corner-all ui-nodisc-icon ui-alt-icon ui-button-right">Search<span class="ui-icon ui-icon-search"></span></a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>Navigate between pages and open and close panel and popup widgets to see which events fire and their data.</h1>
		<a class="ui-button ui-corner-all ui" href="logevents.php">Go To Page 1</a>
		<a class="ui-button ui-corner-all ui" href="logevents-2.php">Go To Page 2</a>

	</div><!-- /content -->

	<?php include( '../jqm-navmenu.php' ); ?>

	<div data-role="toolbar" data-type="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-search.php' ); ?>

</div><!-- /page -->

</body>
</html>
