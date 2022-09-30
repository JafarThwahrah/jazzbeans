<?php include_once "./php/conn.php"; ?>


<?php include_once "methods.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jazz Beans - Profile</title>
    <?php include_once "header.php"; ?>

<body class="mt-5">

    <?php
    $userID = $_SESSION["id"][0];
    $sql = "SELECT `name` , `address` , `phone` , `email` , `pwd` , `img` ,`dob` FROM users_info WHERE id = :usrID";

    $query = connect()->prepare($sql);
    $query->bindParam(':usrID', $userID, PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result) {

    ?>


        <form name=" editForm" action="000" id="editForm" method="POST">


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(5px);">
                        <div class="modal-header">
                            <h3 class="modal-title text-black text-white " id="exampleModalLabel">Edit Personal Informations</h3>
                            <hr>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="usrname" value="<?php echo ($result->name); ?>" id="username" placeholder="username">
                                <label for="username">Full Name</label>
                            </div>



                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" value="<?php echo ($result->email); ?>" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>

                            <div class="form-floating">
                                <input type="password" class="form-control" value="<?php echo ($result->pwd); ?>" name="pass" id="password" placeholder="Password">
                                <label for="password">New Password</label>
                            </div>

                            <div class="form-floating mt-3">
                                <input type="date" class="form-control" name="dob" value="<?php echo ($result->dob); ?>" id="dob" placeholder="Date of birth">
                                <label for="cpassword">Date of birth</label>
                            </div>

                            <div class="mt-2">
                                <label for="photo" class="form-label">Personal Photo</label>
                                <input class="form-control" value="<?php echo ($result->img); ?>" name="photo" type="file" id="photo">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a value="edit" type="submit" name="editFormBtn" id="editFormBtn" class="btn btn-primary" href="updateuser.php?id=<?php $userID; ?>">edit</a>

                        </div>
                    </div>
                </div>
            </div>

        </form>



        <!-- END nav -->






        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 text-dark" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px);">
                        <div class="card-body text-center">
                            <img src="<?php echo ($result->img); ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3 text-white   "><?php echo ($result->name); ?></h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary btn-outline-primary mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</button>
                                <a href="register/includes/logout.inc.php?id=<?php echo $_SESSION["id"][0]; ?>"><button type="button" class="btn btn-danger btn-outline-danger mx-1" onclick="">Logout</button></a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4 text-white" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo ($result->name); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo ($result->email); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo ($result->pwd); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date of birth</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo ($result->dob); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">phone number</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo ($result->phone); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo ($result->address); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        <?php
    }
        ?>







        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 mb-md-0" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px); min-height:auto;">
                    <div class="card-body">
                        <h3>Orders History</h3>
                        <hr />
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead class="text-white">
                                    <th>Order Number</th>
                                    <th>invoice Number</th>
                                    <th>Order date</th>
                                    <th>Total Price</th>

                                </thead>
                                <tbody>

                                    <?php

                                    $sql = "SELECT * FROM `invoice` WHERE `user_id` = :usrID";
                                    $query = connect()->prepare($sql);
                                    $query->bindParam(':usrID', $userID, PDO::PARAM_INT);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($results as $result) {

                                    ?>


                                        <!-- Display Records -->
                                        <tr class="text-white">
                                            <td class="text-white"><?php echo ($result->id); ?></td>
                                            <td class="text-white"><?php echo ($result->invoice_num); ?></td>
                                            <td class="text-white"><?php echo ($result->currentdate); ?></td>
                                            <td class="text-white"><?php echo ($result->total_price); ?>$</td>

                                        </tr>



                                    <?php
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <?php include_once "footer.php"; ?>
</body>