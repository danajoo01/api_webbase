<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	
	<link href="css/style_button.css" rel="stylesheet">
<style type="text/css">

*{margin: 0; padding: 0}
.container1	{width: 525px; margin:20px auto; background: #3498db; padding:20px 20px 0px;}
.input {width: 150px; height: 25px; border-radius: 5px; border: none; margin-bottom: 40px;}
.submit {margin: 0 20px; margin-bottom: 40px; cursor: pointer;}
td{text-align: center;}
.color {color: green; font-weight: bold;}

</style>


</head>

<script>
function getXMLHttpRequest(){
  if(window.ActiveXObject){
    return new ActiveXObject("Microsoft.XMLHTTP");
  }else if(window.XMLHttpRequest){
    return new XMLHttpRequest();  
  }else alert("Status : Can not create XMLHttpRequest Object");
}
var xmlhttp=getXMLHttpRequest();
function sendRequest(pageURL,bahasa){
  if(xmlhttp.readyState==4 || xmlhttp.readyState==0){
    
    xmlhttp.onreadystatechange=function(){
      if(xmlhttp.readyState==4 && xmlhttp.status==200){
      
      if(bahasa=='indonesia'){
      document.getElementById('konvercirebon').value=xmlhttp.responseText;
      }else if(bahasa=='cirebon'){
      document.getElementById('konverindonesia').value=xmlhttp.responseText;
      }
      }
    }
    xmlhttp.open('GET',pageURL,true);
    xmlhttp.send(null); 
  }
}
function konversi(bahasa){
if(bahasa=='indonesia'){
sendRequest('proses.php?kata='+document.getElementById('Bindonesia').value+'&bahasa=indonesia','indonesia'); 
} else if(bahasa=='cirebon'){
sendRequest('proses.php?kata='+document.getElementById('Bcirebon').value+'&bahasa=cirebon','cirebon'); 
}
}
</script>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Game Edukasi</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Menu Utama</a>
						<a class="page-scroll" href="halaman_materi.html">Kembali</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    

    <!-- Services Section -->
    

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">            
            
            <div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item">
					<div class="portfolio-caption">
						<div class="input-field-border-bottom ">
						    <div class="container1">
      <form action="">
        <table>
          <tr>
            <td><input name="Bindonesia" type="text" id="Bindonesia" placeholder="indonesia" class="input color" /></td>
            <td><input type="button" value="Terjemah ke cirebon" onclick="konversi('indonesia');" class="submit" /></td>
            <td><input name="konvercirebon" type="text" id="konvercirebon" placeholder="cirebon" class="input color"/></td>
          </tr>
			
           <tr>
            <td><input name="Bcirebon" type="text" id="Bcirebon" placeholder="cirebon" class="input color"/></td>
            <td><input type="button" value="Terjemah ke Indonesia"  onclick="konversi('cirebon');" class="submit"/></td>
            <td><input name="konverindonesia" type="text" id="konverindonesia" placeholder="indonesia" class="input color"/></td>
          </tr>
        </table>
      </form>
    </div>
						</div>                  
                    </div>		
                </div>
			</div>
        </div>
    </section>

    <!-- About Section -->
    

    <!-- Team Section -->
    
   
	
    <!-- Contact Section -->
    



    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->

    <!-- jQuery -->
	<script src="js/media.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
