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
                    <div class="tab-pane fade mt-4 show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <h2 class="sub-page-heading">Notice Tender</h2>
                        <table class="themed-table">
                           <tr>
                               <td class="notice-table text-left">
                                   <a href="#"><h2>Notice Title</h2></a>
                                   <p>notice details will go here</p>
                               </td>
                           </tr>
                           <tr>
                               <td class="notice-table text-left">
                                   <a href="#"><h2>Notice Title</h2></a>
                                   <p>notice details will go here</p>
                               </td>
                           </tr>
                           <tr>
                               <td class="notice-table text-left">
                                   <a href="#"><h2>Notice Title</h2></a>
                                   <p>notice details will go here</p>
                               </td>
                           </tr>
                       </table>
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