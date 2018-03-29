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

        <form>
            <div class="container col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                    <a class="navbar-brand"><img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/2/27/Square_200x200.svg" width="50" height="50"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firstNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div id="firstNav" class="collapse navbar-collapse">

                        <ul class="navbar-nav mr-auto">
                            <li  class="nav-item">
                                <a class="nav-link active ">Profile</a>
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
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>






                <div class="row">
                    <div  class="col-lg-6">
                        <div class="row ">
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label  class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center mt-1 mb-1 ">
                                <img id="companyLogo" class="img-fluid " style="max-height: 250px;" src=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" >
                        <div class="row">

                            <div class="form-group col-12">
                                <input type="text" class="form-control text-center" placeholder="Business Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control text-center" placeholder="Contact Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control text-center" placeholder="Business Email">
                            </div>
                        </div>

                    </div>
                </div>

                <hr/>
                <div class="row">
                    <div class="col-12">
                        <textarea class="form-control text-center" data-toggle="popover" data-trigger="focus" data-content="" data-placement="top" placeholder="About"></textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control text-center" placeholder="Whatsapp Number">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control text-center" placeholder="Google Maps Link">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 mb-2">
                        <input type="text" class="form-control text-center" placeholder="Instagram Account">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control text-center" placeholder="Keywords">
                    </div>
                </div>
                <div class="row mt-4 mb-2">
                    <div class="col-8  mx-auto">
                        <input type="text" class="form-control text-center" placeholder="Business Website">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 mb-2">
                        <select class="form-control">
                            <option selected="">UAE</option>
                        </select>
                    </div>
                    <div  class="col-lg-6">
                        <select class="form-control">
                            <option>Abu Dhabi</option>
                            <option>Abu Dhabi-AlAin</option>
                            <option>Abu Dhabi-Western Region</option>
                            <option>Dubai</option> 
                            <option>Sharjah</option>
                            <option>Ajman</option>
                            <option>Um AlQuwain</option>
                            <option>Ras Al Khaima</option>
                            <option>Fujeirah</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-5">
                        <select name="from" id="subcat" class="form-control" size="8" multiple="multiple">
                            <option value="1">C++</option>
                            <option value="2">C#</option>
                            <option value="3">Haskell</option>
                            <option value="4">Java</option>
                            <option value="5">JavaScript</option>
                            <option value="6">Lisp</option>
                            <option value="7">Lua</option>
                            <option value="8">MATLAB</option>
                            <option value="9">NewLISP</option>
                            <option value="10">PHP</option>
                            <option value="11">Perl</option>
                            <option value="12">SQL</option>
                            <option value="13">Unix shell</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" id="subcat_rightAll" class="btn btn-block"><i class="fas fa-angle-double-right"></i></button>
                        <button type="button" id="subcat_rightSelected" class="btn btn-block"><i class="fas fa-angle-right"></i></button>
                        <button type="button" id="subcat_leftSelected" class="btn btn-block"><i class="fas fa-angle-left"></i></button>
                        <button type="button" id="subcat_leftAll" class="btn btn-block"><i class="fas fa-angle-double-left"></i></button>
                    </div>
                    <div class="col-lg-5">
                        <select name="to" id="subcat_to" class="form-control" size="8" multiple="multiple">
                        </select>
                    </div>
                </div>
                  <div class="row mt-2">
                    <div class="col-lg-5">
                        <select name="from" id="subsubcat" class="form-control" size="8" multiple="multiple">
                            <option value="1">C++</option>
                            <option value="2">C#</option>
                            <option value="3">Haskell</option>
                            <option value="4">Java</option>
                            <option value="5">JavaScript</option>
                            <option value="6">Lisp</option>
                            <option value="7">Lua</option>
                            <option value="8">MATLAB</option>
                            <option value="9">NewLISP</option>
                            <option value="10">PHP</option>
                            <option value="11">Perl</option>
                            <option value="12">SQL</option>
                            <option value="13">Unix shell</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" id="subsubcat_rightAll" class="btn btn-block"><i class="fas fa-angle-double-right"></i></button>
                        <button type="button" id="subsubcat_rightSelected" class="btn btn-block"><i class="fas fa-angle-right"></i></button>
                        <button type="button" id="subsubcat_leftSelected" class="btn btn-block"><i class="fas fa-angle-left"></i></button>
                        <button type="button" id="subsubcat_leftAll" class="btn btn-block"><i class="fas fa-angle-double-left"></i></button>
                    </div>
                    <div class="col-lg-5">
                        <select name="to" id="subsubcat_to" class="form-control" size="8" multiple="multiple">
                        </select>
                    </div>
                </div>
            </div>

        </form>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/multiselect.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>


        <script type="text/javascript">
            
            
            $(function () {
  $('[data-toggle="popover"]').popover()
})
            $('#subcat').multiselect(
                    {
                        search: {
            left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
        },
        fireSearch: function(value) {
            return value.length > 2;
        }
                    }
            );
             $('#subsubcat').multiselect();
            document.getElementById("inputGroupFile01").onchange = function () {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("companyLogo").src = e.target.result;
                };

                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            };


        </script>


    </body>
</html>