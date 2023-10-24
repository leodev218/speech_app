<?php
require_once '../../database/db_user.php';





$conectar=conn();


            $query= mysqli_query($conectar,"SELECT userName,userNickName,userSaveText,userState,userId FROM user");
            $values=[];

            while($row = $query->fetch_assoc())
            {
                    $value=[
                        'nombre' => $row['userName'],
                        'nombreUsuario' => $row['userNickName'],
                        'guardar' => $row['userSaveText'],
                        'estado' => $row['userState'],
                        'id' => $row['userId'],
                    ];

                    array_push($values,$value);

            }
            $row=$query->fetch_assoc();
            //echo json_encode($students) ;
            echo json_encode(['usuarios'=>$values]);

?>
