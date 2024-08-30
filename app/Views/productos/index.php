<style>
    *{
        font-family:"Arial";
        color:#48e;
margin:auto;
    }

    th{
        background:#48e9;
        color:#fff;

    }

    td{
        padding:5px;
    }

    h2{
        text-align:center;
        padding:5px 0px;
        margin-top:10px;
    }

    </style>

<h2>Listado de productos</h2>
<table border="1">
    <tr>
        <th> ID </th>
        <th> Nombre </th>
        <th> Precio </th>
        <th> Acciones </th>
    </tr>

    <?php foreach($productos as $producto):?>

    <tr>
        <td> <?php echo $producto['id'];?> </td>
        <td> <?php echo $producto['producto'];?> </td>
        <td> <?php echo $producto['precio'];?> </td>
        <td> 
            <a href="<?php echo base_url('productos/ver/'.$producto['id'])?>">🔍</a>
            <!--<a href='<?php echo base_url('productos/editar/'.$producto['id'])?>'>Editar</a>
            <a href='<?php echo base_url('productos/borrar/'.$producto['id'])?>'>Eliminar</a>    
    --></td>
    </tr>
        <?php endforeach;?>
    </table><br>
<center>
<a href='<?php echo base_url('productos/crear');?>'>Agregar producto</a>
    </center>