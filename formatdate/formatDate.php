<?php

function formatDate(string $date, string $type=''): string {

    $month = ['Janeiro', 'Fevereiro', 'Março', 'Abrir', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

    $shorMonth = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
                
    $d = date("d", strtotime($date));
    $m = $month[date("m", strtotime($date)) - 1];
    $sm = $shorMonth[date("m", strtotime($date)) - 1];
    $Y = date("Y", strtotime($date));
    $time = date("H:i:s", strtotime($date));

    switch ($type) {
        case 'date':
            return "$d $m $Y";
        case 'time':
            return "$time";
        case 'datetime':
            return "$$d $m $Y, $time";
        case 'short_datetime':
            return "$d $sm $Y, $time";
        default:
            return "$d $sm $Y";
    }
    
}