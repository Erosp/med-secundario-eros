<div id="page-wrapper">
    <?php $this->load->view('partner/new-sidebar'); ?>
         <div class="row">
                <div class="col-lg-12">
                   <!--  <h1 class="page-header">Orders</h1> -->
                    <?php
                    @$success_msg = $this->session->flashdata('success_msg');
                    if (!empty($success_msg)) {
                        echo "<div class='alert alert-info' style='float: center;text-transform: capitalize;' id='success-alert'>";
                        echo $this->session->flashdata('success_msg') . "</div>";
                    }
                    @$error_msg = $this->session->flashdata('error_msg');
                    if (!empty(@$error_msg)) {
                        echo "<div class='alert alert-danger' style='float: center;text-transform: capitalize;' id='success-alert'>";
                        echo $this->session->flashdata('error_msg') . "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
			    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading title-bar-blue">
                    <p><i class="fa fa-users" aria-hidden="true"></i> Orders</p>
					<div class="pull-right">
                    <button  class="btn-default" style="margin:0;">Export</button>
                    <button  class="btn-default" style="margin:0;">Print</button>
					</div>
                </div> <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                    <table width="100%" class="table table-striped table-bordered table-hover custom-table medconnex19" id="dataTables-example">
                        <thead>
                            <tr class="first-row">
                                <th>S.No</th>
                                <th>Total Products</th>
                                <th>Coins Traded</th>
                                <th>Graduity</th>
                                <th>Grand Total</th>
								<th>Delivery Address</th>
								<th>Payment Method</th>                              
								<th>Order Status</th>								
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        	 $i = 1;
                        	 foreach($orders as $order) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i; ?></td>
                            	<td><?php echo $order['total_products']; ?></td>
                            	<td><?php echo $order['coins']; ?></td>
                            	<td><?php echo $order['graduity']; ?></td>
                            	<td><?php echo $order['grand_total']; ?></td>
                            	<td><?php echo $order['delivery_address']; ?></td>
                            	<td><?php echo $order['payment_method']; ?></td>
                            	<td><?php if($order['order_status'] == "0"){
											echo 'Placed';
										}elseif($order['order_status'] == "1"){
											echo 'Confirmed';
										}elseif($order['order_status'] == "2"){
											echo 'Delivered';
										} ?></td>
                            	  
                            	

                            </tr> 
                           <?php $i++;} ?> 
                        </tbody>
                    </table> <!-- /.table-responsive -->
                </div>
                    <div id="table-users-pager" class="pager pager-lg tablesorter-pager">
    				    <div class="pagination-wrap">
        					
        			</div>
                    
                </div><!-- /.panel-body -->
             </div><!-- /.panel -->
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</div><!--/.page wrapper-->
            <div class="row">
                <div class="col-lg-8">

                    <!-- /.panel -->
 
                    <!-- /.panel -->
                  
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                   
                    <!-- /.panel -->
                   
                    <!-- /.panel -->
                   
                      
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->

