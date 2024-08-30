<style>
    *{
        font-family:"Arial";
        color:#48e;
margin:auto;
    }



    h2{
        text-align:center;
        padding:5px 0px;
        margin-top:10px;
    }

    b{
        color:blue;
    }


p{
    
    padding:3px;
    border-radius:3px;
    background:#aaa;
    margin:auto;
    width:300px;
    color:#fff;
}

.container{
    text-align:center;
}

    </style>


<h2>Vista de producto: <b><?php echo $producto['producto'];?></b></h2>
<hr><br>
<div class="container">
    <p>Nombre:</p> <b><?php echo $producto['producto'];?></b><br><br>
    <p>Codigo:</p>  <b><?php echo $producto['id'];?></b><br><br>
    <p>Descripcion:</p>  <b><?php echo $producto['descripcion'];?></b><br><br>
    <p>Stock:</p>  <b><?php echo $producto['stock'];?></b><br><br>
    <p>Fecha ingreso al stock:</p> <b><?php echo $producto['creado_en'];?></b><br>

<hr><br>
<a href='<?php echo base_url('productos');?>'>Volver al catalogo</a>
</div>