<?php

class table
{
    function setTable(array $columns,array $rows)
    {
        $start = "<div style=\"overflow-x:auto;\"><table>";
        $end = "</table></div> ";
        $elementColumns = "<tr>";
        $elementRow = "";

        foreach ($columns as $column){
            $elementColumns .= "<th>".$column."</th>";
        }
        $elementColumns .= "</tr>";

        $keys = array_keys($rows);
        for($i = 0; $i < count($rows); $i++) {
            $elementRow .= "<tr>";
            foreach($rows[$keys[$i]] as $key => $value) {
                $elementRow .= "<td>".$value."</td>";
            }
            $elementRow .= "</tr>";
        }

        echo $start.$elementColumns.$elementRow.$end;
    }
}
