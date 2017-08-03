<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dynamic Select Box Dependent</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SELECT BOX DEPENDENT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-offset-3 col-lg-6">
                <h1 class="text-center">Ajax & Codeigniter Select Box Dependent</h1>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" name="country" id="country">
                        <option value="">Select Country</option>
                        <?php foreach($countries as $country): ?>
                            <option value="<?php echo $country->country_id; ?>"><?php echo $country->country_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Province:</label>
                    <select class="form-control" name="province" id="province" disabled="">
                        <option value="">Select Province</option>
                    </select>
                  </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript 
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function(){
           $('#country').on('change', function(){
                var country_id = $(this).val();
                if(country_id == '')
                {
                    $('#province').prop('disabled', true);
                }
                else
                {
                    $('#province').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url() ?>welcome/get_province",
                        type: "POST",
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                           $('#province').html(data);
                        },
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                }
           }); 
        });
    </script>

</body>

</html>
