
<?php


$url="http://127.0.0.1:8000/assignment";
$data_array=array(

    "assid"=>3,
    "end_year"=> 2022,
    "intensity"=> 6,
    "sector"=> "Energy",
    "topic"=> "oil",
    "insight"=> "Ecological impacts of palm oil expansion in Indonesia",
    "url"=> "http=>//www.theicct.org/sites/default/files/publications/Indonesia-palm-oil-expansion_ICCT_july2016.pdf",
    "region"=> "South-Eastern Asia",
    "start_year"=> 2012,
    "impact"=> "svdfhb",
    "added"=> "2012-09-04 06=>00=>00.000000-08=>00",
    "published"=> "2012-09-04 18=>00",
    "country"=> "Indonesia",
    "relevance"=> 2,
    "pestle"=> "Industries",
    "source"=> "theicct",
    "title"=> "One-third of new oil palm plantations in Indonesia and Malaysia will be established on peat soils.",
    "likelihood"=> 3
);

$data=http_build_query($data_array);
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$resp=curl_exec($ch);

print_r($resp);
if($e=curl_error($ch)){
    echo $e;
}
// else{
//     $decoded=json_decode($resp);
//     foreach($decoded as $key=>$val){
//         echo $key," : ".$val."<br>";
//     }
// }
curl_close($ch);  
?>