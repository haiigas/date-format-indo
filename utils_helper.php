<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function format_date_indo($date)
{
    date_default_timezone_set('Asia/Jakarta');

    // Days and months in Indonesian
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    $months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    // Extract components from the datetime string
    $year = substr($date, 0, 4);
    $month = substr($date, 5, 2);
    $day = substr($date, 8, 2);
    $time = substr($date, 11, 5);
    $weekday = date("w", strtotime($date));

    // Format the result
    $formatted = $days[$weekday] . ", " . $day . " " . $months[(int)$month - 1] . " " . $year . " " . $time;

    return $formatted;
}
