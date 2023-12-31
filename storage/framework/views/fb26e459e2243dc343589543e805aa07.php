<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eleyenda.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
    </div>
<audio  controls autoplay >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>La India Guainia</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/india.png')); ?>"  alt="">
    </figure>
    <p>
        Afuera, el sol teñía de nuevo la alfombra movediza del río, pero ya no estaba la princesa para ver el vuelo retardado de las aves; en su lugar fue creciendo la mata de la puzana o zoon de mavicure, como remedio del amor no comprendido. Dicen los nativos que estas hierbas son afrodisíacas, que enloquecen de amor a las mujeres y las hacen capaces de todo. De ellas han tomado los primitivos para conseguir el amor de las muchachas.
        Los que quieren conseguir de estas hierbas no las encargan a otras personas por temor a ser engañados; ellos mismos van al cerro y se las piden al príncipe dueño del cerro. Para poderlas conseguir hay que guardar un ayuno riguroso de dos días.
        </p>
    
        <a href="<?php echo e(route('india2')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/derecha.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>


<?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views\HistoriasGuainia\Historiaindia.blade.php ENDPATH**/ ?>