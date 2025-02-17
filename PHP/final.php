<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .ccit{
                color: red;
            }
            </style>
    </head>
    <body>
        <?php
        require 'config.php';
        include 'student.php';
        require_once 'student.php';
        ?>
        <h2>Application name : <?= APPLICATION_NAME ?></h2>
        <?php 
        
        /*foreach ($students as $key => $value) {
            echo "<br>";
            foreach ($value as $k => $v) {
               echo "$k $v  <br>";
            }}*/
            

            echo "<table>";
            echo "<tr>";
            echo "<td>Name</td>";
            echo "<td>E-mail</td>";
            echo "<td>Status</td>";
            echo "</tr>";
            foreach($students as $key=>$row) {
                echo "<tr>";
                foreach($row as $key2=>$row2){
                    
                    if($key2 == 'status' && $row2 == 'CCIT' ){
                       
                        echo "<td class='ccit'>" . $row2 . "</td>";
                        
                    }else{
                    
                    echo "<td>" . $row2 . "</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
        ?>
       
       
        


    </body>
</html>


        
