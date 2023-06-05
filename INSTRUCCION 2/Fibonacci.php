<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .serie-fibonacci{
            width:100%;
            display:flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .f-item{
            width:Calc(10% - 30px);
            margin: 15px;
            background-color:#f3f3f3;
            text-align: center;
            
        }
        
    </style>
</head>
<body>
    

<div class="container text-center">
    <h1 class"my-5">Serie de fibonacci</h1>

    <form action="Fibonacci.php" method="POST">

    <div class="form-group">
    <label for="num_fibonacci">Número de fibonacci</label>
    <input type="text" class="form-control" id="num_fibonacci" name="num_fibonacci" placeholder="Número aqui:">
  </div>


  <div class="form-group">
        <button type="submit" class="btn btn-primary">Imprimir serie</button>

  </div>

    </form>
</div>


<?php


    $fibonacci = array(0, 1);

    $numFibonacci = 0;

    if(isset($_POST['num_fibonacci'])){

        $numFibonacci = $_POST['num_fibonacci'];
    }

    if($numFibonacci > 0){
        for($i = 2; $i < $numFibonacci; $i++){
            $fibonacci[] = $fibonacci[$i -1] + $fibonacci[$i -2];
        }
    }


?>

<h2 class="my-3 text-center">Num Fibonacci: <?php echo $numFibonacci ?> </h2>

<div class="Serie-fibonacci">

    <?php
        foreach($fibonacci as $item){
            ?>
            <div class="f-item"><?php echo $item ?> </div>
            <?php
        }
    ?>

</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>