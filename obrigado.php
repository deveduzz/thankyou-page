<?php
	$afiliado      = (isset($_POST['afiliado']) && is_numeric($_POST['afiliado'])) ? $_POST['afiliado'] : 0;
	$nomeafiliado  = (isset($_POST['nomeafiliado']) && is_numeric($_POST['nomeafiliado'])) ? $_POST['nomeafiliado'] : 0;
	$emailafiliado = (isset($_POST['emailafiliado']) && is_numeric($_POST['emailafiliado'])) ? $_POST['emailafiliado'] : 0;
	$fatura        = (isset($_POST['fatura'])   && is_numeric($_POST['fatura'])) ? $_POST['fatura'] : 0;
	$utm_source    = (isset($_POST['utm_souce'])) ? $_POST['utm_source'] : '';
	$utm_campaign  = (isset($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : '';
	$utm_medium    = (isset($_POST['utm_medium'])) ? $_POST['utm_medium'] : '';
	$utm_content   = (isset($_POST['utm_content'])) ? $_POST['utm_content'] : '';
	$pxidfb        = (isset($_POST['pxidfb'])) ? $_POST['pxidfb'] : '';
	$pxvlfb        = (isset($_POST['pxvlfb'])  && is_numeric($_POST['pxvlfb'])) ? $_POST['pxvlfb'] : '';
	$produto       = (isset($_POST['produto']) && is_numeric($_POST['produto'])) ? $_POST['produto'] : 0;
	$eml_comprador = (isset($_POST['email_comprador'])) ? $_POST['email_comprador'] : '';
	$nome_comprador= (isset($_POST['nome_comprador'])) ? $_POST['nome_comprador'] : '';

	if( $afiliado == '815959' )
	{
		//Exibe pixel para este afiliado ( exemplo )
	}


	if( $utm_source == 'email' )
	{
		//Execute ação específica ( exemplo )
	}

	if( $utm_source == 'facebook' )
	{
		//Redireciona usuário para outra página ( exemplo )
	}	
?>
