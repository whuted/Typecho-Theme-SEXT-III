<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php $this->options->charset(); ?>" />
	<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('reset.css'); ?>" />
	<?php $this->header(); ?>
</head>
<body>

    <div id="container">
      <div id="main" role="main">
        <header>
		<h1><?php $this->options->title(); ?> <?php $this->archiveTitle(' &raquo; ', ' : ', ''); ?></h1>
		</header>

     <nav>
		<span><a title="首页" class="" href="/">home</a></span>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		<span><a title="关于" class="" href="/About.html">About</a></span>
		<span><a title="主题" class="" href="/Theme.html">Theme</a></span>
		<span><a title="留言" class="" href="/Guestbook.html">Guestbook</a></span>
		<span><a title="标签" class="" href="/Tags.html">Tags</a></span>

     </nav>