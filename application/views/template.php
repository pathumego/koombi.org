<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php print SITE_TITLE.' - '.SITE_TAG; ?></title>

<!-- Google font -->
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<!-- Basic stylesheet -->
<link href="<?php print site_url('/css/styles.css'); ?>" rel="stylesheet" type="text/css" />

<!-- jQuery -->
<script type="text/javascript" src="<?php print site_url('/js/libs/jquery.min.js'); ?>"></script>

</head>

<body>

<h1>Koombi</h1>

<?php $this->load->view( $page ); ?>

</body>
</html>