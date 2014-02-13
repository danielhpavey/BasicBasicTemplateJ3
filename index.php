<?php defined( '_JEXEC' ) or die( 'Restricted access' );
// Remove generator meta tag
$this->setGenerator(null);
// Remove most of the Javascript from the head
unset($this->_scripts[JURI::root(true).'/media/system/js/mootools-core.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/mootools-more.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/core.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/caption.js']);
if (isset($this->_script['text/javascript']))
{
    $this->_script['text/javascript'] = preg_replace('%window\.addEvent\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']);
    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']);
}



?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/style.css" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/ie.css" type="text/css" />
<![endif]-->
</head>
<body>

<header>
	<jdoc:include type="modules" name="header" style="xhtml"/>
</header>

<nav>
	<jdoc:include type="modules" name="nav" style="xhtml"/>
</nav>


<section>
	<jdoc:include type="component" />
</section>


<footer>
	<jdoc:include type="modules" name="footer" style="xhtml"/>
</footer>



<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/js/jquery-1.7.1.min.js" type="text/javascript"></script>
</body>
</html>