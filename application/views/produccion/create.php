<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simulor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:55:48 GMT -->
<head>
        <?php $this->load->View('theme/head'); ?>
</head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->View('theme/menu'); ?>
           
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                        <?php $this->load->View('theme/menuarriba'); ?>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Simulor</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                       
                        <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">REGISTRAR  PRODUCCION</h4>
                                      
            
                                        <form class="form-horizontal" id="formproduccion">
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">TRABAJADOR</label>
                                                <div class="col-sm-10">
                                                    <select id="slcperid" name="slcperid"  class="form-control">
                                                      <?php for ($i=0; $i < count($personas) ; $i++) { 
                                                        ?>
                                                        <option value="<?php echo $personas[$i]->per_id ?>"> <?php echo $personas[$i]->per_nombre ?></option>
                                                    <?php } ?>

                                                    </select>
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">CANTIDAD</label>
                                                <div class="col-sm-10">
                                                    <input id="inpcantidad"  name="inpcantidad" type="number" class="form-control" placeholder="introducir cantidad">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">FECHA</label>
                                                <div class="col-sm-10">
                                                    <input id="inpfecha" name="inpfecha" class="form-control date" type="date" value="<?php echo date("Y-m-d");?>">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-10">
                                                         <input type="hidden" name="url" id="url" value="<?=$url?>">
                                                <button id="btningresar" type="button" class="btn btn-primary">INGRESAR</button>


                                                </div>
                                                <div id="cargaguardar" style="display: none;">
                                                    <p>listo se guardo</p>
                                                </div>
                                                
                                            </div>

                                          
                                           
            
                                            
            
                                        </form>
            
                                    </div> <!-- end card-box -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        <script type="text/javascript">
                           

                            $("#btningresar").click(
                                    function () {
                                         var cant =$("#inpcantidad").val();
                                         if (cant>0) {
                                      
                                                            var datos=$("#formproduccion").serialize();
                                                            var urlajax=$("#url").val()+"produccion/guardarproduccion";      
                                                                   $.ajax({                    
                                                                        url: urlajax,
                                                                        data: {datos},
                                                                        type : 'POST',
                                                                        dataType: "json",
                                                                        beforeSend:function( ) {   
                                                                        $("#inpcantidad").val("");

                                                                        $("#cargaguardar").show(); 
                                                                        },                    
                                                                        success:function(response) {
                                                                            
                                                                            
                                                                        },
                                                                        error: function (data) {
                                                                           
                                                                        },               
                                                                        complete:function( ) {
                                                                            $("#cargaguardar").hide();
                                                                            
                                                                            
                                                                             
                                                                        },
                                                                    }
                                                                    );

                                                                }else{
                                                                     $("#inpcantidad").focus();
                                                                }


                                                                         
                                                            }            
                                                ); 
                               
                        </script>

                       
                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                Simulor Admin &copy; 2018 - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- App js -->
        <script src="<?php echo base_url(); ?>application/assets/js/vendor.min.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/app.min.js"></script>

        <!-- Plugins js -->
        <script src="<?php echo base_url(); ?>application/assets/js/vendor/Chart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/vendor/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/vendor/jquery.knob.min.js"></script>

        <script src="<?php echo base_url(); ?>application/assets/js/pages/dashboard.init.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/vendor/toastr.min.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/pages/toastr.init.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/simulor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:56:15 GMT -->
</html>