<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verbidan Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body onload="fetchDetail()">

    <div class="jumbotron container mt-3 bg-info text-light text-center">
        <h1 class="display-4">Data Display </h1>                    
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-12 ">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-danger">
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">HObbies</th>
                    <th scope="col">comment</th>
                    </tr>
                </thead>
                <tbody>
<?php 
        $con = mysqli_connect('localhost', 'root', '', 'verbidan');
        $sql = "SELECT * FROM data";
        $result = mysqli_query($con, $sql);
        while($data = mysqli_fetch_array($result)){
            
            $hob = $data['hobbies'];
            // $out = implode(", ", $hob);
            $out = preg_split( "/[,]+/", $hob );

            
         
            echo '   <tr>
                        <th>'. $data['name'].'</th>
                        <td>'. $data['email'].'</td>';?>
                        <td>
                        <?php  foreach ($out as  $value) {
                                echo '<o1><li>'.$value  ."</li></ol>";
                                 }?></td> <?php 
                       echo  '<td>'. $data['comments'].'</td>
                    </tr> ';
        }

                
           ?>                         
                </tbody>
            </table>
            </div>        
        </div>
    </div>
    


    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>