<?php

    //Function to get register / login information from the database
        // function getRegisterLoginInfo($username, $password) {
        //     $db = new PDO('mysql:host=localhost;dbname=login', 'root', '');
        //     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        //     $result = $db->query($sql);
        //     $result = $result->fetchAll();
        //     return $result;
        // }

        
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <title>Projet</title>
    </head>
        <body>
            <header>
                <h2>
                    Test
                </h2>

                <!--navBar -->



                <!--navBar -->


            </header>


            <main>

                <!-- Register / login Form -->
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </main>

            <footer>

            </footer>
                
        </body>

</html>