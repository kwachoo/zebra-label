<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .etykieta{
                width: 8cm;
                height: 5cm;
                text-align: center;
                border: 1px solid black;
            }
            .etykieta img{
                width: 80%;
            }
            @page {margin: 0 !important; }
        @media print {
            .noPrint{
                display:none;
            }
            .etykieta{
                width: 300px;
                height: 188px;
                text-align: center;
                border: 1px solid black;
            }
            .etykieta img{
                width: 100%;
                height: 60%;
                margin-left: 10px;
                margin-right: 10px;
            }
            }
            
    </style>
</head>
<body>
    
<?php if(isset($_POST['generuj'])) {
	$kod = $_POST['name'];
    ?>
    <div class="etykieta">
        <h1><?php echo $kod;?></h1>
        <img alt="testing" src="/barcode.php?codetype=Code128&size=60&text=<?php echo $kod;?>&print=true" />
        <button onclick="window.print();" class="noPrint">Drukuj</button>
<a  class="noPrint" href="index.html"><button>Drukuj kolejną etykietę</button></a>
    </div>

<?php } 
else { header("Location: index.html"); } ?>
	
</body>
</html>
