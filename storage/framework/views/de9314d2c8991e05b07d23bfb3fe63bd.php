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
    <h1>Historia de Vaupes</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/vaupes.png')); ?>"  alt="">
    </figure>
    <p>Esta leyenda es conocida en todo el departamento y es muy especial para su pueblo, especialmente por los personajes míticos de la región: el Sol, Diádoe (padre del pez tarira) y Waí deyú (padre de los pescados). Esta leyenda relata el comienzo de la comunidad indígena guanano llamada YUTICA, que en dialecto se llama ÑA´PîMA. Habla de varios lugares sagrados sobre los diferentes ríos que los personajes recorren.
        Leyenda del sol y su hijo
        Cerca a la comunidad indígena de YUTICA, que en dialecto se llama ÑA´PIMA, del bajo Vaupés, ubicada en un caño pequeño llamado caño sol, hay una laguna conocida con el nombre de DIADOEDIJTARA, laguna de tarira (Pez dormilón). Allí estaba internado Diádoe, a quien debe su nombre la laguna. Cerca del lugar vivía el mítico Sol con su hijo y algunas familias relacionadas con la maloka.
        Diádoe era familiar del padre de los pescados, llamado Vaí Deyu, que en esa época vivía en Waracapurí, por el caño piña (ahora conocido como caño viña). Estando en caño sol, el Sol se iba de pesca a la laguna de Diá Doe Dijtara llevando siempre consigo su hijo, que estaba lleno de granos y heridas en la piel, pero que se pensaba fuese un estado normal en la época de la infancia. Aunque parezca absurdo, el padre Sol, utilizaba al niño como carnada de pesca. A pesar de llevar siempre consigo arco y flecha, cuando llegaba a la laguna, colocaba al hijo encima de una camareta, lo tendía a ras del agua y con las uñas le pinchaba algunas de las heridas para que goteara la sangre. El olor de la sangre atraía a los peces, que se acercaban para comer o lamer la sangre y en ese momento el Sol los flechaba, aunque tenía la restricción de no matar más de cuatro o cinco pescados antes de regresarse a la maloca.
        Cada vez que se iba de pesca hacía lo mismo. Sus compañeros de la maloca también se iban de pesca pero no conseguían nada, por lo tanto comenzaron a sospechar de la pesca de aquel y murmuraba la gente: “¿por qué será que el Sol, sale para la pesca y coge pescados al ratico? – debe tener chundul (pusanga) para pescado...”.
        </p>
    
        <a href="<?php echo e(route('Vau2')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/derecha.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>


<?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views\HistoriasVaupes\HistoriaVaupes.blade.php ENDPATH**/ ?>