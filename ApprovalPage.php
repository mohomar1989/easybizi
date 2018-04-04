<?php
session_start();
if (!isset($_SESSION['login_user']))
    header("Location: Index.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="css/custom.css" rel="stylesheet"/>
        <link href="css/datatables.min.css" rel="stylesheet"/>
        <link href="css/sweetalert.css" rel="stylesheet"/>
        <link href="css/theme-default.css" rel="stylesheet"/>

    </head>
    <body>
        <div class="container col-12">
            <br>
     <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Product Approval</li>
  </ol>
</nav>
       
                <div class="col-12">
                    <div class="card mt-2">
                        <div class="card-header ">Pending Products</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="products1" class="table table-striped table-bordered small"  style="width:100%">
                                    <thead>
                                        <tr>
                                            <th >ID</th>
                                            <th >Title</th>
                                            <th >Price</th>
                                            <th>Payment Method</th>
                                            <th>Availability</th>
                                            <th>Images</th>
                                            <th>Approve</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/datatables.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/jquery.form.min.js"></script>
     

    </body>
</html>
