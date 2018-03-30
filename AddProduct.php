<?php session_start();

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

    </head>
    <body>

        <div class="container col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <a class="navbar-brand"><img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/2/27/Square_200x200.svg" width="50" height="50"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firstNav">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="firstNav" class="collapse navbar-collapse">

                    <ul class="navbar-nav mr-auto">
                        <li  class="nav-item">
                            <a class="nav-link" href="Profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="AddProduct.php">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RequestPage.php">Requests Page</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li  class="nav-item ">
                            <a class="nav-link" href="api/logout.php">Logout</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
            </nav>




            <form>
                <div class="card mt-2">

                    <div class="card-header">Product Information</div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group mt-2 ">

                                    <input type="text"
                                           class="form-control"
                            
                                           placeholder="Enter product title">
                                   
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <input type="number"
                                           class="form-control"
                                           
                                           placeholder="Enter product price">
                                     
                                </div>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control" 
                                         
                                          placeholder="Product Description"></textarea> 
                                <label >This field to describe product only 100 Characters is allowed 100 characters left</label>
                                
                            </div>
                        </div>
                    </div>
                </div>




                <div class="card mt-2">
                    <div class="card-header"> General information</div>
                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-6">
                                <label>Payment Method:</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control"

                                        id="exampleFormControlSelect1">
                                    <option>Cash</option>
                                    <option>Transfer/cash</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6 mt-1">
                                <label >Availability </label>
                            </div>
                            <div class="col-md-6 mt-1">
                                <select class="form-control mt-1" 
                                        id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>   
                               
                            </div>
                            
                        </div>


                    </div>
                </div>


                <div class="card mt-2">
                    <div class="card-header"> Product Photo</div>
                    <div class="card-body">


                        <div class="row">

                            <div class="col-xs-3">
                             
                            </div>
                            <div class="custom-file col-md-9 ">
                                <input type="file"
                                       class="custom-file-input"
                                     
                                       id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                
                            </div>

                        </div>

                    </div>
                </div>





                <div class="row mt-3">
                    <div class="col-3 mx-auto">
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <button class="btn btn-success btn-block " type="submit">Submit</button>


                            </div>

                        </div>
                    </div>
                </div>



            </form>


        </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




</body>
</html>
