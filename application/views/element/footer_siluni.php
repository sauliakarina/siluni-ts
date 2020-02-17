 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <title><?php //echo $title ;?></title> -->
    <title>Siluni</title>
    <link rel="icon" href="<?php echo base_url('assets/siluni//images/unj.png')?>" type="image/x-icon">
   <!--  <link rel="stylesheet" type="text/css" href="https://fonts.googlelapis.com/icons?family=Material+Icons"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">  --> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/siluni//datatables/jquery.dataTables.min.css" type="text/css" > <!-- datatables -->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/mdb.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/style.css" rel="stylesheet">
    <!-- <link href="<?php //echo base_url();?>/assets/siluni//mdb/css/custom.css" rel="stylesheet"> -->       
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-3.1.1.js" type="text/javascript"></script>
     <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-2.2.3.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-2.2.3.min.js" type="text/javascript"></script>
    
    <!-- datatables -->
   <!--  <script type="text/javascript" src="https://ajax.googlelapis.com/ajax/libs.jquery/2.2.2/jquery.min.js"></script> -->
    <script src="<?php echo base_url();?>/assets/siluni//datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->



    
   <style type="text/css">
       @media(max-width:767px){
            .image1 {
                display: none!important; 
            }
            .font1{
                font-size: 20px;
            }
            .font2{
                font-size: 18px;
            }
        }

         @media(min-width:768px) and (max-width: 770px) {
            .image1 {
                display: block!important; 
            }
            .font1{
                font-size: 20px;
            }
            .font2{
                font-size: 18px;
            }
        }

        .footer{
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
           

        }

                    /* Dropdown Button */
            .dropbtn {
                color: grey !important;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #f1f1f1}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            .greytxt {
                color: grey!important;

            }
            .unjcolor-txt {
                color: #006F45 !important;
            }

            .form-simple .font-small {
          font-size: 0.8rem; }

        .form-simple .header {
          border-top-left-radius: .3rem;
          border-top-right-radius: .3rem; }

        .form-simple input[type=text]:focus:not([readonly]) {
          border-bottom: 1px solid #ff3547;
          -webkit-box-shadow: 0 1px 0 0 #ff3547;
          box-shadow: 0 1px 0 0 #ff3547; }

        .form-simple input[type=text]:focus:not([readonly]) + label {
          color: #4f4f4f; }

        .form-simple input[type=password]:focus:not([readonly]) {
          border-bottom: 1px solid #ff3547;
          -webkit-box-shadow: 0 1px 0 0 #ff3547;
          box-shadow: 0 1px 0 0 #ff3547; }

        .form-simple input[type=password]:focus:not([readonly]) + label {
          color: #4f4f4f; }
                        
            
    </style>

  </head>

<!--Footer-->
<footer id="footer" style="background-color:#006F45 "  class="footer page-footer center-on-small-only pt-0">

    <!--Footer Links-->
    <div style="background-color: #006F45" class="container">

        <!--First row-->
        <div class="row">

            <!--First column-->
            <div class="col-md-12" style="height: 50px">

                <center><p class="mt-3" style="font-size: 12px"><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 5px"></i>Universitas Negeri Jakarta, Jalan Rawamangun Muka, Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</p></center>
            </div>
            <!--/First column-->
        </div>
        <!--/First row-->
    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div style="background-color:#EFE037 " class="footer-copyright">
        <div class="container-fluid greytxt">
            <a><b>© 2017 Copyright: DEFAULT UNJ</b> </a>
        </div>
    </div>
    <!--/Copyright-->

</footer>
<!--/Footer-->
    
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/bootstrap.js" type="text/javascript"></script>
     <script src="<?php echo base_url();?>assets/siluni//mdb/js/bootstrap.min.js" type="text/javascript"></script>
   
     <script src="<?php echo base_url();?>assets/siluni//mdb/js/mdb.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/siluni//mdb/js/tether.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/tether.min.js" type="text/javascript"></script>
   
    <script type="text/javascript" >
        var height=$(window).height();
        var width=$(window).width();
        if(width<768){
            document.getElementById("footer").style.position="absolute";
            document.getElementById("footer").style.bottom=height;
        }
     </script>

     <script type="text/javascript" >
        var height=$(window).height();
        var doc=$(document).height();
        var width=$(window).width();
        if(height>doc){
            document.getElementById("footer").style.position="absolute";
            document.getElementById("footer").style.bottom=height;
        }else{
            document.getElementById("footer").style.position="relative";
        }
     

     </script>


</html>



