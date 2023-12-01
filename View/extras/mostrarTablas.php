<?php
//use Controller\CategoriaController;
//$categoria = new CategoriaController();
use Controller\CursoController;
$categoria = new CursoController();
?>

<table id="example" class="display" width="100%"></table>
<!--<script type="text/javascript">
    let dataCategorias = <?php // echo json_encode($categoria->mostrar()); ?>;
    let data =[];

    for(let i=0; i<dataCategorias.length; i++){
        data.push([dataCategorias[i].id, dataCategorias[i].categoria]);
        // enviando los datos al array de js -> [1][Cocina], [2][Mecanica]
    }
    let table = new DataTable('#example', {
        columns: [{title: 'Id'},
    {title: 'Categoria'}
],
data: data
    });


</script>-->
<script type="text/javascript">
    let dataCategorias = <?php echo json_encode($categoria->mostrar()); ?>;
    let data =[];

    for(let i=0; i<dataCategorias.length; i++){
        data.push([dataCategorias[i].id, dataCategorias[i].curso]);
        
    }
    let table = new DataTable('#example', {
        columns: [{title: 'Id'},
    {title: 'Curso'}
],
data: data
    });


</script>



