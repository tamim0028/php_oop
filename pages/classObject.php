<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <h3>User</h3>
        </div>
        <form action="../classes/User.php" method="POST">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="mt-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" name="name" placeholder="name">
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <label for="" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" placeholder="Phone number">
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <label for="" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="address" class="form-control" name="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="image" value="img.png">
                            <!-- <input class="form-control" type="file"> -->
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
 </div>

  <div class="container  mt-5">
    <div class="d-flex justify-content-center  mt-5">
        <h3>Output</h3>
    </div>
    <div>
    <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="mt-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="name" disabled class="form-control" value="">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" disabled class="form-control" placeholder="name@example.com">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="" class="col-sm-2 col-form-label">Phone:</label>
                    <div class="col-sm-10">
                        <input type="number" disabled class="form-control" placeholder="Phone number">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="" class="col-sm-2 col-form-label">Address:</label>
                    <div class="col-sm-10">
                        <input type="address" disabled class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="mt-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-sm-10">
                        <p>image.png</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>