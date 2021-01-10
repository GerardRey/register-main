function logout(){

    if (window.confirm("¿Seguro que quieres salir?")) { 
        window.location.replace("/php/tienda/logout.php");
    }    

}