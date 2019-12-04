$(document).ready(function(){
	var specialElementHandler = {
		"#editor":function(element,rendered){
			return true;
		}
	};
	$("#cmd").click(function(){
		var doc = new jsPDF();
		doc.fromHTML($(".cart-items").html(),15,15,{
			"width":170,
			"elementHandlers":specialElementHandler
		});
		doc.save("quinto.pdf");
	});
});