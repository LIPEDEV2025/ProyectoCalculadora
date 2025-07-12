<?php 
if($_POST){
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];
    switch($operacion){
        case "suma": 
            $resultado = $num1 + $num2;             
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
    }   
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body >
    <div class="container mt-5">        
        <form action="index.php" method="post" style="max-width: 480px; margin: auto;" class="rounded shadow p-4">
            <h4 class="text-center">Calculadora</h4>
            <div class="mb-3">
                <label for="" class="form-label">Numero1</label>
                <input
                    type="number"
                    class="form-control"
                    name="numero1"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Ingrese el primer numero"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Numero1</label>
                <input
                    type="number"
                    class="form-control"
                    name="numero2"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Ingrese el primer numero"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Operacion</label>
                <select
                    class="form-select form-select-md"
                    name="operacion"
                    id=""
                >
                    <option selected>Selecione uno</option>
                    <option value="resta">Resta</option>
                    <option value="suma">Suma</option>                   
                </select>
                <div class="container mt-5 d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary w-50 rounded" value="calcular">
                </div>
            </div>            
        </form>
        <?php if(isset($resultado)): ?>
            <div class="container mt-5 d-flex justify-content-center">            
                <p style="font-size: 20px;">El resultado de la operacion es: <strong><?php echo $resultado ?></strong></p>
            </div>
        <?php endif;?>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>