
<?php
	//print_r($_POST);
    function reverse( $str, $num = 0 ){
        if( $num != strlen( $str ) - 1 ){
            reverse( $str, $num + 1 );
        }
        echo $str[ $num ];
        return;
    }
    if( $_POST['array'][ strlen( $_POST['array'] ) - 1  ] == '0'){
        reverse( $_POST['array'] );
    }
    else{
        echo 'Масив не закінчується 0';
    }
    echo'<form name="inputArray" action="index.html" method="post">
    		<button name="input">Повернутись</button>
    	</form>';
?>
