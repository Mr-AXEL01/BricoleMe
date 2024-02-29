<?php

use App\Models\User;
use Carbon\Carbon;

function tarifTotal($depart, $final, $tarif){
    
    $toDate = Carbon::parse($depart);
    $fromDate = Carbon::parse($final);

    if ($fromDate->isSameDay($toDate)){
        $result = 8 * $tarif;
    } else {

        $days = $toDate->diffInDays($fromDate) + 1;

        $result = 8 * $days * $tarif;
    }
    return $result;
}

function userName($name)
{
    if (strpos($name, ' ')) {
        $nameParts = explode(' ', $name);
        $baseUsername = strtolower($nameParts[0]) . '_' . ucfirst(strtolower($nameParts[1]));
    } else {
        $baseUsername = strtolower(str_replace(' ', '_', $name));
    }

    $username = $baseUsername . '_' . rand(1000, 9999);

    while(User::whereUsername($username)->exists())
    {
        $randomNumber = rand(1000, 9999);
        $username = $baseUsername . '_' . $randomNumber;
    }

    return $username;
}
