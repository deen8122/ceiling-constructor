<?
/*
 * Формы на сайте. Подключается в главной странице
 */
?>
<div style='display: none'>
    <?
    /*
     * ------------------------------------------------------------------------------------------
     */
    ?>
    <div class="panel panel-green" id='form1' style='max-width: 500px;'>
	<div class="panel-heading">
	    Заявка на бесплатный расчет сметы
	</div>
	<div class="panel-body">
	    <form role="form" class='ajaxform' data-success="#form-success">
		<input type="hidden" name="тип" value="Заявка на бесплатный расчет сметы">
		<input type="hidden" name="type" value="1">
		<div class="form-group input-group">
		    <span class="input-group-addon"><i class="fa fa-user"></i>
		    </span>
		    <input type="text" required="" class="form-control" name="Имя" placeholder="Ваше имя">
		</div>
		<div class="form-group input-group">
		    <span class="input-group-addon"><i class="fa fa-phone"></i>
		    </span>
		    <input type="text" required="" class="form-control"  name="Телефон" placeholder="Телефон ">
		</div>
		<div class="form-group input-group">
		    <span class="input-group-addon">@</span>

		    <input type="email" required="" class="form-control" name="Email"  placeholder="email">
		</div>
		<div class="form-group input-group">
		    <span class="input-group-addon"><i class="fa  fa-building-o "></i>
		    </span>
		    <input type="text" class="form-control" name="Адрес строительства"   placeholder="адрес строительства">
		</div>
		<center>
		    <button type="submit" class="btn btn-success">Отправить заявку!</button>
		</center>
	    </form>

	</div>
	<div class="panel-footer">

	</div>
    </div>	

    <?
    /*
     * ------------------------------------------------------------------------------------------
     */
    ?>
    <div class="panel panel-green" id='form-success' style='max-width: 500px;'>
	<div class="panel-heading">
	    Заявка на бесплатный расчет сметы отправлена
	</div>
	<div class="panel-body" style="text-align: center;">
	    <h2 style="color: #5cb85c">Ваша заявка отправлена!</h2>
	    <p>Скоро с Вами свяжется наш менеджер.</p>

	</div>
	<div class="panel-footer" style="text-align: center;">
	    Если у вас остались вопросы позвоните по телефонам:<br/> +7(495)744-69-98;  +7(495)004-59-98
	</div>
    </div>

    <?
    /*
     * ------------------------------------------------------------------------------------------
     */
    ?>
<div class="panel panel-green" id='form2' style='max-width: 500px;'>
	<div class="panel-heading">
	    Заказать обратный звонок
	</div>
	<div class="panel-body">
	    <form role="form" class='ajaxform' data-success="#form-success2">
		<input type="hidden" name="тип" value="Заказать обратный звонок">
		<input type="hidden" name="type" value="2">
		<div class="form-group input-group">
		    <span class="input-group-addon"><i class="fa fa-user"></i>
		    </span>
		    <input type="text" required="" class="form-control" name="Имя" placeholder="Ваше имя">
		</div>
		<div class="form-group input-group">
		    <span class="input-group-addon"><i class="fa fa-phone"></i>
		    </span>
		    <input type="tel" required=""    class="form-control"  name="Телефон" placeholder="Телефон">
		</div>
		<center>
		    <button type="submit" class="btn btn-success">Отправить!</button>
		</center>
	    </form>

	</div>
	<div class="panel-footer">

	</div>
    </div>	


    <?
    /*
     * ------------------------------------------------------------------------------------------
     */
    ?>
     <div class="panel panel-green" id='form-success2' style='max-width: 500px;'>
	<div class="panel-heading">
	   Ваша заявка отравлена!
	</div>
	<div class="panel-body" style="text-align: center;">
	    <h2 style="color: #5cb85c">Ваша заявка отправлена!</h2>
	    <p>Скоро с Вами свяжется наш менеджер.</p>

	</div>
	<div class="panel-footer" style="text-align: center;">
	    Если у вас остались вопросы позвоните по телефонам:<br/> +7(495)744-69-98;  +7(495)004-59-98
	</div>
    </div>
</div>
