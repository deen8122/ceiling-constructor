<!-- Navigation -->
<div class="navbar-default sidebar " role="navigation">
    <div class="sidebar-nav navbar-collapse">
	<? $num = 0; ?>
	<?
	if (isset($_REQUEST['home'])) {
		$num = $_REQUEST['home'];
	}
	?>
	<div class="menu">
	    <div class="name">Потолок</div>
	    <div class="values">
		<table>
		    <tr>
			<td></td>
			<td></td>
		    </tr>
		</table>
		<div class="item">
		    <span  class="cursor" onclick="showSelectColor('cp1')">Цвет первого уровня </span>
		    <span onclick="showSelectColor('cp1')" class="selected-item selected-item-cp1" style="background-color:#5e6b64"></span>
		    <div class="nav select-colors select-colors-cp1 nav-cp1">
			<div class="f-close"></div>
			<div class="f-title">Цвет первого уровня</div>
			<div id="colorpicker"></div>
                    </div>
		</div>
		<div class="item"> 
		    <span  class="cursor" onclick="showSelectColor('cp2')">Цвет второго уровня </span>
		    <span onclick="showSelectColor('cp2')" class="selected-item selected-item-cp2" style="background-color:#5e6b64"></span>
		    <div class="nav select-colors select-colors-cp2 nav-cp2">
			<div class="f-close"></div>
			<div class="f-title">Цвет второго уровня</div>
			<div  id="colorpicker2"></div>
                    </div>
		</div>
		<div class="item"> 
		    <span   class="cursor" onclick="showSelectColor('form')">Форма потолка </span>
		    <span onclick="showSelectColor('form')" class="selected-item selected-item-form seling-selected" style=""></span>
		    <div class="nav select-colors select-colors-form nav-form" style="min-width: 384px;   margin-left: -68px;">
			<div class="f-close"></div>
			<div class="f-title">Форма потолка</div>
			<div class="f-cont">
			    <? foreach ($data[$num]['ceiling'] as $i => $arr): ?>
			   
			    <a  onclick="setCeiling(<?= $i ?>)" 
				data-svg="<?= str_replace($_SERVER['DOCUMENT_ROOT'], "", SVG_SELLING_FOLDER.'preview/'.$arr['id'].'.jpg')?>" 
				class="xitem ceiling-item ceiling-item-<?= $i ?>" >
				 <img src="<?= str_replace($_SERVER['DOCUMENT_ROOT'], "", SVG_SELLING_FOLDER.'preview/'.$arr['id'].'.jpg')?>" class="celling-prev">
				 <span>Вариант <?= ($arr['id']) ?> </span>
			    </a>
			    <? endforeach ?>
			</div>
                    </div>
		</div>

	    </div>
	</div>

	<div class="menu">
	    <div class="name">Факутра потолка</div>
	    <div class="values radios">
		
		
		
		
		<select name="factura" id="factura" class="select" onchange="SetFactura()"  >
		    <option value="1">Матовый</option>
		    <option value="0">Глянцевый</option>
		    <!-- <option value="4">Глянцевый 80%</option> -->
		    <option value="2">Сатиновый</option>
		    <option value="3">Тканевый</option>
		</select>
	
	 </div>
	</div>
	<? foreach ($data[$num]['sections'] as $i_sections => $sectsectionName): ?>
		<div class="menu">
		    <div class="name" ><?= $sectsectionName ?></div>
		    <div class="values">
			<? foreach ($data[$num]['elements'] as $i => $element): ?>
				<? if ($element['section'] == null || $element['section'] != $sectsectionName) continue; ?>


				<? if ($element['type'] == "on-off") {
					?>
					<table class="tbl-in-off">
					    <tr>
						<td><?= $element['name'] ?></td>
						<td><input type="checkbox" id="checkbox-<?= $element['target'] ? $element['target'] : $i ?>" onclick="onOnOff(<?= $element['target'] ? $element['target'] : $i ?>)"></td>
						<? if ($element['value'] != null): ?>
							<td>
								<!--<img src="images/ui/lamp.png" id="lamp-<?= $i ?>" onclick="onToggle(<?= $i ?>)"/>-->
								
									<a href="" class="first on lamp-<?= $i ?>"  onclick="onToggle(<?= $i ?>)">Вкл</a>
								    <a href="" class="tumbler lamp-<?= $i ?>"  onclick="onToggle(<?= $i ?>)"></a>
								    <a href="" class="second lamp-<?= $i ?>"  onclick="onToggle(<?= $i ?>)">Выкл</a>
								
								
							    <? foreach ($element['value'] as $j => $element2): ?>
								    <a style="display: none" class="menu-icon" onclick="setElement(<?= $i ?>,<?= $j ?>)" id='a-<?= $i ?>-<?= $j ?>'></a>
							    <? endforeach; ?>
								<div>
								    
								</div>
							</td>
						<? endif ?>
					    </tr>
					</table>	
					<?
					continue;
				}
				?>



				<? /*
				 * 
				 */
				?>
				<? if ($element['type'] == "custom"): ?>
					<a  class="cursor item"><?= $element['name'] ?></a>
					<a  class="menu-icon" onclick="setElement(<?= $i ?>,<?= $j ?>)" id='a-<?= $i ?>-<?= $j ?>'></a>
					<?
					continue;
				endif;
				?>




				<? if ($element['type'] == "select"): ?>
					<a  class="item"><?= $element['name'] ?><span class="fa arrow"></span></a>
					<select>


					    <? foreach ($element['value'] as $j => $element2): ?>
						    <option value="<?= $j ?>"><?= $element2['name'] ?></option>
					    <? endforeach; ?>
					</select>
					<?
					continue;
				endif;
				?>



				<div <?= ($element['type'] == "hidden" ? 'style="display:none"' : '') ?>  
				    class=" item" >
				    <span class="cursor" onclick="showSelectColor(<?= $i ?>)"><?= $element['name'] ?>  </span>
				    <span onclick="showSelectColor(<?= $i ?>)" class='selected-item selected-item-<?= $i ?>'></span>

				    <div class="nav select-colors select-colors-<?= $i ?> nav-<?= $i ?>" >
					<div class="f-close"></div>
					<div class="f-title"><?= $element['name'] ?></div>
					<? $isFisrst = true; ?>
					<ul class="select-ul <?=$element['ul-class']?>">
					    <? foreach ($element['value'] as $j => $element2): ?>			    
						    <li>
							<a  class="a-select-image-<?= $j ?> menu-icon <?= $isFisrst ? 'active' : '' ?>" onclick="setElement(<?= $i ?>,<?= $j ?>)" id='a-<?= $i ?>-<?= $j ?>'>
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
				    </div>
				</div>
			<? endforeach; ?>		    
		    </div>
		</div>
	<? endforeach; ?>







    </div>
</div>
