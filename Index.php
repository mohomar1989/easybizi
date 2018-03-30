<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="css/custom.css" rel="stylesheet"/>
        <link href="css/waitMe.min.css" rel="stylesheet"/>
        <title></title>
    </head>
    <body>



        <div class="container" >
            <div class="row mb-5 mt-4">
                <div class="col-2 mx-auto">
                    <h1 >
                        <img class="img-fluid" src="img/EasyBizi.jpg" alt="EasyBizi"/>
                    </h1>
                </div>

            </div>
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="text-center">
                        <h4 style="color: #92977E;">Welcome to EasyBizi</h4>
                    </div>
                    <form action="api/login.php" method="POST" id="container">

                        <div class="form-group">
                            <input name="email" class="form-control" placeholder="Email" type="email"/>
                        </div>
                        <div class="form-group">
                            <input name="password" class="form-control" placeholder="Password" type="Password"/>
                        </div>

                        <button class="btn btn-success btn-block " type="submit">Login</button>

                    </form>
                </div>
            </div>


        </div>





        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/waitMe.min.js"></script>



        <script>


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
                e.preventDefault(); // prevent native submit
                triggerLoading();
                $(this).ajaxSubmit({

                    success: function (data) {

                        $(container).waitMe("hide"); 
                                if (data.length == 0)
                            alert("wrong username or password");
                        else
                            window.location.href = "Profile.php";


                    }
                }

                );

            });



        </script>
    </body>
</html>
