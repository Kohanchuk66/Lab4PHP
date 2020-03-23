<?php
    $ans = 0;
    $find = $_POST['symbol'];

	$fp = fopen("lab4.txt", "r");
    if ($fp){
        while (!feof($fp)){
            $str = fgets($fp);
            $k = strlen($str)-1;
            if(ord ($str[$k] ) < 33)
                $end = $str[ $k-2 ];
            else{
                 $end = $str[ $k ];
            }

            if( $find == $end ){
                $ans++;
            }

        }

    }
    else echo "Error";
    echo 'Співпадінь '.$ans;
    fclose($fp);
?>