<?php

$ch = curl_init();              // -> 1st 

$url = "https://reqres.in/api/users?page=2";

curl_setopt($ch,CURLOPT_URL,$url);              // -> 2st 
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$resp = curl_exec($ch);                     // -> 3st 

if($e=curl_error($ch)){
    echo $e;
}else{
    $decoded=json_decode($resp);
    // $decoded=json_decode($resp,true);
    // print_r($decoded);                               // for printing response from api
    // curl_close($ch);

    $user_data = $decoded->data;

// Extract only first 5 user data (or 5 array elements)
    $users = array_slice($user_data, 0, 10);


// Traverse array and print employee data
    foreach ($users  as $user) {
        echo "id: ".$user->id;
        echo "<br/>";
        echo "firsy name: ".$user->first_name;
        echo "<br />";
        echo "last name: ".$user->last_name;
        echo "<br />";
        echo "<br />";
        echo "<br />";
}

}

?>