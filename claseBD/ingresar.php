<html>
    <head>
        <title> Ingresar Libro </title> 
    </head>
    
    <body>
        
        <header>Ingresar los datos del Libro</header>
        
        <form action="administrarLibro.php" method="post">

            <table>

                <tr> 
                    <td> Nombre Libro </td>
                    <td> <input type="text" name="nombre"> </td> 
                </tr>

                <tr> 
                    <td> Autor </td>
                    <td> <input type="text" name="autor"> </td> 
                </tr>

                <tr> 
                    <td> Fecha Edicion </td>
                    <td> <input type="text" name="edicion"> </td> 
                </tr>

                <input type="hidden" name="insertar" value="insertar">
                
            </table>

            <input type="submit" value="Guardar">
            <a href="INDEX.php"> Volver </a>

        </form>
    </body>
</html>