<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partial/head.php") ?>
    </head>
    <body id="page-top">
        <?php $this->load->view("admin_partials/navbar.php") ?>
        <div id="wrapper">
            <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="id-wrpper">
                <div class="container-fluid">
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                    <?php if($this->session->flashdata('succes')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/products/add') ?>"<i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="cardd-body">
                        <form action="<?php echo base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" 
                                type="text" name="name" placeholder="Product name"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('name') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price">Price*</label>
                                <input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>" 
                                type="text" name="price" placeholder="Product price"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('price') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Photo</label>
                                <input class="form-control <?php echo form_error('image') ? 'is-invalid':'' ?>" 
                                type="text" name="image" placeholder="Product image"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description*</label>
                                <input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>" 
                                type="text" name="description" placeholder="Product description"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('description') ?>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>
                
                </div>
                <!-- /.container-fluid-->
                <!-- Sticky footer-->
                <?php $this->load->view("admin/_partials/footer.php") ?>
            
            </div>
            <!-- /.content-wrapper-->
        </div>
        <!
        -- /#wrapper -->
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>