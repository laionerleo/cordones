
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">LISTA DE PRODUCCION</h4>
                                        <p class="text-muted font-13 mb-4">
                                            This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                                            unlike the os and single options shown in other examples.
                                        </p>
                                        

                                        <table id="selection-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>FECHA</th>
                                                <th>CANTIDAD</th>
                                                <th>NOMBRE</th>
                                                <th>OPCIONES</th>
                                            </tr>
                                            </thead>
                                        
                                        <tbody>
                                                <?php for ($i=0; $i < count($produccion) ; $i++) { 
                                                    # code...
                                                 ?>
                                            <tr class="table-active">
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $produccion[$i]->pro_fecha ?></td>
                                                <td><?php echo $produccion[$i]->pro_cantidad ?></td>
                                                <td><?php echo $produccion[$i]->per_nombre ?></td>
                                                <td> <a href="<?php echo $url ?>/eliminarproduccion/<?php echo  $produccion[$i]->pro_id ?>"><i class="fe-delete"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                            
                                            </tbody></table>
                                    
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>