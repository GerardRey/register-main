function logout(){

    if (window.confirm("¿Seguro que quieres salir?")) { 
        window.location.replace("/tienda/logout.php");
    }    

}