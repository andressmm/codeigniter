<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
<style>
    .boton{

        padding:5px;
        background:#48e9;
        border-radius:5px;



    }

    </style>
</head>
<body>
    <h1>Catalogo de productos</h1>
    <hr>
    <div class="boton">        
        <a href="<?php echo base_url('productos');?>">Ver al catalogo</a>
        </div>

        <p>Informacion: <?php echo $informacion;?></p>


</body>
</html>