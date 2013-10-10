$(function() {
	createCharRequired();
	valid();
});


/* ------------------------- 
 * createCharRequired
 * ------------------------- 
 *
 */

var createCharRequired = function()
{
	searchAttrInSeletor($("input"));
	searchAttrInSeletor($("select"));
}



/* ------------------------- 
 * searchAttrInSeletor
 * ------------------------- 
 *
 * @param seletor object
 */
 
var searchAttrInSeletor = function ( seletor )
{
	var htmlChar = "<span class='required'>*</span>";

	seletor.each(function(i) {
		if ($(this).attr("data-required") && typeof $(this).attr("data-required") == "string" && $(this).attr("data-required") == "true") {
			$(this).parent().children("label:first").append(htmlChar);
		}
	});
}



/* ------------------------- 
 * valid
 * ------------------------- 
 *
 */

var valid = function()
{
	var form = $("form");

	form.submit(function() {
		valid = true;

		form.find("input, select").each(function() {
			if ($(this).attr("data-required") && typeof $(this).attr("data-required") == "string" && $(this).attr("data-required") == "true") {
				if ($(this).val() == "" || $(this).val() == 0) {
					valid = false;
					$(this).parent(".control-group").addClass("error");
				}
			}
		});

		posValid(form);
		return valid;
	});
}



/* ------------------------- 
 * posValid
 * ------------------------- 
 *
 * @param form object
 */

var posValid = function( form )
{
	form.find("input, select").each(function() {
		if ($(this).parent(".control-group").hasClass("error")) {
			$(this).blur(function() {
				if ($(this).val() != "") {
					$(this).parent(".control-group").removeClass("error");
				}
			});
		}
	});
}