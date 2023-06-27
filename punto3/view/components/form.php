
<?php include "./controller/calculationcontroller.php"; ?>

<form method="post">

<h2>Mayor de edad</h2>
    <div class="form__row">
    <div>
        <label for="name">Nombres:</label>
        <input id="name"
         type="text"
         name="name"
         placeholder="500"
         >
    </div>

   <div>
    <label for="birth-Date">fecha de nacimiento:</label>
        <input id="birth-Date"
         type="date"
         name="birth_Date"
         placeholder="700"
         >
         </div>
    </div>

<button>Sumar</button>

</form>