<?php
$kolommen = 10;
$rijen = 20 ;
$teller=0;


if ($rijen < 1 or $kolommen < 1) {
    print "Je moet minimaal 1 rij en kolom hebben.";
} else {
        print "<h2>Een dynamische tabel</h2>";
        print"Deze tabel heeft $kolommen kolommen en $rijen rijen.";
        print "<table style ='border-collapse: collapse'>";

        for($y=1;$y<=$rijen;$y++){                          // herhaal zo vaak als er rijen zijn
           if($y%2 != 1){
               print "<tr style='background-color: yellow ; color : black'>";
           }else{
               print "<tr style='background-color: black ; color:yellow'>";
           }

                    for($x=1;$x<=$kolommen;$x++){
                         $teller++;
                            print "<td>$teller</td>";
    }
        print "</tr>";

            }
    print "</table>";



}