function validation(){

	var usuario,password;
	usuario = document.getElementById("usuario").value;
    password = document.getElementById("password").value;

    if(usuario==="" || password===""){
    	alert("Los dos campos son obligatorios");
    	return false;
    }

}