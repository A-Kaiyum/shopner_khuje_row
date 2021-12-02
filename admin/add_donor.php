<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Donor::Add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body class="">

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3 class="panel-title">Donor Registration</h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="controller/DonorController.php" role="form" method="post">
                                <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                                <div class="form-group">
                                    <label class=" control-label">Name</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="example-address">Address</label>
                                    <div class="">
                                        <input type="text" id="example-address" name="address" class="form-control" placeholder="Address" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="example-email">E-Mail</label>
                                    <div class="">
                                        <input type="email" id="example-email" name="email" class="form-control" placeholder="E-Mail" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" control-label">Phone</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" control-label">Donation</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="donation" placeholder="Designation" value="">
                                    </div>
                                </div>

                                <input type="hidden" name="action" value="save_donor">
                                <div class="form-group m-b-0">
                                    <div class="">
                                      <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                  </div>
                                <a href="javascript:history.back()">Go Back</a>
                              </div>

                          </form>
                      </div>
                  </div> 
              </div> 
          </div> 





      </div> 

  </div> 

</div>
>

</div>


</body>
<?php unset($_SESSION['message']); ?>
</html>