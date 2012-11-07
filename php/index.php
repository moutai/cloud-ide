
<?php
 $data = file_get_contents('http://www3.septa.org/hackathon/Alerts/');
 
 //$jheader = '{"rides":';
 //$jfooter = '}';
 
//$newdata= $jheader . $data . $jfooter;
// 
$newdata ='{
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
        }';


//echo $newdata;
$json = json_decode($newdata,true);
echo $json;
 
//var_dump( $data );
//
//echo $json->route_id
 
//foreach($json->rides as $item)
//{
    //if($item->mode == "")
    //{
  //      echo $item ;
    //    echo '<br><br>';
    //}
//}
 
?>