
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Multi item selection</h4>
                                        <p class="text-muted font-13 mb-4">
                                            This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                                            unlike the os and single options shown in other examples.
                                        </p>


                                        <table id="selection-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                 <tr>
                                                <th>#</th>
                                                <th>NOMBRE</th>
                                                <th>TOTAL CORDONES</th>
                                                <th>TOTAL PAQUETE</th>
                                                <th>ANTICIPO</th>
                                                <th>TOTAL A PAGAR</th>
                                            </tr>
                                            </thead>
                                        
                                        <tbody>
                                                <?php for ($i=0; $i < count($detalleplanilla) ; $i++) { 
                                                    # code...
                                                 ?>
                                            <tr class="table-active">
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $detalleplanilla[$i]->per_nombre ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_totalcordones ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_totalpaquetes ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_anticipo ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_total_pagar ?></td>
                                                
                                                
                                            </tr>
                                        <?php }  ?>
                                            
                                            </tbody>
                                        </table>
                                    
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>