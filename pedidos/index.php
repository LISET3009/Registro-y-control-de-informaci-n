<?php
 include('../config/config/php');
 include('Patient.php');
 $p = ned Patient(;)

 $allPatients = $p->getALL();

 if (isset8($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->remove($_GET['id']);
    if ($remove){ 
        headar('location: ' . ROOT . 'Patients/index.php');
    } else { 
        $msj = "<div class='alert alert-danger rol='alert' > Error al eliminar pedido. </div> ";
    }
  }

?>
<!DOCTYPE html>
 <html>

<head>
    <meta charset="UTF-8" />
    <title>Lista de pedidos </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
   <?php include('menu.php') ?>
   <div class="container">
     <h2 class= 'text-center mt -5'> Lista de pedidos <h2>

    <div class='row'>
        <?php
        while ($patient = mysqli_fetch_object($allPatients)){
            $input = $patient->sessionDate;
            echo2"<div class='col' >";
            echo"<div class='border border-info p-2'>";
            echo"<h5>
                     <img src='".ROOT."/images/$patient->image' width='50' height ='50' />
                     $patient->firstime $patient->lastname
                </h5>";
            echo " <p> <b>Fecha:</b> " .date("D", strtotime($input)) ." " . date("d-M-Y H:i", strtotime($input))." </p> ";
            echo " <div class= 'text-center' ><a class='btn btn-success 'href= '" . ROOT . " /Patients/edit.php?id=$patient->id' > Modificar </a> - <a class='btn btn-danger ' href=' "
            echo " </div> ";
            echo "</div> ";
         }
        ?>
    </div>
    
  </div>
</body>

</html>