    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kişilik Testi</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style >
        a {
            color:black;
             text-decoration: none;
        }
        a:hover{

              text-decoration: none;
        }

    </style>
<script >


       function basla() {

            var kull=$("#kullanici_adi").val();
            document.cookie= "kull = "+ kull;
         $.get('ajax.php', {kullanici_adi:''}, function (gelen_cevap) {
            $('.soru_alani').html(gelen_cevap);
         });

         $(".basla").hide();
      }
</script>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Kişilik Testi</a>
            </div>


        </div>
        <!-- /.container-fluid -->
    </nav>
	<header>
        <div class="header-content">
            <div class="header-content-inner">
                <span style="font-size: 50px;">Kişilik Testi</span>
                <p>
                     Test sizin ağırlıklı olarak hangi gruba ait olduğunuzu ortaya çıkaracaktır.

                    Testi işaretlerken şu anda sahip olduğunuz düşünceye göre işaretlemeye özen gösteriniz.

                </p>
                <h2>Puanlandırma</h2>
                <p>
                    Her sorunun altında 4 şık yer almaktadır. Soruları cevaplarken size en uygun seçeneğe
                    XX işareti, o seçenekten sonra size en uygun gelen ikinci seçeneğe ise <span class="glyphicon glyphicon-ok"></span> işareti koyunuz.

                    Seçeneklerden sadece iki şıkka işaret koyun. Eğer sadece tek şıkka işaret koyacaksanız, o şıkka <span class="glyphicon glyphicon-ok"></span><span class="glyphicon glyphicon-ok"></span> işareti koyunuz.
                </p>
            </div>
        </div>
    </header>

	<section class="no-padding" id="portfolio">
        <div class="container-fluid">

            <div class="mainanket row no-gutter popup-gallery ">
                <div class="orta_kisim" style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px; background-color:#CFE7FD; padding:5px; border-radius:25px; ">
                    <div class="soru_alani">
                    </div>
                    <div class="basla" style="">
                       <div class="row">
                        <div class="col-md-4">
                        </div>
                         <div class="col-md-4" >
                            <div class="form-group" >
                                <input type="text"  class="form-control" id="kullanici_adi" placeholder="İsminiz">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <input  value="BAŞLA" class="btn btn-success form-control" style=" border-radius:25px !important; height:150px;" onclick="basla();">


                    </div>
                       </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-dark "id="contact">

    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
