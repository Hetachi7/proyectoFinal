<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
     <link rel="stylesheet" href="<?php echo e(asset('css_index/Eregistrarse.css')); ?>">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="Logo de empresa">
        <h1>Registrate</h1>
        <form action="<?php echo e(route('register')); ?>" method="POST" enctype="multipart/form-data">
               <?php echo csrf_field(); ?>
                <label>Usuario</label>
                <input type="text" name="user" placeholder="Ingrese tu Usuario">

                <label>E-mail</label>
                <input type="text" name="email" placeholder="Ingrese sus Correo">

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label>password</label>
                <input type="text" name="password"  placeholder="Ingrese su contraseña">

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                
              
                <div class="alert alert-danger"><?php echo e($message); ?></div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="submit" value="Registrarse">
                <a href="<?php echo e(route('iniciosesion')); ?>">¿Ya tiene cuenta?</a>
                <a href="<?php echo e(route('recuperar')); ?>">Ha olvidado su contraseña</a>
            </div>

        </form>

    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views\Registro.blade.php ENDPATH**/ ?>