<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-inverse2" role="navigation">
    <a href='/'><img src='images/ui/logo_bg_big2.png' class='log-main' style="height:80px;"></a>



    <ul class="nav navbar-nav navbar-left navbar-top-links" style='margin-left:160px'>
	<li >
	    <a href="/" style="padding: 0;
	       margin-top: 9px;
	       height: auto;
	       min-height: 0;margin-left: 36px;"> <button  type="button" class=" greenbutton" style="    background-size: contain;    margin-top: -3px;    width: 170px;
    height: 37px;"> <i class="fa fa-angle-left"></i> Вернуться на сайт</button></a>
	</li>
    </ul>
    <ul class="nav navbar-right navbar-top-links">
	<li><a style="color:#fff;font-size:20px;padding: 10px 36px 11px 11px;;color:#ffc98d"><i class="fa fa-phone fa-fw"></i> +7(495)744-69-98;  +7(495)744-32-81</li></a>
	<li class="dropdown navbar-inversex">
	    <button onclick="openPageInPopup('#form2')" style="margin-right: 100px;    margin-top: -3px;" type="button" class="btn btn-danger button-red-red"> <i class="fa fa-phone"></i> Заказать обратный звонок</button>
	</li>
    </ul>
</nav>

 <div class="navbar-default sidebar " role="navigation">
	<div class="sidebar-nav navbar-collapse">
	    <br/>   <br/>
	    <ul class="nav side-menu" id="side-menu-home">
		<li class="level1">
		    <a href="#"> Выберите проект дома <span class='selected-item selected-item-h'></span><span class="fa arrow"></span></a>
		    <ul class="nav nav-second-level">
			<? $isFisrst = true; ?>
			<? foreach ($data as $i => $val): ?>
				<li>
				    <a  class=" selhome menu-icon <?= $isFisrst ? 'active' : '' ?>" onclick="setHome(<?= $i ?>)" id='selhome-<?= $i ?>'>
					<? $isFisrst = false; ?>
					<span class="image" 
					<? if (strpos($element2['icon'], "#") !== false): ?>
						      style="background-color:<?= $element2['icon'] ?>">
						  <? else: ?>
						    style="background-image: url('<?= $val['images_folder'] ?><?= $val['icon'] ?>')">
					    <? endif ?>

					</span>
					<span class="name"><?= $val['name'] ?></span>
				    </a>
				</li>
			<? endforeach; ?>
		    </ul>
		</li>  
	    </ul>
	    <ul class="nav nav2 side-menu" id="side-menu">
		<? $num = 0; ?>
		<?
		if (isset($_REQUEST['home'])) {
			$num = $_REQUEST['home'];
		}
		?>
		<? foreach ($data[$num]['elements'] as $i => $element): ?>
			<li class='level1'>
			    <a  class="x"><?= $element['name'] ?><span class='selected-item selected-item-<?=$i?>'></span><span class="fa arrow"></span></a>

			    <ul class="nav nav-second-level nav-<?= $i ?>">
				<? $isFisrst = true; ?>
				<? foreach ($element['value'] as $j => $element2): ?>			    
					<li>
					    <a  class="menu-icon <?= $isFisrst ? 'active' : '' ?>" onclick="setElement(<?= $i ?>,<?= $j ?>)" id='a-<?= $i ?>-<?= $j ?>'>
						<? $isFisrst = false; ?>
						<span class="image" 
						<? if (strpos($element2['icon'], "#") !== false): ?>
							      style="background-color:<?= $element2['icon'] ?>">
							  <? else: ?>
							    style="background-image: url('<?= $data[$num]['images_folder'] ?><?= $element2['icon'] ?>')">
						    <? endif ?>

						</span>
						<span class="name"><?= $element2['name'] ?></span>
					    </a>
					</li>

				<? endforeach; ?>

			    </ul>
			    <div class="clearfix"></div>
			</li>
		<? endforeach; ?>
	    </ul>
	    <br/><br/>
	    <div class='nav-btns'>
		<button onclick="openPageInPopup('#form1')" type="button" class="btn btn-danger button-red-red"> <i class="fa fa-paper-plane-o"></i> Рассчитать смету бесплатно</button>
 <br/><br/>
	    </div>
	</div>
    </div>
