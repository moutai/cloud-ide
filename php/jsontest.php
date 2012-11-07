<?php

$data = file_get_contents('http://www3.septa.org/hackathon/Alerts/');

$madeupdata= '{
            "Rides": [
            {
                "route_id":"bus_route_1",
                "route_name":"1","mode":"Bus",
                "isadvisory":"No",
                "isdetour":"N",
                "isalert":"N",
                "issuppend":"N",
                "last_updated":"Oct 30 2012  6:03PM"
            },
            {
                "route_id":"bus_route_2",
                "route_name":"2",
                "mode":"Bus",
                "isadvisory":"No",
                "isdetour":"N",
                "isalert":"N",
                "issuppend":"N",
                "last_updated":"Oct 30 2012  6:03PM"
            } 
        ]
    }
';

$jheader = '{
            "Rides": ';
$jfooter = '}';
 
$newdata= $jheader . $data . $jfooter;

//echo $newdata;


$json = '{
    "Product": [
        {
            "Product_Title": "Cloth",
            "Product_Description": "Here is cloth",
            "Price": "100",
            "Category_ID": "1"
        },
        {
            "Product_Title": "Cloth",
            "Product_Description": "Here is cloth",
            "Price": "100",
            "Category_ID": "1"
        },
        {
            "Product_Title": "Cloth",
            "Product_Description": "Here is cloth",
            "Price": "100",
            "Category_ID": "1"
        }
    ]
}
';

//echo $newdata;
$json_decoded = json_decode($json);
$septa_decoded = json_decode($newdata);

echo $json_decoded->{'Product'}[1]->{'Product_Title'};
echo $septa_decoded->{'Rides'}[1]->{'route_id'};

// Note, it's usually a bad idea to use use count() like this;
// cache the count before the for() in a variable and use that.
// This is for demo purposes only. :)

//for ($i = 0; $i < 4count($json_decoded->{'Product'}); $i++) {

//for ($i = 0; $i < 4; $i++) {
 //   echo "Rides: <br>
   // " . $json_decoded . "
//    <br>";
//}
    //" . $json_decoded->{'rides'}[$i]->{'ride_id'} . "


?>