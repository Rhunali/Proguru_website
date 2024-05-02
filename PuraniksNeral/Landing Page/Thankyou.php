<!DOCTYPE html>
<html lang="en">
<head>
<title>Puraniks | The Digital Mega Township</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="styles/owl.theme.default.css" />
<link rel="stylesheet" type="text/css" href="styles/animate.css" />
<link rel="stylesheet" type="text/css" href="styles/jquery.fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
<link rel="stylesheet" type="text/css" href="styles/responsive.css" />

<style type="text/css">
  .header {
  	background: #fff;
  	border-bottom: 1px solid #005F67;
  }
  .footer_bar {background: #404040;}
  .content-middle-align {
    width: 100%;
    height: 650px;
    display: table;
    position: relative;
  }
  .content-middle-align h3 {margin-bottom: 20px;}
  .content-middle-align .middle-align {
    display: table-cell;
    vertical-align: middle;
  }
  .btn.btn-cyan {
    width: 100px;
    height: auto;
    padding: 10px 0;
    background: #007687;
    color: #fff;
    font-weight: 600;
    text-align: center;
    border-radius: 0;
  }
</style>
</head>
<body>

<div class="super_container">
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="header_content">
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="logo">
								<a href="http://propertiwise.com/puk"><img src="images/logo.png" alt="Logo"></a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3 col-lg-4"></div>
						<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5"></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center"></div>
	</div>

	<div class="thankyou-sec">
		<div class="content-middle-align">
	    	<div class="middle-align">
	          <div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
	              <h3 class="msg-slogan"><i class="fa fa-check"></i>&nbsp; Thankyou! Your Form has been Submitted... We will get back to you as soon as possible</h3>
	              <a href="#" class="btn btn-cyan" style="width: 100px; padding: 10px 10px; margin: 0 auto;">Ok</a>
	            </div>
	          </div>
	        </div>
	    </div>
	</div>

	<!-- Footer -->
	<footer class="footer" id="contact">		
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="footer_bar_content">
							<div class="cr text-center">©Copyrights 2019 &nbsp;|&nbsp; All Rights Reserved.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/easing.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/custom.js"></script>

<script src="http://parsleyjs.org/dist/parsley.js"></script>

<!--validation script start -->
<script>  
$(document).ready(function(){  
    $('#register-property').parsley();
 
 $('#register-property').on('submit', function(event){
  event.preventDefault();
  if($('#register-property').parsley().isValid())
  {
   $.ajax({
    url:"http://crmdemo.ap-south-1.elasticbeanstalk.com/LandingPageServlet",
    method:"POST",
    data:$(this).serialize(),
    beforeSend:function(){
     $('#submit').attr('disabled','disabled');
     $('#submit').val('Submitting...');
    },
    success:function(data)
    {
     $('#register-property')[0].reset();
     $('#register-property').parsley().reset();
     $('#submit').attr('disabled',false);
     $('#submit').val('Submit');
     alert(data);
    }
   });
  }
 });
});  
</script><!--validation script End -->

<script type="text/javascript">
    function manage(txt) {
        var bt = document.getElementById('submit');
        var ele = document.getElementsByTagName('input'); 
        
        // LOOP THROUGH EACH ELEMENT.
        for (i = 0; i < ele.length; i++) {

            // CHECK THE ELEMENT TYPE.
            if (ele[i].type == 'text' && ele[i].value == '' && ele[i].value == '') {
                bt.disabled = true;    // Disable the button.
                return false;
            }
            else {
                bt.disabled = false;   // Enable the button.
            }
        }
    }    
</script>

<script type="text/javascript">
    var fname = document.getElementById("fname");

    var invalidChars = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    fname.addEventListener("keydown", function(e) {
      if (invalidChars.includes(e.key)) {
            e.preventDefault();
      }
    });
</script>

<script type="text/javascript">
	function isNumber(event) {
	   event = (event) ? event : window.event;
	   var charCode = (event.which) ? event.which : event.keyCode;
	   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
	       return false;
	   }
	       return true;
	}
</script>

<script type="text/javascript">
    $("#header-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>  <!-- End Custom Javascript -->

<script type="text/javascript">
    $("#property-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            }
        }
    })
</script>  <!-- End Custom Javascript -->

<script type="text/javascript">
    $("#floor-plan-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    })
</script>  <!-- End Custom Javascript -->

<script type="text/javascript">
	$("ul.mobile-menu li a").click(function (event) {
        $(".menu.trans_500").toggleClass('active');
    });
</script>
</body>
</html>
