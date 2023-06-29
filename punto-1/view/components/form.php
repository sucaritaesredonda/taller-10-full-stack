
<?php include "./controller/calculationcontroller.php"; ?>

<form method="post">

<h2>Calculadora de sumas</h2>
    <div class="form__row">
    <div>
        <label for="first-number">primer numero</label>
        <input id="first-number"
         type="text"
         name="first_number"
         placeholder="500"
         >
    </div>

   <div>
    <label for="second-number">segundo numero</label>
        <input id="second-number"
         type="text"
         name="second_number"
         placeholder="700"
         >
         </div>

         <div>
    <label for="operation">Tipo de Operación:
    </label>
       <select name="operation" id="operation">
         <option value="A">Suma</option>
         <option value="B">Resta</option>
         <option value="C">Multiplicación</option>
         <option value="D">División</option>
        </select>

    </div>
    </div>

<button>Operar</button>

</form>