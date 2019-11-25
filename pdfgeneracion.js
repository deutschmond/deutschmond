$(document).ready(function(){
	var specialElementHandler = {
		"#editor":function(element,rendered){
			return true;
		}
	};
	$("#cmd").click(function(){
		var doc = new jsPDF();
		doc.fromHTML($("#institucional").html(),15,15,{
			"width":170,
			"elementHandlers":specialElementHandler
		});
		doc.save("quinto.pdf");
	});
});