<?php

$LANG[40000] = "<br /><br />Cada ".$coinName." cuesta un cierto valor, se describe a continuación, con bonificación automática del ".$buyCoins['bonus_percent'][1]."% para pedidos superiores a ".$buyCoins['bonus_count'][1]." ".$coinName."'s, ".$buyCoins['bonus_percent'][2]."% para compras superiores a ".$buyCoins['bonus_count'][2]." ".$coinName."'s y ".$buyCoins['bonus_percent'][3]."% para compras superiores a ".$buyCoins['bonus_count'][3]." ".$coinName."'s. Por ejemplo: Usted paga ".$buyCoins['bonus_count'][1]." y recibe ".intval($buyCoins['bonus_count'][1]+(($buyCoins['bonus_count'][1]*$buyCoins['bonus_percent'][1])/100))."; paga ".($buyCoins['bonus_count'][2]+50)." y recibe ".intval(($buyCoins['bonus_count'][2]+50)+((($buyCoins['bonus_count'][2]+50)*$buyCoins['bonus_percent'][2])/100))."; paga ".($buyCoins['bonus_count'][3]+200)." y recibe ".intval(($buyCoins['bonus_count'][3]+200)+((($buyCoins['bonus_count'][3]+200)*$buyCoins['bonus_percent'][3])/100)).".";
$LANG[40001] = "Lista de servicios";
$LANG[40002] = "Lista de paquetes";
$LANG[40003] = "No disponible en el momento!";
$LANG[40004] = "Para su personaje in-game";
$LANG[40005] = "Sus <b>".$coinName."'s</b> se convierten en <b>".$coinGame."'s</b> y se insertan en su inventario y se pueden utilizar en el juego para tomar ventaja de los beneficios y recursos.";
$LANG[40006] = "A otra cuenta";
$LANG[40007] = "La cuenta del personaje destinatario recibe <b>".$coinName."'s</b> y puede utilizarlos en el panel de usuario.";
$LANG[40008] = "Sí";
$LANG[40009] = "No";
$LANG[40010] = "Galería";
$LANG[40011] = "Enviar Screenshot";
$LANG[40012] = "Enviar Video";
$LANG[40013] = "Mis Envíos";
$LANG[40014] = "Enviar screenshots para nuestra galería! Upload el screenshot utilizando el siguiente formulario.";
$LANG[40015] = "Puede enviar la cantidad que desee, pero sólo uno a la vez.";
$LANG[40016] = "Formatos soportados: JPG/JPEG, PNG y BMP.";
$LANG[40017] = "Tamaño máximo en bytes por screenshot: 5 MB.";
$LANG[40018] = "Enviar";
$LANG[40019] = "Enviar videos a nuestra galería! Upload el video a YouTube y insertar el link en el campo abajo.";
$LANG[40020] = "El video debe estar alojado en Youtube.com y disponible para todos.";
$LANG[40021] = "No es permitido contenidos pornográficos, desnudez, racismo o ofensas.";
$LANG[40022] = "Introduzca una screenshot válida!";
$LANG[40023] = "La imagen excede el tamaño permitido!";
$LANG[40024] = "Sólo se permite imagem JPG/JPEG, PNG o BMP!";
$LANG[40025] = "La imagen tiene una anchura mayor que";
$LANG[40026] = "La imagen tiene una altura mayor que";
$LANG[40027] = "No se pudo enviar la imagen! Por favor, informar al administrador e inténtelo de nuevo más tarde.";
$LANG[40028] = "Ha introducido un gran link! (máximo 255 caracteres)";
$LANG[40029] = "Link irregular! Por favor, introduzca el link correcto!";
$LANG[40030] = "Envío de hecho con éxito! Sin embargo, sólo estará disponible al público después de la aprobación del administrador.";
$LANG[40031] = "Este video ya ha sido enviado a la galería!";
$LANG[40032] = "A continuación se muestran los videos y capturas de pantalla que has enviado.<br />Es necesario la aprobación del administrador para que se muestren públicamente.";
$LANG[40033] = "No ha enviado cualquier screenshot o video.";
$LANG[40034] = "En aprobación";
$LANG[40035] = "Ver Galería";
$LANG[40036] = "Todavía no hay screenshots o videos en la galería.";
$LANG[40037] = "Transferencias Realizadas";
$LANG[40038] = "Transferencias a personaje in-game (conversión de <b>".$coinName."</b> a <b>".$coinGame."</b>)";
$LANG[40039] = "Transferencias de <b>".$coinName."</b> a otra cuenta";
$LANG[40040] = "No se realizó transferencias.";
$LANG[40041] = "¿Está seguro de que desea eliminar esto de la galería?";
$LANG[40042] = "Esto no fue enviado por usted!";
$LANG[40043] = "Volver";
$LANG[40044] = "Su clave de seguridad ha caducado! Vamos a cargar la página y vuelve a intentarlo.";
$LANG[10995] = "Para mayor seguridad, añadimos un sufijo en su login. Su login será <span id='finalLogin'></span>.";
$LANG[10996] = "No quiero esto";
$LANG[10997] = "Sufijo";
$LANG[12977] = "Sólo se puede registrar desde:";
$LANG[12067] = "Rellene los campos de abajo para registrarse una nueva cuenta.";
$LANG[12068] = "Cuenta creada! Bienvenido!";
$LANG[12069] = "Cuenta creada! Tienes 24 horas para confirmar!<br />Un e-mail ha sido enviado a:";
$LANG[12070] = "Las contraseñas introducidas no coinciden!";
$LANG[12071] = "Usted ha excedido el límite de caracteres permitido!";
$LANG[12072] = "Ya existe una cuenta con este login!";
$LANG[12080] = "Cuenta confirmada con éxito!";
$LANG[12081] = "Ha ocurrido un error al confirmar su cuenta!";
$LANG[12083] = "Confirmar E-mail";
$LANG[29004] = "Sufijo desactivado";
$LANG[12010] = "Repetir E-mail";
$LANG[12045] = "Sólo se permiten letras y números. No utilice caracteres especiales o espacios.";
$LANG[12113] = "Hola!<br /><br />Su e-mail hay sido utilizado en el registro de una cuenta en nuestro servidor. Si usted llevó a cabo este solicitud, haga clic en el siguiente link o copie y pegue en el navegador, en caso contrario ignora este e-mail.<br /><br />Datos de la cuenta:<br /><br />";
$LANG[29008] = "Mi cuenta";
$LANG[29009] = "Fecha de registro";
$LANG[29010] = "Bienvenido a ";
$LANG[12043] = "¿Olvidaste tu contraseña? Escriba abajo el e-mail que utilizó para registrar la cuenta. Enviaremos instrucciones sobre cómo recuperar.";
$LANG[12059] = "Introduce un e-mail!";
$LANG[12060] = "Introduce un e-mail válido!";
$LANG[12061] = "No existe cuenta con este e-mail!";
$LANG[12110] = "Hola!<br /><br />Hay una cuenta en nuestro servidor con su e-mail.<br />Recientemente se realizó una solicitud de recuperación de contraseña. Si usted hizo esta solicitud, haga clic en el siguiente link o copie y pegue en el navegador, en caso contrario ignora este e-mail.<br /><br />Datos de la cuenta:<br /><br />";
$LANG[12111] = "Hola!<br /><br />Hay algunas cuentas en nuestro servidor con su e-mail.<br />Recientemente se realizó una solicitud de recuperación de contraseña. Si usted hizo esta solicitud, haga clic en el link de la cuenta que desea cambiar la contraseña o copiar y pegar en el navegador, en caso contrario ignora este e-mail.<br /><br />Datos de las cuentas:<br /><br />";
$LANG[12112] = "Si desea cambiar la contraseña de cualquier cuenta de más de una vez, haga clic en el link abajo.";
$LANG[12040] = "Recuperar Cuenta";
$LANG[12046] = "El código espirado o no existe!";
$LANG[12044] = "Rellene los campos abajo con la nueva contraseña de la cuenta.";
$LANG[12050] = "Cambiar";
$LANG[12015] = "y";
$LANG[12016] = "Tiempo";
$LANG[12012] = "Miembros";
$LANG[12064] = "Abajo se muestran todos los jugadores que son o han sido héroes.";
$LANG[12065] = "Los jugadores que ganaron el Grand Olympiad y en son los héroes.";
$LANG[12066] = "Los participantes de la Grand Olimpiad y sus posiciones en el ranking.";
$LANG[12029] = "Muerto";
$LANG[12030] = "Vivo";
$LANG[30500] = "Este ranking se actualizó en";
$LANG[30501] = "";
$LANG[30502] = "A continuación se muestran los jugadores con más puntos de PvP (Player vs Player).";
$LANG[30503] = "A continuación se muestran los jugadores con más puntos de PK (Player Killer).";
$LANG[30504] = "A continuación se muestran los clanes más prestigiosos.";
$LANG[30505] = "A continuación se muestran los jugadores con más tiempo online.";
$LANG[30506] = "Espere unos segundos y vuelva a cargar la página.";
$LANG[12999] = "Héroes Actual";
$LANG[12025] = "Histórico de Heroes";
$LANG[11003] = "Clan Propietario";
$LANG[11004] = "Clan Líder";
$LANG[11005] = "Alianza";
$LANG[11006] = "Guerra Siguiente";
$LANG[11007] = "Atacantes";
$LANG[11008] = "Defensores";
$LANG[11011] = "Tasa";
$LANG[11014] = "Cambiar E-mail";
$LANG[12984] = "El e-mail introducido no son iguales!";
$LANG[12985] = "Para cambiar lo e-mail, rellene el formulario abajo introduciendo el nuevo e-mail. Es necesario introducir dos veces para prevenir los trastornos futuros debido a errores al escribir.";
$LANG[12986] = "E-mail actual";
$LANG[12987] = "Repita e-mail";
$LANG[12988] = "Nuevo e-mail";
$LANG[12073] = "Formato incorrecto de e-mail!";
$LANG[12074] = "Ya existe una cuenta con este e-mail!";
$LANG[12075] = "Ha ocurrido un error al enviar el e-mail de confirmación!<br />Por favor, inténtelo de nuevo.";
$LANG[12076] = "Lo sentimos, ha ocurrido un error!";
$LANG[12041] = "Siga las instrucciones enviadas a su e-mail";
$LANG[12042] = "Si usted no puede encontrarlos, revise la \"Caja del Spam\" porque su servidor de e-mail nos puede confundir con un spammer.";
$LANG[12114] = "Hola!<br /><br />Hay una cuenta en nuestro servidor con su e-mail.<br />Recientemente se realizó una solicitud de cambio de e-mail. Si usted hizo esta solicitud y acepta que la cuenta se transfiere al nuevo e-mail, haga clic en el siguiente link o copiar y pegar en su navegador, en caso contrario ignorar esta mensaje.<br /><br />";
$LANG[39000] = "Panel do Usuario";
$LANG[39001] = "Pendiente";
$LANG[39002] = "Pago";
$LANG[39003] = "Entregado";
$LANG[39004] = "Cancelada";
$LANG[39005] = "La página que está intentando acceder no existe.";
$LANG[39006] = "Debe seleccionar un personaje válido y al menos un elemento para hacer una compra!";
$LANG[39007] = "Para acceder al panel, introduzca los datos necesarios.";
$LANG[39008] = "World";
$LANG[39009] = "Añadir";
$LANG[39010] = "Adquirir";
$LANG[39011] = "Donaciones hechas";
$LANG[39012] = "Configuración";
$LANG[39013] = "Haga clic en el botón de abajo para hacer el pago.";
$LANG[39014] = "Servicio";
$LANG[39015] = "Costo";
$LANG[39016] = "Personaje seleccionado";
$LANG[39017] = "Ejecutar";
$LANG[39018] = "Haga clic de nuevo para confirmar";
$LANG[39019] = "Le permite cambiar el color del nickname de su personaje.";
$LANG[39020] = "Introducir el código del color abajo. Si usted no sabe cualquier código, <a href='http://www.colorpicker.com/'>haga clic aquí</a>.";
$LANG[39021] = "Color";
$LANG[39022] = "Le permite cambiar el color del título de tu personaje.";
$LANG[39023] = "Elimina completamente el karma del personaje seleccionado.";
$LANG[39024] = "Simplemente haga clic en el botón de abajo para el procedimiento a realizar.";
$LANG[39025] = "Restablece la cantidad de puntos de pk de el personaje seleccionado.";
$LANG[39026] = "Al hacer clic en el botón de abajo el personaje seleccionado tendrá 0 puntos PK (Player Kill).";
$LANG[39027] = "Le permite cambiar el nombre del personaje seleccionado.";
$LANG[39028] = "Introduzca el nuevo nombre y haga clic en el botón de abajo.";
$LANG[39029] = "Repetir nickname";
$LANG[39030] = "Le permite cambiar el nombre del clan del personaje seleccionado.";
$LANG[39031] = "Nota: Sólo el líder del clan puede cambiar el nombre.";
$LANG[39032] = "Repetir nombre";
$LANG[39033] = "Cambia el sexo / género del personaje seleccionado.";
$LANG[39034] = "Seleccione el género y confirme haciendo clic en el botón de abajo.";
$LANG[39035] = "Nuevo género";
$LANG[39036] = "Hombre";
$LANG[39037] = "Mujer";
$LANG[39038] = "Permite transferir el personaje seleccionado a otra cuenta.";
$LANG[39039] = "Sólo se puede transferir a las cuentas que utilizan el mismo e-mail. Seleccione la cuenta y confirme haciendo clic en el botón de abajo.";
$LANG[39040] = "No se encontró cuentas";
$LANG[39041] = "Categoría";
$LANG[39042] = "Seleccione los itens que desea comprar";
$LANG[39043] = "No se encontraron item.";
$LANG[39044] = "Información de la cuenta";
$LANG[39045] = "Último acceso al panel";
$LANG[39046] = "Personajes";
$LANG[39047] = "Título";
$LANG[39048] = "Creado en";
$LANG[39049] = "Level Base";
$LANG[39050] = "Género";
$LANG[39051] = "Alianza";
$LANG[39052] = "Noble";
$LANG[39053] = "Tiempo Online";
$LANG[39054] = "Seleccione una clase válida!";
$LANG[39055] = "Este personaje tiene actualmente el status hero hasta ";
$LANG[39056] = "Este personaje tiene actualmente el status vip hasta ";
$LANG[39057] = "Este personaje tiene actualmente el status aio hasta ";
$LANG[39058] = "No hay ningún paquete con este ID!";
$LANG[39059] = "Todos";
$LANG[39060] = "Todos los itens del paquete";
$LANG[39061] = "Mueve el personaje seleccionado en una ubicación segura.";
$LANG[39062] = "Este servicio es esencial si no se puede abrir el juego debido a errores graves causados por una instalación incompleta de Lineage 2.";
$LANG[39063] = "Define el personaje seleccionado como noble.";
$LANG[39064] = "Un noble tiene habilidades y ventajas especiales en el juego, como el permiso para participar en events exclusivos y utilizar objetos especiales.";
$LANG[39065] = "Concede el estatus de héroe al personaje seleccionado.";
$LANG[39066] = "Él recibirá un aura, una serie de habilidades especiales y se puede disfrutar de varias ventajas en el juego. Sólo tienes que seleccionar por debajo de lo período deseado. Si ya es héroe, lo período seleccionado se añadirá a la que ya tiene.";
$LANG[39067] = "Período";
$LANG[39068] = "Cambiar la base class del personaje seleccionado.";
$LANG[39069] = "Todos los skills, las dyes y los shortcuts serán eliminados y que pueden ser parte de una nueva raza, de acuerdo con la clase seleccionada.";
$LANG[39070] = "Subvenciones status VIP al personaje seleccionado.";
$LANG[39071] = "Se puede disfrutar de varias ventajas en el juego. Sólo tienes que seleccionar por debajo de lo período deseado. Si ya tiene estatus VIP, lo período seleccionado se añade a la que ya tiene.";
$LANG[39072] = "meses";
$LANG[39073] = "mes";
$LANG[39074] = "La cuenta seleccionada ya tiene el número máximo de caracteres!";
$LANG[39075] = "No se puede continuar porque el personaje ya tiene esta class como subclass!";
$LANG[12004] = "Para continuar, debe aceptar los términos!";
$LANG[20001] = "Espera...";
$LANG[11015] = "Comprueba tu conexión a Internet. La página está tomando demasiado tiempo para responder.";
$LANG[11016] = "Lo sentimos, ha ocurrido un error! Por favor, vuelva a intentarlo.";
$LANG[12008] = "Seleccione";
$LANG[12011] = "Líder";
$LANG[12013] = "Nombre";
$LANG[12014] = "día";
$LANG[12019] = "¿No tienes una account?";
$LANG[12020] = "¿Olvidaste tu contraseña?";
$LANG[12023] = "Salir";
$LANG[12028] = "Este site fue desarrollado por Atualstudio";
$LANG[12034] = "Recuperar";
$LANG[12037] = "Contraseña Actual";
$LANG[12039] = "Donaciones";
$LANG[12047] = "Nueva Contraseña";
$LANG[12048] = "Repetir Contraseña";
$LANG[12049] = "Contraseña";
$LANG[12055] = "No se pudo! Por favor, inténtelo de nuevo.";
$LANG[12056] = "La operación fue un éxito!";
$LANG[12057] = "Complete el código de seguridad correctamente!";
$LANG[12058] = "Rellene todos los campos del formulario!";
$LANG[12077] = "Cadastrar";
$LANG[12090] = "Para cambiar sus datos, rellene los campos siguientes. Si desea cambiar la contraseña, debe introducir la nueva contraseña dos veces para evitar problemas en el futuro debido a los errores de escritura.";
$LANG[12091] = "Contraseña actual incorrecta!";
$LANG[12092] = "Las contraseñas introducidas en \"Contraseña\" y \"Repetir contraseña\" no son iguales!";
$LANG[12093] = "La contraseña no puede superar los 16 caracteres!";
$LANG[12098] = "El personaje está PK!";
$LANG[12099] = "El personaje está Online!";
$LANG[12100] = "Ningún personaje encontrado!";
$LANG[16000] = "Introduzca un nombre con sólo letras y números sin espacios ni caracteres especiales! (a-zA-Z0-9)";
$LANG[16001] = "El nombre no puede superar los 16 caracteres!";
$LANG[16002] = "Último login";
$LANG[16003] = "Creada en";
$LANG[16004] = "No ha habido";
$LANG[16005] = "Último IP";
$LANG[10003] = "Cambio de datos";
$LANG[10010] = "Servicios";
$LANG[10011] = "Comprar";
$LANG[10013] = "Transferir";
$LANG[10015] = "Mis Pedidos";
$LANG[10024] = "Seleccione un personaje, la cantidad y método de pago!";
$LANG[10025] = "Cantidad inválida! Inténtalo de nuevo.";
$LANG[10026] = "Personaje inválido! Inténtalo de nuevo.";
$LANG[10027] = "Método de pago inválido! Inténtalo de nuevo.";
$LANG[10029] = "Protocolo";
$LANG[10030] = $coinName_mini."'s Comprados";
$LANG[10031] = $coinName_mini."'s Bonos";
$LANG[10032] = "Total de ".$coinName_mini."'s a recebir";
$LANG[10033] = "Personaje que recibirá";
$LANG[10034] = "Valor a pagar";
$LANG[10035] = "Fecha de pedido";
$LANG[10036] = "Última actualización de status";
$LANG[10037] = "Método de pago";
$LANG[10038] = "Status";
$LANG[10039] = "No hay";
$LANG[10040] = "Pagar";
$LANG[10042] = "Pagar ahora";
$LANG[10045] = "<b>Importante:</b> Las fechas son de conformidad con el Data Center.";
$LANG[10046] = "<b>Esta factura no existe o no es suya. Revise su lista de <a href='./?module=donate&page=orders'>pedidos</a>.</b>";
$LANG[10047] = "Hacer Nuevo Pedido";
$LANG[10052] = "Factura";
$LANG[10053] = "El ".$server_name." es un servidor gratuito, para que todos puedan disfrutar del mundo de Lineage II de forma gratuita, pero el servidor tiene algunos gastos. En la compra de ".strtolower($coinName_mini)."'s usted estará ayudando a crecer y mantener todos los servicios disponibles en todo momento.<br /><br />Usted puede comprar muchos artículos en el juego y disfrutar de unos servicios alternativos en nuestro sitio web utilizando ".$coinName."'s.";
$LANG[10054] = "He leído y acepto las condiciones de compra de ".strtolower($coinName_mini)."'s expresado anteriormente";
$LANG[10055] = "Introduzca los datos requeridos a continuación y haga clic en \"Hacer Pedido\". Un nuevo pedido se llevará a cabo y se abrirá una ventana con la factura para el pago. Lo mismo pedido se puede acceder más tarde en la página <a href='?module=donate&page=orders'>Mis Pedidos</a>.";
$LANG[10056] = "Personaje";
$LANG[10057] = "Cantidad deseada";
$LANG[10058] = "Valor total";
$LANG[10059] = "Forma de Pago";
$LANG[10060] = "bonos";
$LANG[10061] = "Hacer Pedido";
$LANG[10064] = "Por favor, compruebe su conexión a Internet. La página está tomando demasiado tiempo para responder.";
$LANG[10065] = "Lo sentimos, ha ocurrido un error! Por favor, vuelva a intentarlo.";
$LANG[10066] = "Seleccione el personaje y ejecute cualquiera de los servicios disponibles.";
$LANG[10068] = "Saldo";
$LANG[10070] = "Precio";
$LANG[10088] = "Seleccione un personaje!";
$LANG[10089] = "Este personaje no tiene clan!";
$LANG[10095] = "Nuevo nombre";
$LANG[10097] = "Usted no tiene suficientes ".strtolower($coinName_mini)."'s!";
$LANG[10099] = "Por favor, repetir el nombre correctamente!";
$LANG[10100] = "Usted no es el líder de este clan!";
$LANG[10104] = "Este personaje no es PK!";
$LANG[10115] = "Valor";
$LANG[10116] = "Fecha";
$LANG[10117] = "Última actualización";
$LANG[10118] = "Método Pag.";
$LANG[10119] = "pedido(s) encontrado(s)";
$LANG[10120] = "Eliminar";
$LANG[10121] = "Cancelar";
$LANG[10122] = "¿Seguro que quieres eliminar el pedido de protocolo ";
$LANG[10124] = "No ha hecho ninguno <a href=\"./?module=donate&page=add\">pedido</a>";
$LANG[10125] = "Este pedido no fue hecho por usted!";
$LANG[10126] = "No se puede eliminar este pedido!";
$LANG[10163] = "Si desea transferir ".strtolower($coinName_mini)."'s, rellene los campos siguientes.";
$LANG[10165] = "Cantidad de ".strtolower($coinName_mini)."'s a transferir.";
$LANG[10166] = "Nombre del personaje que recibirá el ".strtolower($coinName_mini)."'s.";
$LANG[10167] = "Destinatario";
$LANG[10168] = "Cantidad";
$LANG[10169] = "Por razones de seguridad, por favor, repita la cantidad y el destinatario:";
$LANG[10170] = "Transferir";
$LANG[10171] = "Las cantidades introducidas no son iguales! Por favor, corrija y vuelva a intentarlo.";
$LANG[10172] = "Los nombres de los destinatarios introducidas no coinciden! Por favor, corrija y vuelva a intentarlo.";
$LANG[10174] = "No puede transferir en este momento por qué";
$LANG[10175] = "está online!";
$LANG[11979] = "Rellene el captcha correctamente!";
$LANG[11990] = "Datos incorrectos!";
$LANG[11999] = "Cambios en clans pueden tener efecto sólo después de un restart server";
$LANG[12000] = "Ningún personaje se encontró con ese nombre!";
$LANG[14000] = "Condiciones para comprar ".$coinName_mini."'s";
$LANG[14001] = "Al comprar, tenga en cuenta que usted no tiene ningún privilegio antes que los otros jugadores. Todos están sujetos a las mismas reglas y castigos.<br /><br />
No somos responsables de la seguridad y el destino de lo item después de que se entrega a su personaje. No devolveremos nada si pierde en el juego o algún descuido con la seguridad de su cuenta.<br /><br />
No vamos, en ningún caso, efectuar la devolución del dinero de la compra. Te garantizamos la entrega de que fue comprado a su personaje seleccionado dentro de los términos y condiciones establecidos a continuación.<br /><br />
<b>Plazos y Entrega</b><br /><br />
El plazo de entrega varía dependiendo del modo elegido del pago y puede ser un par de minutos para las compras realizadas a través de transferencia online o en la tarjeta de crédito, o hasta 72 horas para las compras realizadas a través de un banco.<br /><br />
Vamos a recibir automáticamente de sites intermediarios notificaciones sobre la operación. No hay necesidad de la confirmación del pago por e-mail o envío de comprobantes, nuestro sistema es totalmente automático.<br /><br />
Por razones de seguridad de nuestro sistema sólo entregar si tu personaje está offline en el momento del pago es aprobado. Pero no te preocupes, si tu personaje se encuentra online en el momento, un nuevo intento de entrega se realizará automáticamente cada hora, hasta que su personaje no está online.<br /><br /><br />
Controversias en sites de pago, los intentos de cargo o actitudes fraudulentas no se tolerarán. En tales casos, vamos a bloquear sus cuentas y computadoras hasta que se evalúe y resuelva la condición, la cerradura puede ser permanente dependiendo del evento.<br /><br />
Si surgen problemas en la entrega automática, todo lo que tienes que hacer es ponerse en contacto con nosotros. No contacte antes de un período de 24 horas después de la confirmación de su pago.<br />
";
$LANG[14004] = "Este nombre ya está en uso!";
$LANG[15003] = "Transacción bancaria";
$LANG[15004] = "Después del pago enviar el comprobante para";
$LANG[15005] = "Depósito o transferencia a la siguiente cuenta bancaria";
