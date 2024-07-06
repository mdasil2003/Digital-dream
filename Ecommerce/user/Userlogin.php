<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <!-- BOOTSTARP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border-primary mt-3 rounded">

                <form action="Userlogin1.php" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Login</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter User Name:">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password:">
                    </div>


                    <button class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>

                    <button class="bg-danger fs-4 fw-bold my-3 form-control text-white "><a href="register.php"class="text-decoration-none text-white">Register</a></button>
                
            
                    


                </form>
            </div>

        </div>
    </div>

</body>

</html>