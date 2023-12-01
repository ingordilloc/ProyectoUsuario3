
<h1>Bienvenidos al Sitio</h1>

<span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quo voluptatum ipsa id vitae nostrum dolorum eligendi, doloribus odit commodi eum dignissimos minus.</span>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, aliquam aut. Natus molestiae odio, aspernatur hic inventore expedita maxime nesciunt nihil possimus repellendus debitis laboriosam ducimus esse tempora voluptates fuga.
Sequi suscipit ullam vitae nam aut. Dolorum laborum recusandae molestias dignissimos quidem fugiat, praesentium in non modi cupiditate ipsa illum perspiciatis nulla inventore deleniti sapiente vel similique harum hic excepturi.</p>

<?php
 if(!empty($_SESSION['usuario'])){      
    echo "
    <h2> Usuario:  {$_SESSION['nombres']} {$_SESSION['apellidos']} </strong>
    </h2>";
} 
?>