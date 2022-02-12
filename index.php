<? $ver = 2; ?>
<? include 'config.php'; ?>
<? include 'include/function.php'; ?>
<? include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ООО ПРОЕКТ -  конструктор">
        <meta name="author" content="Deen&team">
        <title>Стар-Потолок -  конструктор</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/startmin.css?v=<?= $ver ?>" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<script>
                var data = JSON.parse('<?= json_encode($data) ?>');
	</script>
    </head>
    <body>

        <div id="wrapper">
	    <? include 'pages/left-menu.php'; ?>

	    <a href='/'><img src='images/ui/logo.jpg' class='log-main'></a>
	    <br>
	    <h1> Подберите цвет для вашего потолка ON-LINE</h1>
            <div id="page-wrapper" class="content-bg1">
                <div class="row " id="content" >
		    <img src='images/ui/Spinner-1s-200px.gif' id='loading' style="width:200px; height: 200px;display: none">
		    <div class="draw-container effect-blur"  >	

			<? include 'pages/ceiling.php'; ?>


                        
		    </div>

                </div>
		<div class="select-templ-cont">
		    <ul id="slider-templ">
		    <?
		    
foreach ($data[0]['templates'] as $n => $arr) {
	//print_r( $arr);exit;
	$arr['data'] = json_encode($arr['data']);
echo '<li><img onclick=\'setTemplData('.$arr['data'].')\' src="'.FOLDER.$arr['file'].'"></li>';
}?>
		    </ul>
		</div>

            </div>
	    <div class="row" style="text-align: right">
		<div class="desc">
		    Калькулятор позволяет оценить приблизительную стоимость одного натяжного потолка и не может учитывать количество помещений и их периметр.
Точная стоимость определяется замерщиком.
		</div>
		<div class='nav-btns right' style="    margin-right: 6px;">
		    <button onclick="openPageInPopup('#form1')" type="button" class="btn btn-dangerx btn-blue"> 
			<i class="fa fa-paper-plane-o"></i> 
			Отправить эскиз
		    </button>
		    
		</div> 
	    </div>

            <!-- /#page-wrapper -->
        </div>
	<? include 'pages/form.php'; ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      
	<script src="js/loading.js"></script>
	<script src="js/loading.js"></script>

	<script src="js/bxslider/jquery.bxslider.min.js"></script>
	<link href="js/bxslider/jquery.bxslider.css?v=<?= $ver ?>" rel="stylesheet">
	
	<script src="js/farbtastic/farbtastic.js"></script>
	<link href="js/farbtastic/farbtastic.css?v=<?= $ver ?>" rel="stylesheet">
	
	<script src="js/functions.js"></script>
        <script src="js/startmin.js?v=<?= $ver ?>"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.min.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.min.css?v=2.1.5" media="screen" />
    </body>
</html>
