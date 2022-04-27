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
    <div class="etykieta" name="box">
        <form method="post" action="print_lan.php">
      
            <h1><?php echo $_POST['name'];?></h1>
            <input type="text" name="ind" value="<?php echo $_POST['name'];?>" disabled="true">
            <img alt="testing" src="barcode.php?codetype=Code128&size=60&text=<?php echo $_POST['name'];?>&print=true" />
            <label>Liczba kopii: </label><input name="ile" type="number" min="1" value="1">
            <button name="print" type="submit" class="noPrint btn btn-danger">Drukuj</button>
        </form>
    </div>
</div>
</div>
<!-- 

^XA

^FO50,50^GFA,1575,1575,15,,J07CP0FE1FC3F83F8E08J0FCO01FE1FC3FC7F84C8J07CO018210620C6084C8J07CO018210620C60842,J07CO018210620C6084A4J07CO018210620C60802,J07CO01B61B636C6D8,J07CP0FE1FC3F83F8,J07C,:::J07CP0FE1FC3FC3F8,J07CO018210620C608,::::J07CP0FE1FC3FC3F8,J07C,:::J07CP0FE1FC3F83F8,J07CO018618630C618,J07CO018210620C608,:::J07CP0FE1FC3FC7F8,J07CP0FC0FC1F83F,J07C,::J07CP0FC0FC1F83F,J07CO01FE1FC3FC7F8,J07CO018210620C608,:::J0FCO018618630C618,J078P0FE1FC3F83F8,,:::::::::::::::::J03E,I07FFE,001JF8L022J02,007JFEL03FJ07EJ07C,00LFL03FJ07FJ07C,01FF00FF8K03FJ0FFJ0FC,03FC003FCK01FJ0FFJ0FC,07FJ0FEK01F8I0FF8I0F8,0FEJ07FK01F8I0FF8I0F8,1FCJ03F8K0F8001FF8001F8,1F8J01F8K0F8001E78001F,3FL0FCK0FC001E7C001F,3FL0FCK0FC003E7C001F,7EL07CK07C003E7C003F,7EL07EK07C003C7C003E,7CL07EK07C003C3E003E,7CL03EK07E007C3E003E,FCL03FK03E007C3E007E,FCL03FK03E00781E007C,FCL03FK03E00781F007C,FCL03FK03F00F81F007C,FCL03FK01F00F01F00F8,FCL03FK01F00F00F80F8,FCL03FK01F01F00F80F8,FCL03FK01F81F00F80F8,FCL03FL0F81E00F81F,FCL03FL0F81E007C1F,7CL03EL0F83E007C1F,7CL03EL0FC3E007C1F,7EL07EL07C3C003C3E,7EL07EL07C7C003E3E,3FL0FCL07C7C003E3E,3FL0FCL03E78003E3C,1F8J01F8L03E78001E7C,1FCJ03F8L03EF8001F7C,0FCJ07FM03EF8001F7C,07FJ0FEM01FFJ0FF8,03F8001FEM01FFJ0FF8,03FF00FFCM01FFJ0FF8,00LF8M01FFJ0FF8,007JFEO0FEJ07F,001JF8O0FEJ07F,I07FFEP0FEJ07F,J07EQ0FCJ07E,^FS

^FX Top section with logo, name and address.
^CF0,60
^FO220,50^FDIOW SERVICE SP. Z O.O.^FS
^CF0,30
^FO220,115^FDKochlice, ul. Lubinska 1C^FS
^FO220,155^FD59-222 Milkowice^FS
^FO50,190^GB700^FS
^FX Second section with recipient address and permit information.
^CF0,100
^FO40, 220^FD  INDEX IOW ^FS
^FO100,320^BY7
^BCN,200,Y,N,N
^FD123456^FS
^XZ -->