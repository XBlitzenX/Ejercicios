<!DOCTYPE html>

<html>
    <head>
        <title>Tasca M2</title>
        <link rel="stylesheet" href="./styles/estilos.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <style>
            section {
            font-family: "Audiowide", sans-serif;
            color:white;
            text-align:center;
            }
            nav {
            font-family: "Audiowide", sans-serif;
            color:white;
            text-align:center;
            font-size:200%;
            }
            footer {
            font-family: "Audiowide", sans-serif;
            color:white;
            }
            article {
            font-family: "Audiowide", sans-serif;
            color:white;    
            }
            aside {
            font-family: "Audiowide", sans-serif;
            color:white;      
            }
        </style>
        
    </head>

    <body>
        <?php
        include 'header.php';
        ?>
        <nav>
            <ul class="flex-container">
                <li class="flex-item5">Opcion 1</li>
                <li class="flex-item5">Opcion 2</li>
                <li class="flex-item5">Opcion 3</li>
                <li class="flex-item5">Opcion 4</li>
                <li class="flex-item5">Opcion 5</li>
            </ul>
        </nav>
        <section>
            <ul class="flex-container">
                <li class="flex-item" style="background-image: url('images/paisaje1.png'); background-size: 100% 100%;">Paisajes de Mexico</li><!-- Aislar el texto del button y mover la posición del button con margin-top: y margin-left: -->
                <li class="flex-item" style="background-image: url('images/paisaje2.jpg'); background-size: 100% 100%;">Paisajes de Japon</li>
                <li class="flex-item" style="background-image: url('images/paisaje3.jpg'); background-size: 100% 100%;">Paisajes de Hawai</li>
            </ul>
          <button type="button" style="position: absolute; top: 38%; left: 39.15%;">Ver</button> 
          <button type="button" style="position: absolute; top: 38%; left: 56.65%;">Ver</button> 
          <button type="button" style="position: absolute; top: 38%; left: 74.15%;">Ver</button> 
        </section>
           
        <main class="flex-container">
            <aside>
                <div class="flex-item2" style="text-align:center;">Mejores parajes<br>de playa</div>
                <img src="images/playa.jpg" alt="Que bonita esta playa." width="200" height="150" style="position: absolute; top:49%; left:24%;">
                <div style="position: absolute; top:68%; left:24.25%;">Descubre los mejores<br>parajes de playa<br>del momento.</div>
                <button type="button" style="position: absolute; top: 81.8%; left: 31%;">Ver mas</button> 
            </aside>
            <article>
            <div class="flex-item3" style="font-size:250%; text-align:center;">POSTRES DEL MUNDO</div>
            <img src="images/mochis.jpg" alt="Se me ha entojado comer unos mochis ahora." width="540" height="270" style="position: absolute; top:49%; left:35.85%;">
            <div style="position: absolute; top:75%; left:35%;">En cada pais se sirven postres completamente distintos al resto. <br>Dulces, salados, amargos e incluso postres acidos.<br>En esta lista exploraremos los postres mas tipicos de cada pais.</div>
            <button type="button" style="position: absolute; top: 81.8%; left: 62.25%;">Ver mas</button> 
            </article>
            <aside>
            <div class="flex-item2" style="text-align:center;">Mejores parajes<br>de montana</div>
                <img src="images/montana.jpg" alt="Que bonita esta montaña." width="200" height="150" style="position: absolute; top:49%; left:65.6%;">
                <div style="position: absolute; top:68%; left:65.8%;">Descubre los mejores<br>parajes de montana<br>del momento.</div>
                <button type="button" style="position: absolute; top: 81.8%; left: 72.68%;">Ver mas</button> 
            </aside>
        </main>
  
       <?php
        include 'footer.php';
        ?>
        
    </body>
</html>