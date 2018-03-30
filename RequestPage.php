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
        <link href="css/jquery.bootgrid.min.css" rel="stylesheet"/>

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
                            <a class="nav-link active" href="RequestPage.php">Requests Page</a>
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

                            <table id="grid-basic" class="table table-condensed table-hover
                                   table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id">ID</th>
                                        <th data-column-id="Title">Sender</th>
                                        
                                    </tr>
                                </thead>
                            </table>



                        </div>

                    </div>


                </div>
            </div>



        </div>







        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.bootgrid.min.js"></script>




        <script>
            $("#grid-basic").bootgrid(
                    {
                        post: function ()
    {
        /* To accumulate custom parameter with the request object */
        return {
            id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
        };
    },
                rowCount : [3,6,-1],
                ajax: true,
    
    url: "api/getPendingProducts.php"
  
    
                        
                       
                        
                    });
            
        </script>
    </body>
</html>
