$(function() {
    
    // Al enviar el formulario de login
    $('#form_registro').submit(function(e) {
        e.preventDefault();
        
        // Se comprueba la validez del formulario
        if(validateFormSingup(htmlForm)) {
            
            // Si el form es válido, se realiza la petición AJAX para registrar al usuario
            // Datos del usuario
            var dataArray = new Array()
            dataArray['nombre'] = $(this).find('input[name="nombre"]').val();
            dataArray['apellidos'] = $(this).find('input[name="apellidos"]').val();
            dataArray['email'] = $(this).find('input[name="email"]').val();
            dataArray['password'] = $(this).find('input[name="pass"]').val();
            
        } else {
            
        }
        
        // Si el formulario no es válido, se para el envío
//        if(!validateFormSingup()) {
//            e.preventDefault();
//        }
    });
    
    // Al abrir la localización de los lugares recomendados
    $('.map_button').click(function(e) {
        var site = $(this).data('site');
        showModalMaps(this);
    });
    
    // Al ocultar el modal de mapas se limpia su contenido
    $('#modal_maps').on('hidden.bs.modal', function (e) {
        clearModalMaps();
    });
    
});

/**
 * Función encargada de generar el contenido del modal con los lugares de interés.
 * @param {string} Cadena con el código del lugar que se quiere mostrar.
 */
function showModalMaps(site) {
    // Se obtiene que botón se ha pulsado
    var url = '';
    var title = '';
    var desc = '';

    // Se obtiene la url correspondiente al mapa
    switch(site) {
        case 'plaza':
            title = 'Plaza de España';
            desc = 'La <strong>Plaza de España</strong> es un conjunto arquitectónico enclavado en el Parque de María Luisa, proyectado por el arquitecto Aníbal González. Se construyó entre 1914 y 1929 como edificio principal de mayor envergadura, de la Exposición Iberoamericana de 1929.';
            url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.5342623218257!2d-5.9890816842222705!3d37.37719567983374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126ea76eb6b10f%3A0x8926f5e874d3da39!2sPlaza+de+Espa%C3%B1a!5e0!3m2!1ses!2ses!4v1526814535790";
            break;
        case 'torre':
            title = 'Torre del Oro';
            desc = 'La <b>Torre del Oro de Sevilla</b> es una torre albarrana situada en el margen izquierdo del río Guadalquivir. Es una torre formada por tres cuerpos, El primer cuerpo, dodecagonal, fue construido entre 1220 y 1221 por orden del gobernador almohade de Sevilla, Abù l-Ulà. En cuanto al segundo cuerpo, también dodecagonal fue mandado construir por Pedro I el cruel en el siglo XIV. Por último el cuerpo superior, cilíndrico y rematado en cúpula dorada, fue construido en 1760 por el ingeniero militar Sebastián Van der Borcht tras el terremoto de Lisboa de 1755.'
            url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.313698887368!2d-5.998678584222168!3d37.38241297983273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c16af11db65%3A0x7504999e77d24fe5!2sTorre+del+Oro!5e0!3m2!1ses!2ses!4v1526814619283';
            break;
        case 'alcazar':
            title = 'Real Alcázar de Sevilla';
            desc = 'El <b>Real Alcázar de Sevilla</b> es un palacio fortificado compuesto por zonas construidas en diferentes etapas históricas. Aunque el palacio original se edificó en la Alta Edad Media, se conservan algunos vestigios de arte islámico y, de la etapa posterior a la conquista castellana, un espacio palaciego mudéjar y otro de estilo gótico. En reformas posteriores se añadieron elementos renacentistas, manieristas y barrocos.';
            url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.169453696211!2d-5.995295484222101!3d37.385824679832155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c1755b54781%3A0xe49da05de71e6de5!2sCatedral+de+Sevilla!5e0!3m2!1ses!2ses!4v1526814633579';
            break;
        case 'catedral':
            title = 'Santa Iglesia Catedral';
            desc = 'La catedral de <b>Santa María de la Sede de Sevilla</b> es la catedral gótica cristiana con mayor superficie del mundo. La Unesco la declaró en 1987, junto al <b>Real Alcázar</b> y el <b>Archivo de Indias</b>, Patrimonio de la Humanidad​ y en 2010, Bien de Valor Universal Excepcional. Según la tradición, la construcción se inició en 1401, aunque no existe constancia documental hasta 1433. La edificación se realizó en el solar que quedó tras la demolición de la antigua mezquita aljama de Sevilla,​ de la cual se conservan el alminar <b>la Giralda</b> y el <b>Patio de los Naranjos</b>.';
            url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.286687328839!2d-5.992414384222137!3d37.383051879832486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c198c41a24b%3A0xbaa976bfaec1fe87!2sReal+Alc%C3%A1zar+de+Sevilla!5e0!3m2!1ses!2ses!4v1526814662263';
            break;
    }

    // Se carga el contenido en el modal
    $("#modal_maps_title").html(title);
    $("#modal_maps_content").html('<iframe src="'+url+'" class="iframe_map" frameborder="0"></iframe>');
    $("#modal_maps_desc").html(desc);
}

