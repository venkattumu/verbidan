<?php 
    if(isset($_POST['submit'])){
        


        $name = $_POST['name'];
        $email = $_POST['email'];

        if(isset($_POST['singing'])){
            $singing = "Singing, ";
        }
        if(isset($_POST['dancing'])){
            $dancing = "Dancing, ";
        }
        if(isset($_POST['indoor'])){
            $indoor = "Indoor Games, ";
        }
        if(isset($_POST['outdoor'])){
            $outdoor = "Outdoor Games, ";
        }
        if(isset($_POST['others'])){
            $others = "others, ";
        }

        $hobbies = '';

        if(isset($singing) || isset($dancing) || isset($indoor) || isset($outdoor)|| isset($others) ){
            $hobbies .= $singing . $dancing . $indoor . $outdoor . $others;
            if(isset($dancing) && isset($indoor) && isset($outdoor) && isset($others) ){
                $hobbies .= $dancing . $indoor . $outdoor . $others;
                if(isset($indoor) && isset($outdoor) && isset($others) ){
                    $hobbies .= $indoor . $outdoor . $others;
                    if(isset($outdoor) && isset($others) ){
                        $hobbies .= $outdoor . $others;
                        if(isset($others) ){
                            $hobbies .=  $others;
                        }
                    }
                }
            }
        }
     
        // if(strlen($_POST['comment']) <= 100){
        //     $error = "comment length should not be lessthan 100 characters";
           
        // }
        // else {
            $comment = $_POST['comment'];
            
            $con = mysqli_connect('localhost', 'root', '', 'verbidan');

            $sql = "INSERT INTO `data`(`id`, `name`, `email`, `hobbies`, `comments`)
                    VALUES (null, '$name', '$email', '$hobbies', '$comment')";
            if(mysqli_query($con, $sql)){
        
                header('Location: data.php');
            } else {
                echo "data not submitted";
            }
        // }
                



        // echo $hobbies;  
        
        // if(isset)



    }
?>

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
        <h1 class="display-4">Verbidan Task</h1>                    
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-12 bg-dark">
                <form class="p-5 text-light" id="courseInputForm" method="post" action="#" enctype="multipart/form-data">
                    <h3 class="text-info mb-4">Task Form</h3>
                    <div class="form-group">
                      <label for="Sname" > Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocusout="myFunction()" required>
                      <span id="nameInput" class="text-success"></span>
                    </div>
                    <script>
                        function myFunction() {
                        var x = document.getElementById("name");
                        var val = document.getElementById("nameInput"); 
                        val.innerHTML = "Welcome To Our Site " + x.value;
                        }
                    </script>
                  
                    <div class="form-group">
                        <label for="Cname" >Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" onfocusout="myFunc()" required>
                        <span id="emailInput" class="text-success"></span>
                    </div>
                    <script>
                        function myFunc() {
                        var x = document.getElementById("email");
                        var val = document.getElementById("emailInput"); 
                        val.innerHTML = "So You Use " + x.value + ", Nice!";
                        }
                    </script>

                    <div class="form-group">
                        <label for="Cname" >Hobbies</label>                  
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="singing">
                        <label class="form-check-label" for="exampleCheck1">Singing</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="dancing">
                        <label class="form-check-label" for="exampleCheck1">Dancing</label>
                    </div> 
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="indoor">
                        <label class="form-check-label" for="exampleCheck1">Indoor Games</label>
                    </div>                    
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="outdoor">
                        <label class="form-check-label" for="exampleCheck1">Outdoor Games</label>
                    </div> 
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="others">
                        <label class="form-check-label" for="exampleCheck1">others</label>
                    </div> 
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="comment" rows="2" name="comment"> Enter Your Comment</textarea>
                        <span class="text-danger"><?php if(isset($error)){echo $error; } ?></span>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>        
        </div>
    </div>
    


    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



