# Página de obrigado
Vendo a necessidade de alguns produtores em criar um fluxo de tratamento diferenciado baseado na origem da venda, a Eduzz envia via POST alguns dados da compra, para que o produtor tome algumas decisões.

Para utilizar este recurso, é necessário um conhecimento básico em alguma linguagem de programação.

#Dados enviados

Campo           | Tipo          | Descrição
-------------   | ------------- | ------------------
afiliado        | Numérico      | ID do afiliado que originou a venda ( 0 no caso de venda sem afiliado )
nome_afiliado   | Alfanumérico  | Nome do afiliado que originou a venda ( Vazio no caso de venda sem afiliado )
email_afiliado  | Alfanumérico  | Email do afiliado que originou a venda ( Vazio no caso de venda sem afiliado )
fatura          | Numérico      | ID da compra 
utm_source      | Alfanumérico  | Informado pelo produtor/afiliado no link de origem da venda ( Vazio, se não informado )
utm_medium      | Alfanumérico  | Informado pelo produtor/afiliado no link de origem da venda ( Vazio, se não informado )
utm_content     | Alfanumérico  | Informado pelo produtor/afiliado no link de origem da venda ( Vazio, se não informado )
pxidfb          | Alfanumérico  | Id do pixel do facebook informado pelo produtor/afiliado no link de origem da venda.  ( Vazio, se não informado )
pxvlfb          | Alfanumérico  | Valor da conversão. Informado pelo produtor/afiliado no link de origem da venda  ( Vazio, se não informado )
nome_comprador | Alfanumérico  | Nome do comprador
email_comprador | Alfanumérico  | E-mail do comprador


# Exemplos de Utilização

### Exemplo PHP
```
<?php
	$afiliado      = (isset($_POST['afiliado']) && is_numeric($_POST['afiliado'])) ? $_POST['afiliado'] : 0;
	$fatura        = (isset($_POST['fatura'])   && is_numeric($_POST['fatura'])) ? $_POST['fatura'] : 0;
	$utm_source    = (isset($_POST['utm_souce'])) ? $_POST['utm_source'] : '';
	$utm_campaign  = (isset($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : '';
	$utm_medium    = (isset($_POST['utm_medium'])) ? $_POST['utm_medium'] : '';
	$utm_content   = (isset($_POST['utm_content'])) ? $_POST['utm_content'] : '';
	$pxidfb        = (isset($_POST['pxidfb'])) ? $_POST['pxidfb'] : '';
	$pxvlfb        = (isset($_POST['pxvlfb'])  && is_numeric($_POST['pxvlfb'])) ? $_POST['pxvlfb'] : '';
	$produto       = (isset($_POST['produto']) && is_numeric($_POST['produto'])) ? $_POST['produto'] : 0;
	$eml_comprador = (isset($_POST['email_comprador'])) ? $_POST['email_comprador'] : '';

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
```
Qualquer dúvida favor encaminhar para [suporte@eduzz.com](mailto:suporte@eduzz.com)