/**
 * Función encargada de limpiar el contenido del modal en el que se muestra la información de 
 * lugares de interés
 */
function clearModalMaps() {
    // Se limpia el contenido del modal
    $('#modal_maps_title').html('');
    $('#modal_maps_content').html('<i class="fa fa-spinner fa-spin"></i>');
    $('#modal_maps_desc').html('');
}

/**
 * Función que comprueba que una cadena no se encuentre vacía o en blanco.
 * @param {string} value Cadena a comprobar
 * @returns {Boolean} True si la cadena tiene contenido, false en caso contrario
 */
function checkEmptyString(value) {
    var valid = true;
    
    // Patrón cadena vacía o en blanco
    var pattern = /^\s*$/g;
    
    if(value.match(pattern)) {
        valid = false;
    }
    
    return valid;
    
}

/**
 * Función que comprueba la validez de la contraseña.
 * Comprueba que la confirmación de la contraseña y la contraseña en sí, coincidan además de que
 * cumpla con los requisitos de entre 8 y 16 caracteres, mínimo una mayúscula, una minúscula y un dígito.
 * @param {string} password Contraseña
 * @param {string} confPassword Confirmación de contraseña
 * @returns {Boolean} True si es válido, false en caso contrario.
 */
function checkValidPassword(password, confPassword) {
    
    var valid = true;
    
    // Patrón para la contraseña. Requiere: entre 8 y 16 caracteres, mínimo una mayúscula, una minúscula y un dígito
    var pattern = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/g;

    // 1. Se comprueba si ambas cadenas son iguales
    if(password != confPassword) {
        valid = false;
        console.log('contraseña no válida step1');
    }
    
    // 2. Si las cadenas son iguales se comprueba que cumpla con el patrón
    if(valid && !password.match(pattern)) {
        // Si no coincide con el patrón
        valid = false;
        console.log('contraseña no válida step2');
    }
    
    return valid;
}

/**
 * Función encargada de validar el formulario de registro de usuarios
 * @param {html element} Elmento html.
 * @returns {boolean} True si el formulario es válido, false en caso contrario
 */
function validateFormSingUp(htmlForm) {
    var formValid = true;

    // Se valida el formulario
    var arrayCampos = [
        $(htmlForm).find('input[name="nombre"]'), 
        $(htmlForm).find('input[name="apellidos"]'), 
        $(htmlForm).find('input[name="email"]')
    ];

    // Campos que no deben estar vacíos o en blanco
    arrayCampos.forEach(function(element) {
        if(!checkEmptyString(element.val())) {
            $(element).parent().addClass('error');
            formValid = false;
        } else {
            $(element).parent().removeClass('error');
        }
    });

    // Contraseña
    var pass = $(htmlForm).find('input[name="pass"]');
    var passConf = $(htmlForm).find('input[name="pass_conf"]');        

    if(!checkValidPassword(pass.val(), passConf.val())) {
        pass.parent().addClass('error');
        passConf.parent().addClass('error');
        formValid = false;
    } else {
        pass.parent().removeClass('error');
        passConf.parent().removeClass('error');
    }
    
    return formValid;
}