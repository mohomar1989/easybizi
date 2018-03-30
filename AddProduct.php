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
        <link href="css/waitMe.min.css" rel="stylesheet"/>
        <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/theme-default.css" rel="stylesheet"/>
                <link href="css/sweetalert.css" rel="stylesheet"/>


    </head>
    <body>

        <div class="container col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <a class="navbar-brand"><img class="img-fluid" src="<?php echo $_SESSION['logo']?>" width="50" height="50"/></a>
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




            <form id="container" enctype="multipart/form-data" action="api/addProduct.php" method="post">
                <div class="card mt-2">

                    <div class="card-header">Product Information</div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group mt-2 ">

                                    <input type="text"
                                           name="title"
                                           class="form-control"

                                           data-validation="required"

                                           placeholder="Enter product title">

                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <input type="text"
                                           class="form-control"
                                           name="price"
                                           data-validation="required,number"
                                           placeholder="Enter product price">


                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control"
                                          name="desc"
                                          data-validation="required,length"
                                          data-validation-length="25-100"
                                          id="desc"
                                          placeholder="Product Description"></textarea> 

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <p class="small"><span id="maxlength">100</span> characters left</p>


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
                                        name="paymentMethod"
                                        id="paymentSelect">
                                    <option>Cash on delivery</option>
                                    <option>Transfer/cash</option>
                                    <option>Bank Transfer</option>

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
                                        name="availability"
                                        id="avaSelect">
                                    <option>Available</option>
                                    <option>Not Avaliable</option>

                                </select>   

                            </div>

                        </div>


                    </div>
                </div>


                <div class="card mt-2">
                    <div class="card-header"> Product Photo</div>
                    <div class="card-body">


                        <div class="row">


                            <div id="pics" class=" col-12">
                                <input type="file"
                                       multiple=""
                                       data-validation-allowing="jpg, png" 
                                       data-validation-max-size="200kb"
                                       data-validation="required,size,mime,length"
                                       data-validation-length="max5"
                                       data-validation-error-msg-container="#pics"
                                       name="productImages[]"

                                       id="productPics">

                            </div>

                        </div>

                    </div>
                </div>





                <div class="row mt-3">
                    <div class="col-3 mx-auto">
                        <div class="row">
                            <div class="col-lg-6 mb-2 mx-auto">
                                <button class="btn btn-success btn-block " type="submit">Submit</button>


                            </div>

                        </div>
                    </div>
                </div>

            <input type="hidden" name="businessId" value="<?php echo $_SESSION['login_user']; ?>"/>


            </form>


        </div>



        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script src="js/sweetalert.min.js"></script>

        <script src="fileUpload/fileinput.min.js"></script>
        <script src="js/waitMe.min.js"></script>
        <script src="js/jquery.form.min.js"></script>

        <script>

            $.validate({modules: 'file'
            });
                 $('#desc').restrictLength($('#maxlength'));

            function triggerLoading()
            {
                $('#container').waitMe({
                    effect: 'bounce',
                    text: 'Please wait',
                    color: "#92977E",
                    textPos: 'vertical',
                    waitTime: -1

                });
            }
            $('form').on('submit', function (e) {


                e.preventDefault();
                triggerLoading();
                $(this).ajaxSubmit({

                    success: function (data) {

                        $('#container').waitMe("hide");
                     
                                                swal({
                                                    title: "Success",
                                                    text: "Product Added!",
                                                    type: "success",

                                                },
                                                        function (isConfirm) {

                                                            location.reload();
                                                        });

                    }
                }

                );

            });

            $(function () {



                $("#productPics").fileinput({
                    showUpload: false,
                    dropZoneEnabled: false,
                    maxFileCount: 5,
                    msgPlaceholder: "Select up to 5 images for the product"

                });
           
            });




        </script>


    </body>
</html>
