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



