<?php

$ch = curl_init();

$url="http://127.0.0.1:8000/assignment";

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  // for get  
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

$resp=curl_exec($ch);
// print_r($resp);

$decoded=json_decode($resp);
// $datas=$decoded->data;
$datas=$decoded;
$users=array_slice($decoded, 0, 10);

foreach($users as $user){
    // echo "assid: ".$user->assid;
    echo "<br/>";
    echo "end_year: ".$user->end_year;
    echo "<br/>";
    echo "intensity: ".$user->intensity;
    echo "<br/>";
    echo "sector: ".$user->sector;
    echo "<br/>";
    echo "topic: ".$user->topic;
    echo "<br/>";
    echo "insight: ".$user->insight;
    echo "<br/>";
    echo "url: ".$user->url;
    echo "<br/>";
    echo "<br/>";

}


curl_close($ch);

?>