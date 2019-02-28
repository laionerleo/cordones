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
                </div>

              
                   <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            
                                            <h5 class="text-muted font-weight-normal mt-0">PLANILLA</h5>
                                            <form id="frmdetalle">
                                             <div class="col-sm-10">
                                                    <select   id="slcperid" name="slcperid"  class="btn btn-primary dropdown-toggle">
                                                      <?php for ($i=0; $i < count($personas) ; $i++) { 
                                                        ?>
                                                        <option value="<?php echo $personas[$i]->per_id ?>"> <?php echo $personas[$i]->per_nombre ?></option>
                                                    <?php } ?>

                                                    </select>
                                                  
                                                </div>
                                                <input type="hidden" name="pla_id" id="pla_id" value="<?php echo $idplanilla ?>">
                                                <input type="hidden" name="url" id="url" value="<?=$url?>">
                                            </form>

                                        </div>
                                        
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                             <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="col-sm-10">
                                            
                                           <button  id="btningresar" class="btn btn-primary" >ingresar</button>
                                            </div>
                                        
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                            </div>
                        </div>
                    


                    <div id="detalleplanilla">
                     <?php $this->load->View('planilla/listardetalleplanilla'); ?>
                    </div> 



                    

                       
                        <!-- end row -->
                    </div> <!-- container -->


                <!-- content -->
                 <script type="text/javascript">
                           

                            $("#btningresar").click(
                                    function () {
                                  
                                      
                                                            var pla_id=$("#pla_id").val();
                                                            var per_id=$("#slcperid").val();
                                                            //alert(pla_id+per_id);
                                                            var urlajax=$("#url").val()+"planilla/detalleplanilla/guardar";    
                                                             $("#detalleplanilla").load(urlajax,{pla_id:pla_id,per_id:per_id});   
                                                                   $.ajax({                    
                                                                        url: urlajax,
                                                                        data: {pla_id:pla_id,per_id:per_id},
                                                                        type : 'POST',
                                                                        dataType: "json",
                                                                        beforeSend:function( ) {   
                                                                     
                                                                        },                    
                                                                        success:function(response) {
                                                                            
                                                                            alert(response);
                                                                        },
                                                                        error: function (data) {
                                                                          console.log(data);
                                                                        },               
                                                                        complete:function( ) {
                                                                           //

                                                                            
                                                                            
                                                                             
                                                                        },
                                                                    }
                                                                    );
                                                                         
                                                            }            
                                                ); 
                               
                        </script>
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


        <!-- App js --><?php $this->load->View('theme/js'); ?>

    </body>

<!-- Mirrored from coderthemes.com/simulor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:56:15 GMT -->
</html>