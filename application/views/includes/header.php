<?php echo doctype('html5');?>
<head>
<meta charset="UTF-8">
<?php 
	//todo: meta tag verify attribute
	$meta = array(
		array('name'=>'author', 'content'=>'CodeBallistic'),
		
		array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
		
		array('name'=>'description','content'=>'codeballistic limited portfolio where great projects are being developped '),
		array('name'=>'keywords','content'=>'portfolio,protfolio,web,programmation,website,site,codeballistic,code ballistic, codeballstic, code ballstic,code-ballistic,CodeBallistic,Codeballistic,codeBallistic,dev,development,develop,php,PHP,javscript,javascript,jquery,jQuery,JQUERY,ajanx,ajax,Ajax,AJAX,codes,codings,google,gogle,goggle,yahoo,yaahoo,bing,beeing,beeg,beeng,ask,msn,msm,facebook,plus,design,logo,booking,templates,template,book,designs,logs,logos,psd,photoshop,tags,object,class,function,w3c,firebug,web developper, web dev, web developer, web programming, web programmation, buy , contact , email , notepad++,notepad,dreamweaver,serer,server,xampp,wamp,mamp,tutorials,gallery,photos,images,beautiful,cool,top,great,fun,thanks,thankyou,thank you,gradient,new,transparance,transpace,transparency,internet,francais,time,deliverable,services,about,about us,us, contact, trendy,mauritius,maurice,island,mauritius island, ile maurice,programmeur,programmeurs,low, cheap, free, hosting'),
		array('name'=>'robots','content'=>'all')
		
		
	);
	echo meta($meta);
?>

<?php echo link_tag('css/reset.css');?>
<?php echo link_tag('css/text.css');?>
<?php echo link_tag('css/960.css');?>
<?php echo link_tag('css/styles.css');?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-1.6.2.min.js"></script>
<script src="<?php echo base_url();?>js/scripts.js"></script>

<title>CodeBallistic - Home</title>
</head>
<body>
	<div id="wrapper" class="container_12">
	<?php $this->load->view('includes/top-menu');?>
	
	