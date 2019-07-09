

<?php
/*
        $data = json_decode(file_get_contents("https://api.hiringroom.com/v0/vacancies?listStatus=activa&userId=5767f2ce820cbfb46f59de04&resp=json&page=0&pageSize=20&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJtaXNlbnRyZXZpc3RhcyIsImFjY1QiOiJjb21wYW55IiwiYWNjQyI6MSwiaWF0IjoxNTYyNDU4Nzg4LCJleHAiOjE1NjI1NDUyMTgsImFjY1R0IjoicHJlbWl1bSJ9.jO9RHmIM4zDbTjY-0tHTs_o6bGIsiaz9IVngIxV_GEo"), TRUE);
        print_r($data);
*/
       
        $data = file_get_contents("https://api.hiringroom.com/v0/vacancies?listStatus=activa&userId=5767f2ce820cbfb46f59de04&resp=json&page=0&pageSize=20&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJtaXNlbnRyZXZpc3RhcyIsImFjY1QiOiJjb21wYW55IiwiYWNjQyI6MSwiaWF0IjoxNTYyNjMyNjUwLCJleHAiOjE1NjI3MTkwODAsImFjY1R0IjoicHJlbWl1bSJ9.Hmzpeq4nuyCio22_-l-wTW7x3Qk2CwIkwNVzRrPMZlU");
        //print_r($data);
      
 
        //$contenido = file_get_contents("vacantes.json");

        $contenido = utf8_encode($data);
        
        $datos = json_decode($contenido, true);
        
        //print_r($datos);

        $hay = count($datos["vacantes"]);

        $vacantes = $datos["vacantes"];
        
        /*
        busquedaXEstado();
        busquedaXPagina();
        busquedaXFecha();
        
        function busquedaXEstado($vacantes){
            foreach ($vacantes as $estado){
                echo $estado['estadoActual']."<br>";
            }
        }
         */
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Prueba de Bootstrap</title> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
     <!--<script>
           $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#example').DataTable( {orderCellsTop: true, fixedHeader: true} );
    } 
      );
     </script>-->
</head>
<body style="background-image: url(assets/css/Fondo.png)">
    <?php require_once 'C:\wamp64\www\Proyecto_Hiringroom\codigos\cabecera.php' ?>
    
    
   

    <input type="search" name="Estado" placeholder="BUSCAR POR ESTADO" style="outline: none; padding: 10px;width: 200px; border-radius: 3px; border: 1px solid #eee; margin: 10px auto;">
    <input type="search" name="Paginado" placeholder="BUSCAR POR PAGINA" style="outline: none; padding: 10px;width: 200px; border-radius: 3px; border: 1px solid #eee; margin: 10px auto;"> | |
    <input type="search" name="Fecha" placeholder="F. INICIO" style="outline: none; padding: 10px;width: 200px; border-radius: 3px; border: 1px solid #eee; margin: 10px auto;">
    <input type="search" name="Fecha" placeholder="F. CIERRE" style="outline: none; padding: 10px;width: 200px; border-radius: 3px; border: 1px solid #eee; margin: 10px auto;">
    
    
  
    <?php foreach($vacantes as $valor):?>
    <?php if($valor['nombre']):?>
    
    <?php endif;?>
    <?php endforeach;?>
    </body>
</html>

<?php

 
?>


    


