<?php

use Carbon\Carbon;

function tarifTotal($depart, $final, $tarif){

    if ($depart === $final){
        $result = 8 * $tarif;
    } else {
        $toDate = Carbon::parse($depart);
        $fromDate = Carbon::parse($final);

        $days = $toDate->diffInDays($fromDate);

        $result = 8 * $days * $tarif;
    }
    return $result;
}

function setUsernameAttribute($name, $role)
{
    // $firstName = $this->attributes['first_name'];
    // $lastName = strtolower($this->attributes['last_name']);

    $username = $name . "_" . $role;

    $i = 0;
    while(User::whereUsername($username)->exists())
    {
        $i++;
        $username = $name[0] . $i . $role;
    }
    return $username;
}
