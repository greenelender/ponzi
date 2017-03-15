<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../dashboard/content/index.css">

    <title>Dash Board</title>
    <?php
include  ('navbar.php');
?>
<style>

</style>
<div class="container">
<div class="dashboard row">
    <div class="col-lg-4 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="large"><h2>Your Earnings</h2></div>
                        <div>N0.00</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href=""> Current Amount Availiable In Your Wallet</a> </span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-8">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class=""><h3>Account Summary</h3><br/></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View   All Transactions</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-8">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><h2>Support Tickets</h2></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Open a support ticket.</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
     <div class="row">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Hello joe welcome to {{Web site name}}, Thank you for registering with us. Your account and has been successfully created.
            Please update your profile by clicking <a href="#" class="alert-link">Here </a>.
     </div>
</div>
<section class="dashboard-control">
    <h4>Dashboard<hr/></h4>
    <div class="row">
    <div class="col-sm-6 profile text-center">
        <img class="img-circle" src="../img/users-icon/profile-icon.png">
        <h2 class="username">Joe easy</h2>
        <h5><i class="fa fa-phone fax"></i> 07059972180 </h5>
        <h5><i class="fa fa-user fax"></i> Username: joeeasy44 </h5>
        <h5><i class="fa fa-envelope fax"></i> joeokpus@gmail.com </h5>
        <p><a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> Edit your basic info</a>
            <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> Edit your basic info</a> </p>
      </div>

    </div>

</section>
</div>
    </div>

</body>
</html>
