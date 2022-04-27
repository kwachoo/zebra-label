<?php
require_once("header.php");


$zebra = $_POST["zebra"];
$ip = "";
$port = 9100;
$wyslij = $_POST['print'];
$index = $_POST['ind'];
$ile = $_POST['ile'];

$label = "^XA";
$label .="^FO50,50^GFA,1575,1575,15,,J07CP0FE1FC3F83F8E08J0FCO01FE1FC3FC7F84C8J07CO018210620C6084C8J07CO018210620C60842,J07CO018210620C6084A4J07CO018210620C60802,J07CO01B61B636C6D8,J07CP0FE1FC3F83F8,J07C,:::J07CP0FE1FC3FC3F8,J07CO018210620C608,::::J07CP0FE1FC3FC3F8,J07C,:::J07CP0FE1FC3F83F8,J07CO018618630C618,J07CO018210620C608,:::J07CP0FE1FC3FC7F8,J07CP0FC0FC1F83F,J07C,::J07CP0FC0FC1F83F,J07CO01FE1FC3FC7F8,J07CO018210620C608,:::J0FCO018618630C618,J078P0FE1FC3F83F8,,:::::::::::::::::J03E,I07FFE,001JF8L022J02,007JFEL03FJ07EJ07C,00LFL03FJ07FJ07C,01FF00FF8K03FJ0FFJ0FC,03FC003FCK01FJ0FFJ0FC,07FJ0FEK01F8I0FF8I0F8,0FEJ07FK01F8I0FF8I0F8,1FCJ03F8K0F8001FF8001F8,1F8J01F8K0F8001E78001F,3FL0FCK0FC001E7C001F,3FL0FCK0FC003E7C001F,7EL07CK07C003E7C003F,7EL07EK07C003C7C003E,7CL07EK07C003C3E003E,7CL03EK07E007C3E003E,FCL03FK03E007C3E007E,FCL03FK03E00781E007C,FCL03FK03E00781F007C,FCL03FK03F00F81F007C,FCL03FK01F00F01F00F8,FCL03FK01F00F00F80F8,FCL03FK01F01F00F80F8,FCL03FK01F81F00F80F8,FCL03FL0F81E00F81F,FCL03FL0F81E007C1F,7CL03EL0F83E007C1F,7CL03EL0FC3E007C1F,7EL07EL07C3C003C3E,7EL07EL07C7C003E3E,3FL0FCL07C7C003E3E,3FL0FCL03E78003E3C,1F8J01F8L03E78001E7C,1FCJ03F8L03EF8001F7C,0FCJ07FM03EF8001F7C,07FJ0FEM01FFJ0FF8,03F8001FEM01FFJ0FF8,03FF00FFCM01FFJ0FF8,00LF8M01FFJ0FF8,007JFEO0FEJ07F,001JF8O0FEJ07F,I07FFEP0FEJ07F,J07EQ0FCJ07E,^FS";
$label .="^FX Top section with logo, name and address. \n";
$label .="^CF0,60 \n";
$label .="^FO220,50^FDCOMPANY NAME HERE^FS\n";
$label .="^CF0,30 \n";
$label .="^FO220,115^FDADDRESS HERE^FS \n";
$label .="^FO220,155^FDADDRES HERE^FS \n";
$label .="^FO50,190^GB700^FS \n";
$label .="^FX Second section with recipient address and permit information. \n";
$label .="^CF0,100 \n";
$label .="^FO40, 220^FD";
$label .=$index;
$label .="^FS \n";
$label .="^FO100,340^BY5 \n";
$label .="^BCN,200,N,N,N \n";
$label .="^FD";
$label .=$index;
$label .="^FS \n";
$label .="^XZ";
//jezeli klikniety guzik drukuj to wyslij dane do drukarki
?>

<div class="container text-center pt-5">
<?php
if(isset($wyslij)) {

    if($zebra == "e1") {
        $ip = "IP PRINT SERVER HERE";
    }
    else{
        $ip = "IP PRINT SERVER 2 HERE";
    }

    //sprawdz ile kopii
    if($ile == 1){
        try{
            $polaczenie = pfsockopen("$ip", $port);
            fputs($polaczenie, $label);
            fclose($polaczenie);
            //echo "<h1></h1>Dane wysłane do drukarki ZEBRA</h1><br/>";
            ?>
                <h1 class="display-4">Dane wysłane do drukarki ZEBRA</h1>
                <a href="index.php" class="btn btn-success">Drukuj inną etykietę</a>
            <?php
        }
        catch (Exception $e) {
            echo "Blad: ", $e->getMessage(), "\n";
        }
    }
    else{
        $a = 0;
        for($i=1; $i<=$ile; $i++) {
            try{
                
                $a = $a + 1;
            }
            catch (Exception $e) {
                echo "Blad: ", $e->getMessage(), "\n";
            }
        }
        /
        ?>
        <h1 class="display-4">Dane wysłane do drukarki ZEBRA</h1>
        <h3>Ilość kopii: <b><?php echo $a; ?></b></h3>
        <a href="index.php" class="btn btn-success">Drukuj inną etykietę</a>
        <?php
    }

}

?>
</div>