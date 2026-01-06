<?php
    if(basename($_SERVER['PHP_SELF']) != 'admin.php'){die();}
?>
<?php
	if(isset($_REQUEST["excel"]) && $_REQUEST["excel"] == "true")
	{
		//header ("Expires: Mon, 26 Jul 2026 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header("Content-type: application/vnd.ms-excel;charset=utf-8");
		header ("Content-Disposition: attachment; filename=\"ListadoContacto-".date("Y-m-d H:i:s").".xls\"" );

	?>
	<style type="text/css">
		.num {
		  mso-number-format:General;
		}
		.text{
		  mso-number-format:"\@";/*force text*/
		}
	</style>
	<table width="100%" class="widefat" border="1">
		<thead>
			<tr>
				<th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("ID","portal");?></th>
				<th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("NOMBRE Y APELLIDOS","portal");?></th>
				<!-- <th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("DNI","portal");?></th> -->
				<th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("CORREO","portal");?></th>
				<th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("MOTIVO","portal");?></th>
				<th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("CONSULTA","portal");?></th>
				<th style="color:#366092;text-align:center;font-weight:bold;height:25px;"><?php _e("FECHA DE REGISTRO","portal");?></th>
			</tr>
		</thead>
			<?php
				if(count($centros))
				{
				?>
				<tbody>
				<?php
					foreach($centros as $id => $row)
					{
				?>
					<tr style="color:#366092;text-align:center;font-weight:normal;height:25px;">
						<td><?php echo htmlentities(stripslashes($row -> id), ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlentities(stripslashes($row -> apenom), ENT_QUOTES,'UTF-8');?></td>
						<!-- <td class="text"><?php echo htmlentities(stripslashes($row -> dni), ENT_QUOTES,'UTF-8');?></td> -->
						<td><?php echo htmlentities(stripslashes($row -> email), ENT_QUOTES,'UTF-8');?></td>
						<td class="text"><?php echo htmlentities(stripslashes($row -> subject), ENT_QUOTES,'UTF-8');?></td>
						<td class="text"><?php echo htmlentities(stripslashes($row -> message), ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlentities(stripslashes($row -> date_add), ENT_QUOTES,'UTF-8');?></td>
					</tr>
				<?php
					}
				?>
				</tbody>
				<?php
				}
				?>
	</table>
	<?php
	exit();
	}
?>
<div class="wrap">
    <div class="icon32" id="icon-edit"></div>
    <h2><?php _e("Listado de Contacto","portal"); ?></h2>
	<?php
		$url_admin = admin_url()."admin.php?page=".$_GET["page"];
	?>
	<br />
	<table width="50%" class="widefat" style="width:40%">
		<tr>
			<td>
				Fecha Inicial:
				<input type="text" name="txt_inicial" id="txt_inicial" value="<?php echo @$_GET["fi"];?>" readOnly="true" class="datepicker"/>
			</td>
			<td>
				Fecha Final:
				<input type="text" name="txt_final" id="txt_final"  value="<?php echo @$_GET["ff"];?>"  readOnly="true" class="datepicker"/>
			</td>
			<td>
				&nbsp;&nbsp;&nbsp;
				<input type="button" name="txt_btn" id="txt_btn" value="BUSCAR" class="button-primary" />
			</td>
		</tr>
	</table>
	<br />
	<fieldset id="hide_menu_principal">
		<br />
		<form method="POST" action="" class="form_padding" name="save_configuration_menus" onsubmit="return false;">
			<table width="100%" class="widefat">
				<thead>
					<tr>
						<th><?php _e("ID","portal");?></th>
						<th><?php _e("NOMBRE Y APELLIDOS","portal");?></th>
						<!-- <th><?php _e("DNI","portal");?></th> -->
						<th><?php _e("CORREO","portal");?></th>
						<th><?php _e("MOTIVO","portal");?></th>
						<th><?php _e("CONSULTA","portal");?></th>
						<th><?php _e("FECHA DE REGISTRO","portal");?></th>
					</tr>
				</thead>

			<?php
				if(count($centros))
				{
				?>
				<tbody>
					<?php
					$url_admin = admin_url()."admin.php?page=".$_GET["page"];
					foreach($centros as  $centros)
					{
					?>
						<tr>
							<td><?php echo ($centros -> id);?></td>
							<td><?php echo ($centros -> apenom);?></td>
							<!-- <td><?php echo ($centros -> dni);?></td> -->
							<td><?php echo ($centros -> email);?></td>
							<td><?php echo ($centros -> subject);?></td>
							<td><?php echo ($centros -> message);?></td>
							<td><?php echo ($centros -> date_add);?></td>
						</tr>
					<?php
					}
					?>
			<?php
				}
				else
				{
					?>
					<tbody>
						<tr>
							<td colspan="8">
								<?php
									echo "No se encontraron registros.";
								?>
							</td>
						</tr>
					</tbody>
				<?php
				}
				?>
		</table>
		<div class="pagination" style="float: right;margin-top: 11px;">
			<?php
				$Pages = ceil(intval($centrostotal)/50);
				for($i=0;$i<$Pages;$i++)
				{
					$class = "";
					if(@$_GET["pagina"] == $i+1 or ($i == 0 && !isset($_GET["pagina"])))
					{
						$class = "selectedpage";
					}
					?>
					<a href="<?php echo $url_admin."&pagina=".($i+1)."&fi=".@$_GET["fi"]."&ff=".@$_GET["ff"]?>" class="pagee <?php echo $class;?>"><?php echo ($i+1)?></a>
					<?php
				}
			?>
		</div>
		<div style="clear:both"></div>
		<br />
		<br />
		</form>
		<input class="button-primary click_excel" type="button" name="Save" value="Exportar a Excel" id="submitbutton">
	</fieldset>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
jQuery(function()
{
		jQuery.datepicker.regional['es'] =
	{
		closeText: 'Cerrar',
		prevText: 'Previo',
		nextText: 'Próximo',

		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
		monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
		dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
		dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
		dateFormat: 'dd/mm/yy', firstDay: 0,
		initStatus: 'Selecciona la fecha', isRTL: false
	};

	jQuery.datepicker.setDefaults(jQuery.datepicker.regional['es']);

	jQuery("#txt_inicial").datepicker({
		onSelect: function()
		{
			var minDate = jQuery('#txt_inicial').datepicker('getDate');
			jQuery("#txt_final").datepicker("change", { minDate: minDate });
		}
	});

	jQuery("#txt_final").datepicker({
		onSelect: function()
		{
			var maxDate = jQuery('#txt_final').datepicker('getDate');
			jQuery("#txt_inicial").datepicker("change", { maxDate: maxDate });
		}
	});

	jQuery(".click_excel").bind("click",function(e)
	{
		txt_inicial = jQuery("#txt_inicial").val();
		txt_final 	= jQuery("#txt_final").val();

		window.location.href = "<?php echo $url_admin; ?>&fi="+txt_inicial+"&ff="+txt_final+"&noheader=true&excel=true&limit=false";
	});

	jQuery("#txt_btn").bind("click",function(e)
	{
		txt_inicial = jQuery("#txt_inicial").val();
		txt_final 	= jQuery("#txt_final").val();

		if(txt_inicial == "")
		{
			alert("Seleccione la fecha inicial");
			jQuery("#txt_inicial").focus();
			return;
		}
		if(txt_final == "")
		{
			alert("Seleccione la fecha final");
			jQuery("#txt_final").focus();
			return;
		}

		window.location.href = "<?php echo $url_admin; ?>&fi="+txt_inicial+"&ff="+txt_final;

	});

	jQuery("#txt_btn2").bind("click",function(e)
	{
		responder = jQuery.trim(jQuery("#responder").val());

		if(responder == "")
		{
			alert("Debe ingresar la respuesta");
			jQuery("#responder").focus();
			return;
		}

		document.stdform.submit();
	});

	jQuery("#txt_btn3").bind("click",function(e)
	{
		window.location.href = "<?php echo $url_admin; ?>";
	});
});
</script>
<style type="text/css">
.pagee{
    width: 28px;
    height: 28px;
    display: inline-block;
    background: #008ec2;
    color: #FFF;
    text-align: center;
    text-decoration: none;
    line-height: 27px;
    font-weight: bold;
}

.selectedpage
{
	background:#FFF !important;
	color: #008ec2 !important;
}
</style>