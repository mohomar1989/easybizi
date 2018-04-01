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


    </head>
    <body>

        <div class="container col-12">





            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <a class="navbar-brand"><img class="img-fluid" src="<?php echo $_SESSION['logo'] ?>" width="50" height="50"/></a>
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
                            <a class="nav-link" href="api/logout.php">Logout</a>
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


            <div class="row">
                <div class="col-6">
                    <div class="card mt-2">
                        <div class="card-header">Pending Products</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="products" class="table table-striped table-bordered"  style="width:100%">
                                    <thead>
                                        <tr>
                                            <th >ID</th>
                                            <th >Title</th>
                                            <th >Price</th>
                                            <th >Thumbnail</th>
                                            <th>Delete/Edit</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-2">
                        <div class="card-header">Active Products</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="products1" class="table table-striped table-bordered"  style="width:100%">
                                    <thead>
                                        <tr>
                                            <th >ID</th>
                                            <th >Title</th>
                                            <th >Price</th>
                                            <th >Thumbnail</th>
                                            <th>Delete/Edit</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST" action="api/updateProduct.php">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header">
                                    Edit Product
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label  class=" col-form-label">Product Title</label>
                                        <input type="text" class="form-control" id="modalProductTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="modalProductPrice" class=" col-form-label">Product Price</label>
                                        <input type="text" class="form-control" id="modalProductPrice">
                                    </div>
                                    <div class="form-group">
                                        <label for="modalProductDesc" class=" col-form-label">Product Price</label>
                                        <textarea type="text" class="form-control" id="modalProductDesc"></textarea>

                                    </div>
                                    <input id="modalProductId" type="hidden">



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





        <script>

            function openModal(title, price, id, desc)
            {

                $("#modalProductTitle").prop("value", title);
                $("#modalProductDesc").prop("value", desc);
                $("#modalProductPrice").prop("value", price);
                $("#modalProductId").prop("value", id);
                $('#productModal').modal('show');
            }



            function deleteProduct(id)
            {
                swal({
                    title: "Are you sure you want to delete this product?",
                    text: "Product will not be recovered after this action",
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $.ajax({
                        dataType: "json",
                        type: "POST",

                        data: {"id": id},
                        url: "api/deleteProduct.php",
                        success: function (data) {
                            swal("Successful", "Prodcut has been deleted!", "success");
                            $('#products').DataTable().ajax.reload();
                        }
                    });
                });
            }

            $(document).ready(function () {

                $('#products').DataTable({
                    "lengthMenu": [[3, 6, 10, -1], [3, 6, 10, "All"]],
                    "ajax": "api/getPendingProducts.php",
                    "columns": [
                        {"data": "id"},
                        {"data": "Title"},
                        {"data": "Price"},
                        {"data": "Thumbnail"},
                        {"data": "Description"}
                    ],
                    "columnDefs": [{
                            "targets": 4,
                            "data": "Price",
                            "render": function (data, type, row, meta) {
                                var desc = row["Description"];
                                desc = desc.replace(/(['"])/g, "\\$1");
                                var title = row["Title"];
                                title = title.replace(/(['"])/g, "\\$1");
                                return "<div class='row  mt-3'> <div class='col-6 text-center'>  <a href='#'><i class='fas fa-lg fa-edit' onclick=\"openModal('" + title + "'," + row["Price"] + "," + row["id"] + ",'" + desc + "')\"></i></a>" +
                                        "</div><div class='col-6 text-center'><a href='#'><i class='fas fa-lg fa-trash-alt' onclick=\"deleteProduct(" + row["id"] + ")\"></i></a></div></div>";
                            }
                        },
                        {
                            "targets": 3,
                            "data": "Thumbnail",
                            "render": function (data, type, row, meta) {

                                return "<img src='" + data + "' width='75' height='75' />";
                            }
                        }


                    ]
                });

                $('#products1').DataTable({
                    "lengthMenu": [[3, 6, 10, -1], [3, 6, 10, "All"]],
                    "ajax": "api/getPendingProducts.php",
                    "columns": [
                        {"data": "id"},
                        {"data": "Title"},
                        {"data": "Price"},
                        {"data": "Thumbnail"},
                        {"data": "Description"}
                    ],
                    "columnDefs": [{
                            "targets": 4,
                            "data": "Price",
                            "render": function (data, type, row, meta) {
                                var desc = row["Description"];
                                desc = desc.replace(/(['"])/g, "\\$1");
                                var title = row["Title"];
                                title = title.replace(/(['"])/g, "\\$1");
                                return "<div class='row  mt-3'> <div class='col-6 text-center'>  <a href='#'><i class='fas fa-lg fa-edit' onclick=\"openModal('" + title + "'," + row["Price"] + "," + row["id"] + ",'" + desc + "')\"></i></a>" +
                                        "</div><div class='col-6 text-center'><a href='#'><i class='fas fa-lg fa-trash-alt' onclick=\"deleteProduct(" + row["id"] + ")\"></i></a></div></div>";
                            }
                        },
                        {
                            "targets": 3,
                            "data": "Thumbnail",
                            "render": function (data, type, row, meta) {

                                return "<img src='" + data + "' width='75' height='75' />";
                            }
                        }


                    ]
                });
            });
        </script>
    </body>
</html>
