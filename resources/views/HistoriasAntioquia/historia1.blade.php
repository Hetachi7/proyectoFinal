<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Eleyenda.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{asset('local_storage/img/logo.png')}}"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="{{ asset('local_storage/img/ojo.gif') }}" >
    </div>
<audio  controls autoplay >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>La virgen de Caquiona</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cauca/Caquiona/virgen.jpg') }}"  alt="">
    </figure>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, placeat qui reiciendis eum commodi expedita itaque nam non impedit accusantium, sed, dicta ex exercitationem numquam ipsa aliquam natus aperiam sit eos ut libero culpa quibusdam minima. Ipsum at quisquam fuga dignissimos eveniet, dolores error. Tenetur, quibusdam quos blanditiis odio eligendi obcaecati ipsum quas voluptate odit cum ea. Quibusdam pariatur a facere asperiores at! Sunt quo exercitationem, nobis esse laboriosam officiis harum perspiciatis qui blanditiis repellat. Expedita quia a assumenda obcaecati. Nesciunt sequi odit cum eveniet magnam distinctio rem suscipit maiores ipsum facere expedita animi, voluptatum nam modi possimus ducimus quae similique alias iusto iure in adipisci. Earum ea ad, est dicta porro tempora necessitatibus voluptate nisi itaque inventore accusamus repellendus, distinctio laudantium praesentium qui. Ea laboriosam illum earum at ab cumque hic debitis vitae. Esse molestiae odio deserunt nam earum corporis libero aut, voluptate explicabo porro quasi rerum tempore provident pariatur. Doloremque ad ea perspiciatis facere qui, beatae iure quisquam dignissimos enim numquam! Facere hic rem magnam et voluptate, necessitatibus eos quasi a debitis obcaecati fugiat delectus harum voluptas enim nihil tempora quia quis architecto quod tempore deleniti quaerat corrupti omnis. Delectus voluptatum, eveniet ducimus qui voluptatibus molestiae mollitia. Similique natus iusto autem tempore molestiae sunt quibusdam iste eaque adipisci recusandae esse ab excepturi voluptatum fuga minus nostrum consequuntur nihil veritatis, laborum sed? Sequi tempora tenetur nesciunt. Reprehenderit eligendi laboriosam nemo voluptate labore quaerat in at vitae deserunt possimus, id rerum, expedita inventore corrupti eaque harum explicabo rem veniam. Voluptatem ab eos aliquam quo obcaecati sapiente repellat at reprehenderit ducimus cum aspernatur, sed saepe hic numquam, perferendis quae! Porro nulla similique, asperiores, molestiae delectus ipsam quos quasi itaque nisi quaerat voluptas fuga ratione voluptatum animi! Unde necessitatibus numquam ut animi dolorem vitae, laudantium ipsum iusto fugiat impedit aspernatur tenetur consequuntur.</p>
    
    
        <a href="{{route('leyenda')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>