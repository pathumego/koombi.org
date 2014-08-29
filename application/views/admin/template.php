<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php print APP_NAME.' | Dashboard'; ?></title>

<!-- Basic stylesheet -->
<link href="<?php print site_url('/css/styles.css'); ?>" rel="stylesheet" type="text/css" />

<!-- iDashboard Main Stylesheet -->
<link href="<?php print site_url('/css/iDashboard.css'); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

	<div id="wrapper" class="iWrapper">

		<?php $this->load->view( $page ); ?>    
    
    </div> <!--/wrapper-->
    
    <!-- jQuery -->
	<script src="<?php print site_url('/js/libs/jquery.min.js'); ?>" type="text/javascript" language="javascript"></script>
    <!-- jQuery.dataTables -->
    <script src="<?php print site_url('/js/libs/jquery.dataTables.min.js'); ?>" type="text/javascript" language="javascript"></script>
    
    <!-- iDashboard.js -->
    <script src="<?php print site_url('/js/iDashboard.js'); ?>" type="text/javascript" language="javascript"></script>
    
    <script>
	
		function openPage( obj )
		{
			var route = $.trim($(obj).data('route'));
			var slug = $.trim($(obj).data('slug'));
			
			if ( route != '' )
			{
				goPage( route );
			}
		}
		
	</script>

</body>
</html>
