<?php

function modulePourcentage(array $arr , $module){

     $nbrV=$nbrNV=$nbrAJ=0;
    foreach($arr as $row)
    {
        if($row[$module]>10)  $nbrV++;
        elseif($row[$module]>5)  $nbrNV++;
        else  $nbrAJ++;

    }

    $total=$nbrV+$nbrNV+$nbrAJ;

    $PV=$nbrV*100/$total;
    $PNV=$nbrNV*100/$total;
    $PAJ=$nbrAJ*100/$total;
    
    return [ $PV, $PNV, $PAJ ];
}


function AnnéePourcentage(array $arr){

    $nbrV = $nbrNV = $nbrAJ = 0 ;
   foreach($arr as $row)
   {
       if($row['moyenneGenerale']>10)  $nbrV++;
       elseif($row['moyenneGenerale']>5)  $nbrNV++;
       else  $nbrAJ++;

   }

   $total=$nbrV+$nbrNV+$nbrAJ;

   $PV=$nbrV*100/$total;
   $PNV=$nbrNV*100/$total;
   $PAJ=$nbrAJ*100/$total;
   
   return [ $PV, $PNV, $PAJ ];
}

function afficheNotes(array $arr){
echo     "<table>
            <thead>
                <tr>
                    <th>Code Apogee</th>
                    <th>Nom</th>
                    <th>prenom</th>
                </tr>
            </thead>
            <tbody> ";

    foreach($arr as $row)
    {

echo    "<tr id=".$row['codeApogee']." class=\"row\">
        
            <td>".$row['codeApogee']."</td>
            <td class=\"names\">".$row['nom']."</td>
            <td>".$row['prenom']."</td>

        </tr>";
    }
echo "          </tbody>
        </table>";
}

