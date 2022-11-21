<?php
    include "connect.php";

    $sql = "select * from `info`";
    $result =mysqli_query($con,$sql);

    $number = 1;
    while($row = mysqli_fetch_array($result)){
        echo '
            <tr>
                <th scope="row">'.$number.'</th>
                <td>'.$row['name'].'</td>
                <td>'.$row['age'].'</td>
                <td><img src="php/image/'.$row['picture'].'" alt="" height="60" width="60"></td>
            </tr>
        ';
        $number++;
    }

?>