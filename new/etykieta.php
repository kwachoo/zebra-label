<?php require_once("header.php"); ?>
<div class="container d-flex flex-wrap pt-5">
    <div class="col-6">
        <h2>Generator etykiet</h2>
<hr>
    <div class="info">
        <p><strong>Konfiguracja drukarki</strong></p>
        
            IP: <b>192.160.0.73</b><br/>
            PORT:<b>9100</b>
 <hr>
    </div>
    <div class="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>Wprowadź numer: </h3>
            <input type="text" name="name">
            <button class="btn btn-success" type="submit">Generuj etykietę</button>
        </form>
    </div>
</div>
<div class="col-6">
    <h3>Wygenerowana etykieta</h3>
    <div class="etykieta">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1><?php echo $_POST['name'];?></h1>
            <img alt="testing" src="barcode.php?codetype=Code128&size=60&text=<?php echo $_POST['name'];?>&print=true" />
            <label>Liczba kopii: </label><input type="number" min="1" value="1">
            <button onclick="window.print();" class="noPrint btn btn-danger">Drukuj</button>
        </form>
    </div>
</div>
</div>

