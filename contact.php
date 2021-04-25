<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <title>Soghra College</title>
</head>
<body>
    <div class="jumbotron-small" style="background-image: url(img/slider.jpg);">
        <div class="jumbotron-cover-small">

        <?php include_once('components/nav.php');?>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="tab-pane fade sub-page-p show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <h2 class="sub-page-heading">Contact</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <form class="p-4">
                                    <div class="form-group">
                                        <label for="name">Full name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="name@domain.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="queries">queries</label>
                                        <textarea class="form-control" id="queries" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn text-white mb-2 bg-theme w-100">Submit Query</button>

                                </form>
                            </div>
                            <div class="col-lg-6">
                                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=soghra%20college+(Soghra%20College)&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="my-5 pl-3 pr-3"></iframe>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <?php include_once('components/footer1.php')?>                        
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script  src="./js/script.js"></script>

</body>
</html>