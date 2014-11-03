<?php

    class DateTool {

        public static function simpleDateToFr($date) {
            $dateFr = date("d-m-Y H:i:s", strtotime($date));
            return $dateFr;
        }

        public static function dateFrWithMonth($date) {
            $dateFr = date_create($date);
            $mois = date_format($dateFr, "m");

            switch($mois) {
                case "01" :
                    $moisFinal = "Janvier";
                    break;
                case "02" :
                    $moisFinal = "Février";
                    break;
                case "03" :
                    $moisFinal = "Mars";
                    break;
                case "04" :
                    $moisFinal = "Avril";
                    break;          
                case "05" :
                    $moisFinal = "Mai";
                    break;
                case "06" :
                    $moisFinal = "Juin";
                    break;
                case "07" :
                    $moisFinal = "Juillet";
                    break;
                case "08" :
                    $moisFinal = "Août";
                    break;
                case "09" :
                    $moisFinal = "Septembre";
                    break;
                case "10" :
                    $moisFinal = "Octobre";
                    break;
                case "11" :
                    $moisFinal = "Novembre";
                    break;
                case "12" :
                    $moisFinal = "Décembre";
            }
             
            return date_format($dateFr, " d ".addcslashes($moisFinal, "A..z")." Y ");
        }

        public static function dateFrWithMonthAndHour($date) {
            $dateFr = date_create($date);
            $mois = date_format($dateFr, "m");

            switch($mois) {
                case "01" :
                    $moisFinal = "Janvier";
                    break;
                case "02" :
                    $moisFinal = "Février";
                    break;
                case "03" :
                    $moisFinal = "Mars";
                    break;
                case "04" :
                    $moisFinal = "Avril";
                    break;          
                case "05" :
                    $moisFinal = "Mai";
                    break;
                case "06" :
                    $moisFinal = "Juin";
                    break;
                case "07" :
                    $moisFinal = "Juillet";
                    break;
                case "08" :
                    $moisFinal = "Aout";
                    break;
                case "09" :
                    $moisFinal = "Septembre";
                    break;
                case "10" :
                    $moisFinal = "Octobre";
                    break;
                case "11" :
                    $moisFinal = "Novembre";
                    break;
                case "12" :
                    $moisFinal = "Décembre";
            }
             
            return date_format($dateFr, " d ".addcslashes($moisFinal, "A..z")." Y à H \h i \m s \s");
        }

        public static function simpleDateUs($date) {
            $dateUs = date_create($date);
            return date_format($dateUs, "Y-m-d");

        }
}





    


?>