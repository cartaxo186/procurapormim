$(function() {
	$("input[name='noticicacoes']").parent().click();

	eventCheckbox();
	eventRadio();
	inputMask();
});



 var eventCheckbox = function()
 {
 	$("input[name='noticicacoes']").parent("label").click(function() {
 		if ($(this).hasClass("checked")) {
 			$(this).children("input").val(0);
 		} else {
 			$(this).children("input").val(1);
 		}
 	});
 }



 var eventRadio = function()
 {
 	var hidden = $("#hiddenSexo");

 	$("input[name='sexo']").parent("label").click(function() {
 		hidden.val($(this).children("input").val());
 	});
 }



 var inputMask = function() {
 	// Mask : data_nascimento
 	$("input[name='data_nasc']").mask("99/99/9999");

 	// Mask telefone
	$("input[name='telefone']").mask("(99) 9999-9999");

	// Mask Celular
	$("input[name='celular']").mask("(99) 9999-9999?9").on('focusout', function (event) {  
	    var target, phone, element;  
	    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
	    phone = target.value.replace(/\D/g, '');  
	    element = $(target);  
	    element.unmask();  
	    if(phone.length > 10) {  
	        element.mask("(99) 99999-999?9");  
	    } else {  
	        element.mask("(99) 9999-9999?9");  
	    }  
	});

	// Mask
	$("input[name='cep']").mask("99999-999");
 }