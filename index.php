<?php require_once("header.php"); ?>
<div class="container d-flex flex-wrap pt-5">
    <div class="col">
        <h2>Generator etykiet</h2>
<hr>
    <div class="info">
        
    </div>
    <div class="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>Wprowadź numer: </h3>
            <input type="text" name="name">
            <button class="btn btn-success" type="submit">Generuj etykietę</button>
        </form>
    </div>
</div>
<div class="col">
    <h3>Wygenerowana etykieta</h3>
    <div class="etykieta" name="box">
        <form method="post" action="print_lan.php">
        <p><strong>Wybierz drukarkę</strong></p>
        
            <select name="zebra">
                <option>E1</option>
                <option>E2</option>
            </select>


 <hr>
            <h1><?php $k = $_POST['name']; echo $k?></h1>
            <input type="text" name="ind" value="<?php echo $k?>">
            <img alt="testing" src="barcode.php?codetype=Code128&size=60&text=<?php echo $_POST['name'];?>&print=true" />
            <label>Liczba kopii: </label><input name="ile" type="number" min="1" value="1">
            <button name="print" type="submit" class="noPrint btn btn-danger">Drukuj</button>
        </form>
    </div>
</div>
</div>


<?php require_once("footer.php"); ?>