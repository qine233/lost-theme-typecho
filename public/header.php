
<html lang="zh-CN">

<head>
<meta name="viewport ，content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<title><?php $this->archiveTitle(); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/Q-style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/post.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css');  ?>">
<meta charset="utf-8" />
<meta name="renderer" content="webkit" />
<meta name="format-detection" content="email=no" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
<meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />
<?php $this->header(); ?>
	

</head>
<body>
<div class="container">
       <header class="header">
         <h1>
             <a href="#"><?php $this->options->title(); ?></a>
         </h1>

        </header>
        <div class="container-backgound">
            <!-- <img src="img/container-backgound.png" alt="背景"> -->
           
            <img class="logo" src="<?php $this->options->logoCss(); ?>">
            <h1 class="name"><?php $this->options->logoName(); ?></h1>
            <h2 class="name-talk">心若向阳，无畏伤悲</h2>
        </div>
     