<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="content">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<?=stylesheet('style/redmond/jquery-ui-1.9.2.custom')?>
	<?=stylesheet('style/common')?>
	
	<?=javascript('jQuery/jquery-1.7.2')?>
	<?=javascript('jQuery/jquery.placeholder')?>

	<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
	<title><?=$this->company->sysname?></title>
</head>
<body style="background-image:url('/images/bg_<?=$this->company->syscode?>.gif')">