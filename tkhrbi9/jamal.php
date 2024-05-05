<?php
// Date du jour
$date_du_jour = time();

// Date du 27/10/1970 en secondes
$date_1970 = strtotime('1970-10-27');

// Calcul du nombre de jours
$jours_difference = ($date_du_jour - $date_1970) / (60 * 60 * 24);

// Affichage du résultat
echo "Le nombre de jours entre aujourd'hui et le 27/10/1970 est : $jours_difference jours.";

// Nombre de jours dans le mois de février de l'année 2000
$jours_fevrier_2000 = cal_days_in_month(CAL_GREGORIAN, 2, 2000);

// Affichage du résultat
echo "Le nombre de jours dans le mois de février de l'année 2000 est : $jours_fevrier_2000 jours.";

// Date actuelle
$date_actuelle = time();

// Date dans 332 jours
$date_dans_332_jours = strtotime('+332 days', $date_actuelle);
$jour_dans_332_jours = date('l', $date_dans_332_jours);

// Date dans le passé de 332 jours
$date_dans_le_passe = strtotime('-332 days', $date_actuelle);
$jour_dans_le_passe = date('l', $date_dans_le_passe);

// Affichage du résultat
echo "Dans 332 jours, nous serons un $jour_dans_332_jours.";
echo "Dans le passé de 332 jours, nous étions un $jour_dans_le_passe.";





?>
