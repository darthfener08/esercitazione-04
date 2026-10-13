<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Dati Auto</title>
</head>
<body>

   <?php

        $marca = $_POST["marca"];
        $modello = $_POST["modello"];
        $stato = $_POST["stato"];
        $anno = $_POST["anno"];
        $cilindrata = $_POST["cilindrata"];
        $cavalli = $_POST["cavalli"];
        $prezzo = $_POST["prezzo"];
        $targa = $_POST["targa"];
        $descrizione = $_POST["descrizione"];

        echo "<b>Marca:</b> " . $marca . "<br>";
        echo "<b>Modello:</b> " . $modello . "<br>";
        echo "<b>Stato:</b> " . $stato . "<br>";
        echo "<b>Anno Costruzione:</b> " . $anno . "<br>";
        echo "<b>Cilindrata:</b> " . $cilindrata . "<br>";
        echo "<b>Cavalli:</b> " . $cavalli . "<br>";
        echo "<b>Prezzo:</b> " . $prezzo . " Euro<br>";
        echo "<b>Targa:</b> " . $targa . "<br>";

        echo "<b>Accessori:</b><br>";
        echo @$_POST["Aria"] . "<br>";
        echo @$_POST["Vernice"] . "<br>";
        echo @$_POST["Cristallo"] . "<br>";
        echo @$_POST["Radio-CD"] . "<br>";

        echo "<b>Descrizione Aggiuntiva:</b> " . $descrizione . "<br>";

        
        $file = fopen("F_AUTO.DAT", "a");
        $record = "";
        $record .= $marca;
        $record .= "; ";
        $record .= $modello;
        $record .= "; ";
        $record .= $stato;
        $record .= "; ";
        $record .= $anno;
        $record .= "; ";
        $record .= $cilindrata;
        $record .= "; ";
        $record .= $cavalli;
        $record .= "; ";
        $record .= $prezzo;
        $record .= "; ";
        $record .= $targa;
        $record .= "; ";
        $record .= "\n";
        
        fwrite($file, $record);
        fclose($file);
?>

</body>
</html>