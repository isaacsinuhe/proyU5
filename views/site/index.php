<?php

/* @var $this yii\web\View */

$this->title = 'Administrador de Tareas';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><bold>¡Bienvendido!</bold></h1>
        <p class="lead">Ingresa para poder adminisrar tus tareas. :)</p>

        <p><a class="btn btn-info" href="?r=site/about">Este es nuestro crew. :)</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Administra, crea, y borra tus tareas.<br></h2>

                <p class = 'resalta'>En este sitio puedes administrar tus tareas, puedes crear, modificar, eliminar y buscar las Tareas
                  en el sistema, además que nos gusta consentirte, por eso cada día estamos creando nuevo contenido.</p>
            </div>
            <div class="col-lg-4">
                <h2>Observa  quién está en nuestro sistema.</h2>

                <p class = 'resalta'>Es sencillo, sólo piensa en una persona en el sistema, busca su nombre, y checa algunos
                  de sus datos para comunicarte con él. Esto nos ayuda a estar más sincronizados con nuestras
                  tareas y nuestros horarios.</p>
            </div>
            <div class="col-lg-4">
                <h2>Checa todos los tipos de tareas.</h2>

                <p class = 'resalta'>¿Cansado de que todos te digan que hay y no poder elegir?. No sólo tienes el poder de
                  ver que tareas existen, también puedes crear una y borrarlas a tu antojo Cuanto más flexible para tí, mejor.
                ¡Vamos!, ¡Inténtalo!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-success" href="?r=tarea/index">Revisar tareas.</a></p>
            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-primary" href="?r=personal/index">Buscar Personal</a></p>
            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-danger" href="?r=tipotarea/index">Tipos de tareas</a></p>
            </div>
        </div>

    </div>
</div>
