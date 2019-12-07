<?php
    $serverName = "carpel_server"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"Carpel", "UID"=>"sa", "PWD"=>"Zz123456", "CharacterSet" => "UTF-8");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn ) {
		// echo "ok";
	}else{
		//echo "err<br><br><hr><br>";
		//die( print_r( sqlsrv_errors(), true));
	}


	$sql = "SELECT * FROM t_products";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query( $conn, $sql , $params, $options );

	print_r(sqlsrv_fetch_array( $stmt));
    $row_count = sqlsrv_num_rows( $stmt );


        if ($row_count === false){
           //echo "/ ok /";
        }else{
           //echo "/ error / ";
        //echo $row_count;
		}
        while( $row = sqlsrv_fetch_array( $stmt) ) {
              print json_encode($row);
        }

    sqlsrv_close($conn);