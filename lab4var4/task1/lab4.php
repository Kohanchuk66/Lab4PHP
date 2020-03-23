
<?php
	//print_r($_POST);
    function reverse( $str, $num = 0 ){
        if( $num != strlen( $str ) - 1 ){
            reverse( $str, $num + 1 );
        }
        echo $str[ $num ];
        return;
    }
    reverse( $_POST['array'] );
?>