<?php

$execArquivo = $_SERVER['SCRIPT_FILENAME'];

$lerArquivo = file($execArquivo);
$pesquisar = '"ler(EntradaForm)"';
$listEntradaFormVar = array();
$var = "";
$varNull = false;

foreach ($lerArquivo as $ln) {
	if (strpos($ln, $pesquisar) !== false) {
		$var = substr(trim(strstr($ln, '=', true)),1);
		$comentario = trim(strstr($ln, '//'));
		$listEntradaFormVar[$var] = $comentario;
		$$var = ($_SERVER['REQUEST_METHOD'] == 'POST') ? $_POST["$var"] : null;
		if(!empty($_POST["$var"])){
			$varNull = true;
		}
	}
}

?>

<html>
	<head>
		<title></title>
     	<script language=javascript>    
	        document.onkeydown = function () {
	        	switch (event.keyCode) {
	            	case 116 :  
	            		event.returnValue = false;
	                	event.keyCode = 0;
	                	window.location.href = "<?php echo basename($_SERVER['PHP_SELF']); ?>";       
	                	return false;
	         	}
	     	}
	    </script>
		<style type="text/css">
			.bt {border:1px solid #25692A;border-radius:4px;display:inline-block;cursor:pointer;font-family:Verdana;font-weight:bold;font-size:15px;padding:6px 10px;text-decoration:none;} 
			.bt-vd {border-color:#68b465;background:linear-gradient(to bottom, #abd5aa 5%, #68b465 100%);box-shadow:inset 0px 1px 0px 0px #e3f1e3;color:#fff;text-shadow:0px 1px 0px #528009;}
			.bt-lj {border-color:#eb9b48;background:linear-gradient(to bottom, #f7d6b3 5%, #eb9b48 100%);box-shadow:inset 0px 1px 0px 0px #fdf7f0;color:#333;text-shadow:0px 1px 0px #ffee66;}
			.bt-az {border-color:#46a7f5;background:linear-gradient(to bottom, #86c6f8 5%, #46a7f5 100%);box-shadow:inset 0px 1px 0px 0px #d7ecfd;color:#fff;text-shadow:0px 1px 0px #528009;}
			.bt-vm {border-color:#f61f0e;background:linear-gradient(to bottom, #fca8a1 5%, #f61f0e 100%);box-shadow:inset 0px 1px 0px 0px #fff4f3;color:#fff;text-shadow:0px 1px 0px #528009;}
			.bt-vd:hover {background:linear-gradient(to bottom, #68b465 5%, #abd5aa 100%);}
			.bt-lj:hover {background:linear-gradient(to bottom, #eb9b48 5%, #f7d6b3 100%);}
			.bt-az:hover {background:linear-gradient(to bottom, #46a7f5 5%, #86c6f8 100%);}
			.bt-vm:hover {background:linear-gradient(to bottom, #f61f0e 5%, #fca8a1 100%);}
			.bt:active {position:relative;top:2px;}
		</style>
	</head>
	<body>
		<?php
			$path = getcwd();
			$diretorio = dir($path);
			$pageAtual = basename($_SERVER['PHP_SELF']);
			$count = 1;
			while($arquivo = $diretorio -> read()){
				if($arquivo == "." || $arquivo == ".."){
					continue;
				}
				$styleLinkAtual = ($arquivo == $pageAtual) ? "background-color: #fafad2;color:#3676e7" : "color:#1d2648";
				echo "<a href='{$arquivo}' style='font-size:16px;margin-right:15px;padding:5px;{$styleLinkAtual}'>".$arquivo."</a>";
				echo ($count % 10 == 0) ? "<br>" : "";
				$count++;
			}
			$diretorio -> close();
		?>
		<p></p>
		<div style="font-size:32px;">
		<form method="post" action="">
			<caption>ENTRADA DE DADOS:</caption>
			<table style="font-size:28px;">
				<tr>
					<th style="padding: 15px 0px"><strong>Variável</strong></th>
					<th style="padding: 15px 0px"><strong>Inserir Valor</strong></th>
				</tr>
				<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$varNull): ?>
				<tr>
					<td colspan="2" style="background-color: #ff4040; font-size:22px; padding: 0px 25px 0px 10px; color:#ffffff">Pelo menos uma variável deve possuir valor</td>
				</tr>
				<?php endif; ?>
				<?php foreach ($listEntradaFormVar as $vName => $vComentario): ?>
				<tr>
					<td style="background-color: #d3d3d3; font-size:26px; padding: 0px 25px 0px 10px; min-width: 120px">$<?php echo $vName; ?></td>
					<td><input type="text" name="<?php echo $vName; ?>" value="<?php echo @$_POST["$vName"]?>" style="font-size:18px; padding: 10px;width: 320px"></td>
					<td style="font-size:22px; padding: 10px; color: #9a9a9a"><?php echo $vComentario; ?></td>
				</tr>
				<?php endforeach; ?>
				<tr>
					<td></td>
					<td style="font-size:26px;padding: 10px 0px">
						<input type="submit" class="bt bt-az" name="enviar" value="ENVIAR">
						<a class="bt bt-vm" href="<?php echo basename($_SERVER['PHP_SELF']); ?>">LIMPAR / ATUALIZAR</a>
					</td>
				</tr>
			</table>
		</form>
		
		<?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST' && $varNull){
			echo "<br>RESULTADO (SAÍDA):<br><p style='font-size: 20px;padding: 15px;border: 2px solid #d8d8d8;width: 550px'>";
		} else {
			exit();
		}
		?>
		
