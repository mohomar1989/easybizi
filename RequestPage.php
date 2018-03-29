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
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
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
                            <a class="nav-link" href="AddProduct.php">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RequestPage.php">Requests Page</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li  class="nav-item ">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Request Page</li>
                </ol>
            </nav>

         

            <div class="card mt-2">

                <div class="card-header"> Status Information</div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-primary">Profile Status : Pending for approval</label>
                        </div>

                    </div>


                </div>
            </div>


            <div class="card mt-2">

                <div class="card-header"> Product Information Status</div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">Product Title</th>

                                        <th scope="col">Status</th>
                                        <th scope="col">Remove product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>

                                        <td>@mdo</td>
                                        <td>
                                            <button>delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>

                                        <td>@fat</td>
                                        <td>
                                            <button>delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry the Bird</td>

                                        <td>wew</td>
                                        <td>
                                            <button>delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
            </div>


            <nav aria-label="Page navigation example">
                <ul class="pagination mt-2">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>







        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>




    </body>
</html>
