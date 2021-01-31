<?php
				/*versión de PHP 5.5*/
	//Guarda en el email donde se enviará la información
	$vEmail = "fabricamos@todoenmueblescr.com, cotizamos@todoenmueblescr.com";

	//Guarda el asunto del email
	$vAsunto = "Cotización";

	//Crea variables para guardar los datos que vienen del formulario
	$vNombre  = $_POST["name"];
	$vTelefono = $_POST["tel"];
	$vCorreo  = $_POST["email"];
	$vProducto	=	$_POST["producto"];
	$vCodigo = $_POST["codigo"];
	$vOpcional	=	$_POST["opcional"];
	$vCantidad	=	$_POST["cantidad"];
	$vOtro =	$_POST["otro"];
	$vMensaje = $_POST["mensaje"];

	/*Combina toda la información en un solo mensaje
		(concatena texto y contenido de las variables)
		
		punto 	= sirve para concatenar
		\n 		= sirve para crear un salto del línea*/
	$vMensajeCompleto = "Nombre del Usuario: " 	.$vNombre ."\n"
						."Telefono del Usuario:	"	.$vTelefono	."\n"
						."Correo Personal: "	.$vCorreo ."\n"
						."Producto elegido:	"	.$vProducto."\n"
						."Código del producto:	"	.$vCodigo."\n"
						."Cantidad:	"	.$vCantidad."\n"
						."Otro Producto :"	.$vOpcional. "\n"
						."Servicio adicional:"	.$vOtro. "\n"
						."Mensaje del Usuario: ".$vMensaje;
	
	/*Página donde va a ser redirigidad después de presionar el botón de enviar*/
	$vPaginaRedirigir = "../cotizacion.html";

	/*Envía la información capturada hacia un correo electrónico
		mail 	=> coloca el correo, asunto, cuerpo del correo
		header 	=> ayuda a redirigir hacia otra página web*/
	if(mail ($vEmail,$vAsunto,$vMensajeCompleto))Header("location: $vPaginaRedirigir");
?>