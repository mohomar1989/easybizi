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
        <link href="css/theme-default.css" rel="stylesheet"/>
        <link href="css/sweetalert.css" rel="stylesheet"/>



    </head>
    <body>

        <div class="container col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <a class="navbar-brand"><img class="img-fluid" id="profileImage" src="" width="50" height="50"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firstNav">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="firstNav" class="collapse navbar-collapse">

                    <ul class="navbar-nav  mr-auto">
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
                            <a class="nav-link" href="api/logout.php">Logout</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>



            <form id="myForm" enctype="multipart/form-data" action="api/updateCompany.php" method="post">



                <div class="row">
                    <div  class="col-lg-6">
                        <div class="row ">
                            <div class="col-12">
                                <div class="custom-file">
                                    <input
                                        data-validation-optional="true"
                                        data-validation-allowing="jpg, png" 
                                        data-validation-max-size="500kb"
                                        data-validation="required,size,mime"
                                        type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label  class="custom-file-label" for="inputGroupFile01">Upload company logo</label>
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
                        <div class="card">
                            <div class="card-header">General Information</div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-12">
                                        <input type="text"
                                               readonly="true"
                                               id="companyName"
                                               class="form-control text-center"
                                               placeholder="Business Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input type="tel"
                                               class="form-control text-center"
                                               id="companyNumber"
                                               name="companyNumber"
                                               data-validation="custom"
                                               data-validation-regexp="^00971\d{9}$"
                                               data-validation-optional="true"
                                               data-validation-error-msg="Please enter a valid number(e.g 00971xxxxxxxxx)"
                                               data-toggle="popover"
                                               data-trigger="focus"
                                               data-placement="right"
                                               data-content="Company # e.g 00971*******"
                                               placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input type="text"
                                               class="form-control text-center"
                                               readonly="true"
                                               id="companyEmail"
                                               placeholder="Business Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="card mt-2">

                    <div class="card-header">Contact Information</div>
                    <div class="card-body">


                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control text-center"
                                          name="companyAbout"
                                          data-validation="length"
                                          data-validation-length="25-100"
                                          data-validation-error-msg="Text should be at least 25 characters"
                                          data-toggle="popover" 
                                          data-trigger="focus"
                                          data-content="Write a short description about the company"
                                          data-placement="top"
                                          id="about"
                                          placeholder="About the company"></textarea>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="small"><span id="maxlength">100</span> characters left</p>


                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 mb-2">
                                <input type="text"
                                       class="form-control text-center"
                                       name="companyWhatsapp"
                                       data-validation="custom"
                                       data-validation-regexp="^971\d{9}$"
                                       data-validation-optional="true"
                                       data-validation-error-msg="Please enter a valid number(e.g 00971xxxxxxxxx)"
                                       data-toggle="popover"
                                       data-trigger="focus"
                                       data-placement="top"
                                       data-content="Whatsapp# e.g 9715********"
                                       id="companyWhatsapp"
                                       placeholder="Whatsapp Number">

                            </div>
                            <div class="col-lg-6 mb-2">
                                <input type="url"
                                       name="companyWebsite"
                                       id="companyWebsite"
                                       class="form-control text-center"
                                       data-validation="url"
                                       data-validation-optional="true"
                                       data-toggle="popover"
                                       data-trigger="focus"
                                       data-placement="top"
                                       data-content="Website link https://******"
                                       placeholder="Business Website">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 mb-2">
                                <input type="url"
                                       name="companyInstagram"
                                       id="companyInstagram"
                                       class="form-control text-center"
                                       data-validation="url"
                                       data-validation-optional="true"
                                       data-toggle="popover"
                                       data-trigger="focus"
                                       data-placement="top"
                                       data-content="Instagram link https://******"
                                       placeholder="Instagram Account">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text"
                                               data-validation="custom"
                                               data-validation-regexp="^[a-zA-Z]+((,)?[a-zA-Z]+){0,4}$"
                                               data-validation-error-msg="At least 1 keyword and maximum of 5, each keyword contains letters only"
                                               name="companyKeyword"
                                               id="keyword"
                                               class="form-control text-center"
                                               data-toggle="popover"
                                               data-trigger="focus"
                                               data-placement="top"
                                               data-content="5 Keywords allowed without any space and format as follow keyword1,keyword2,"
                                               placeholder="Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="small"><span id="maxlength1">100</span> characters left</p>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>






                <div class="card mt-2">
                    <div class="card-header">Location Information</div>
                    <div class="card-body">

                        <div class="row mt-4 mb-2">
                            <div class="col-12  mx-auto">
                                <input type="text"
                                       id="companyLocation"
                                       name="companyLocation"
                                       data-validation="url"
                                       data-validation-optional="true"
                                       class="form-control text-center"
                                       data-toggle="popover"
                                       data-trigger="focus"
                                       data-placement="top"
                                       data-content="Google map link https://******"
                                       placeholder="Google Maps Link">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 mb-2">
                                <select name="companyCountry" class="form-control">
                                    <option selected="">UAE</option>
                                </select>
                            </div>
                            <div  class="col-lg-6">
                                <select name="companyCity" id="citySelect" class="form-control">
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


                    </div>
                </div>





                <div class="card mt-2">
                    <div class="card-header"> Sub Category</div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-lg-5">

                                <label for="subcat">Select a Sub-Category</label>
                                <select data-right="#subcat_to"  id="subcat" class="form-control" size="8" multiple="multiple">

                                </select>
                            </div>
                            <div class="col-lg-2 my-auto">
                                <button type="button" id="subcat_rightAll" class="btn btn-block"><i class="fas fa-angle-double-right"></i></button>
                                <button type="button" id="subcat_rightSelected" class="btn btn-block"><i class="fas fa-angle-right"></i></button>
                                <button type="button" id="subcat_leftSelected" class="btn btn-block"><i class="fas fa-angle-left"></i></button>
                                <button type="button" id="subcat_leftAll" class="btn btn-block"><i class="fas fa-angle-double-left"></i></button>
                            </div>
                            <div class="col-lg-5">
                                <label for="subcat_to">Selected Sub-Categories</label>
                                <select 


                                    name="sub[]"
                                    id="subcat_to" class="multiselect form-control" size="8" multiple="multiple">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header"> Sub of sub Category</div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-lg-5">
                                <label for="subsubcat">Select a Sub-Sub-Category</label>
                                <select  id="subsubcat" class="form-control" size="8" multiple="multiple">

                                </select>
                            </div>
                            <div class="col-lg-2 my-auto">
                                <button type="button" id="subsubcat_rightAll" class="btn btn-block"><i class="fas fa-angle-double-right"></i></button>
                                <button type="button" id="subsubcat_rightSelected" class="btn btn-block"><i class="fas fa-angle-right"></i></button>
                                <button type="button" id="subsubcat_leftSelected" class="btn btn-block"><i class="fas fa-angle-left"></i></button>
                                <button type="button" id="subsubcat_leftAll" class="btn btn-block"><i class="fas fa-angle-double-left"></i></button>
                            </div>
                            <div class="col-lg-5">
                                <label for="subsubcat_to">Selected Sub-Sub-Categories</label>
                                <select name="subsub[]" id="subsubcat_to" class="form-control" size="8" multiple="multiple">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3 mx-auto">
                        <div class="row">
                            <div class="col-lg-6 mb-2 ">
                                <button class="btn btn-primary btn-block " type="submit">Submit</button>


                            </div>
                            <div class="col-lg-6 mb-2 ">
                                <button class="btn btn-primary btn-block " id="editbtn" onclick="enableForm()" type="button">Edit</button>
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
        <script src="js/multiselect.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script src="js/waitMe.min.js"></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script type="text/javascript">


                                    $.validate({modules: 'file'
                                    });
                                    function getCurrentSubCats() {
                                        $.ajax({
                                            dataType: "json",

                                            type: "POST",
                                            cache: false,
                                            data: {"id":<?php echo $_SESSION['login_user']; ?>},
                                            url: "api/getBusinessSub.php",

                                            success: function (data) {

                                                $.each(data, function (key, value) {
                                                    $('#subcat_to')
                                                            .append($("<option></option>")
                                                                    .attr("value", value.id)
                                                                    .text(value.Name));
                                                });



                                            }

                                        });

                                    }

                                    function getCurrentSubSubCats() {
                                        $.ajax({
                                            dataType: "json",

                                            type: "POST",
                                            cache: false,
                                            data: {"id":<?php echo $_SESSION['login_user']; ?>},
                                            url: "api/getBusinessSubSub.php",

                                            success: function (data) {

                                                $.each(data, function (key, value) {
                                                    $('#subsubcat_to')
                                                            .append($("<option></option>")
                                                                    .attr("value", value.id)
                                                                    .text(value.Name));
                                                });

                                                $('#myForm').waitMe("hide");



                                            }

                                        });

                                    }

                                    function getSubSubCats() {
                                        $.ajax({
                                            dataType: "json",

                                            type: "POST",
                                            cache: false,

                                            url: "api/getSubSubCat.php",

                                            success: function (data) {

                                                $.each(data, function (key, value) {
                                                    $('#subsubcat')
                                                            .append($("<option></option>")
                                                                    .attr("value", value.id)
                                                                    .text(value.Name));
                                                });



                                            }

                                        });

                                    }

                                    function getSubCats() {
                                        $.ajax({
                                            dataType: "json",

                                            type: "POST",
                                            cache: false,

                                            url: "api/getSubCat.php",

                                            success: function (data) {

                                                $.each(data, function (key, value) {
                                                    $('#subcat')
                                                            .append($("<option></option>")
                                                                    .attr("value", value.id)
                                                                    .text(value.Name));
                                                });



                                            }

                                        });

                                    }

                                    function getKeywords()
                                    {
                                        //getKeywords

                                        $.ajax({
                                            dataType: "text",

                                            type: "POST",
                                            cache: false,
                                            data: {"id":<?php echo $_SESSION['login_user']; ?>},
                                            url: "api/getKeywords.php",

                                            success: function (data) {


                                                $("#keyword").prop("value", data);


                                            }

                                        });
                                    }

                                    function triggerLoading()
                                    {
                                        $('#myForm').waitMe({
                                            effect: 'bounce',
                                            text: 'Please wait',
                                            color: "#92977E",
                                            textPos: 'vertical',
                                            waitTime: -1

                                        });
                                    }
                                    function enableForm()
                                    {
                                        $("#myForm :input").prop("disabled", false);
                                        $("#editbtn").prop("disabled", true);
                                    }
                                    function loadData()
                                    {
                                        triggerLoading();
                                        $.ajax({
                                            dataType: "json",

                                            type: "POST",
                                            cache: false,

                                            url: "api/getBusinessDetails.php",
                                            data: {"id":<?php echo $_SESSION['login_user']; ?>},

                                            success: function (data) {


                                                $("#companyLogo").prop("src", data['Logo']);
                                                $("#profileImage").prop("src", data['Logo']);
                                                $("#companyWhatsapp").prop("value", data['Whatsapp']);
                                                $("#companyName").prop("value", data['CompanyName']);
                                                $("#companyEmail").prop("value", data['ContactEmail']);
                                                $("#companyNumber").prop("value", data['ContactNumber']);
                                                $("#companyInstagram").prop("value", data['Instagram']);
                                                $("#companyLocation").prop("value", data['Location']);
                                                $("#companyWebsite").prop("value", data['Website']);
                                                $("#about").prop("value", data['About']);
                                                $("#businessLabel").prop("innerHTML", data['CompanyName']);
                                                //businessNameLabel
                                                $("#businessNameLabel").prop("innerHTML", "Welcome to EasyBizi " + data['CompanyName']);
                                                //citySelect
                                                $("#citySelect").prop("value", data['CompanyCity']);

                                                getSubCats();
                                                getKeywords();
                                                getSubSubCats();
                                                getCurrentSubSubCats();
                                                getCurrentSubCats();





                                            }

                                        });

                                    }



                                    $(function () {

                                        loadData();

                                        $('#about').restrictLength($('#maxlength'));
                                        $('#keyword').restrictLength($('#maxlength1'));
                                        $("#myForm :input").prop("disabled", true);
                                        $("#editbtn").prop("disabled", false);
                                        $('[data-toggle="popover"]').popover();

                                        $('#subcat').multiselect(
                                                {
                                                    search: {
                                                        left: '<input type="text" class="form-control mb-1" placeholder="Search..." />',
                                                        right: '<input type="text"  class="form-control mb-1" placeholder="Search..." />',
                                                    },
                                                    fireSearch: function (value) {
                                                        return value.length > 2;
                                                    }
                                                }
                                        );
                                        $('#subsubcat').multiselect(
                                                {
                                                    search: {
                                                        left: '<input type="text"  class="form-control mb-1" placeholder="Search..." />',
                                                        right: '<input type="text"  class="form-control mb-1" placeholder="Search..." />',
                                                    },
                                                    fireSearch: function (value) {
                                                        return value.length > 2;
                                                    }
                                                }

                                        );

                                        document.getElementById("inputGroupFile01").onchange = function () {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                // get loaded data and render thumbnail.
                                                document.getElementById("companyLogo").src = e.target.result;
                                            };

                                            // read the image file as a data URL.
                                            reader.readAsDataURL(this.files[0]);
                                        };
                                    });


                                    $('form').on('submit', function (e) {


                                        e.preventDefault(); // prevent native submit

                                        $('#subcat_to option').prop('selected', true);
                                        $('#subsubcat_to option').prop('selected', true);
                                        triggerLoading();


                                        $(this).ajaxSubmit({

                                            success: function (data) {



                                                $('#myForm').waitMe("hide");


                                                swal({
                                                    title: "Success",
                                                    text: "Profile Updated!",
                                                    type: "success",

                                                },
                                                        function (isConfirm) {

                                                            location.reload();
                                                        });


                                            }
                                        }

                                        );

                                    });


        </script>


    </body>
</html>
