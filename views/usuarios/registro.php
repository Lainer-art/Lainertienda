<h1>Registrarse</h1>

<?php
if(isset($_SESSION['register']) && $_SESSION['register']): ?>

   <strong>Registro Exitpso!</strong>

   <?php else: ?>

    <strong>Registro Fallido</strong>

<?php endif; ?>

<form action="<?=base_url?> usuario/save" method="POST">


   <label for="nombre">Nombre</label>
   <input type="text" name="nombre" require/>

   <label for="apellidos">Apellidos</label>
   <input type="text" name="apellidos" require/>

   <label for="email">Email</label>
   <input type="text" name="email" require/>

   <label for="password">Contraseña</label>
   <input type="password" name="password" require/>

   <input type="submit" value="registrarse" require/>

</form>