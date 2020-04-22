<?php
        function calculePourcentage(array $arr , $module){

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

        function afficheNotes(array $arr){
        echo     "<table>
                      <tbody> ";
            foreach($arr as $row)
            {
                echo "<tr class=\"row\">";

                foreach ($row as $key => $value) {
                    if( is_int($key) )
                    continue ;
                    if($key === 'nom'){
                        echo  "<td class=\"names\">".$value."</td>";
                    }
                    else {
                        echo "<td>".$value."</td> ";
                    }
                }
                echo " </tr>";
            }
        echo "                </tbody>
                        </table>";
        }

