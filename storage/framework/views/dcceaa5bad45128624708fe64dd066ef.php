<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/EThistoria.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"   alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="titulo">
   <h1>DEPARTAMENTO CHOCO</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/mohan.png')); ?>" >
        </figure>
        <div class="contenido">
            <h3></h3>
            <p>Se dice que en este caserío vivían dos compadres brujos que, a primera oportunidad, trataron de competir en conocimientos</p>
            <a href="<?php echo e(route('mohan')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/animasola.png')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La Anima Sola</h3>
            <p>Es un mito que tiene asiento en muchas regiones del occidente colombiano, entre ellas el departamento de Chocó.</p>
            <a href="<?php echo e(route('anima')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/muelona.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La Muelona</h3>
            <p>Se dice que en este caserío vivían dos compadres brujos que, a primera oportunidad, trataron de Este mito está representado por una mujer muy bella </p>
            <a href="<?php echo e(route('muelon')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/indioagua.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>EL Indio Del Agua</h3>
            <p>Este mito está representado por un indio de cabellera larga y espesa que le cubre el rostro y le llega hasta los hombros</p>
            <a href="<?php echo e(route('indio')); ?>">Leer más</a>

        </div>

    </div>


</div>




<?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views\Departamentos\tarjetaChoco.blade.php ENDPATH**/ ?>