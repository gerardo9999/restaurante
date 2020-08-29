<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>desarrollo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/app.css" rel="stylesheet" >
</head>
<body>
    <div id="app" >
         <div class="app-body">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a @click  "menu=0" class="navbar-brand"  href="#">Escritorio</a>
                    <div>
                        <ul class="navbar-nav mr-auto">
                            <li  @click  "menu=1" >
                                <a class="nav-link" href="#">Categoria</a>
                            </li>
                        </ul>
                    </div>
            </nav>
             <!--Menu Principal -->
            <template v-if= "menu=0">
                 <b>Desarrollo de aplicacion web</b>
             </template>
            <!--Fin de menu principal-->
            
            <template v-if="menu==1">
            <frmCategoria></frmCategoria>
            </template>
         </div>
    </div>
    <script src="js/app.js" ></script>
</body>
</html>