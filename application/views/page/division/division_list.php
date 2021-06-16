<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Division</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="flash-data-division" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
          <div class="col-md-8 col-sm-12">
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h3 class="card-title">Division List</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Division Code</th>
                      <th scope="col">Division Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($division as $row) :
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->division_code; ?></td>
                      <td><?php echo $row->division_name; ?></td>
                      <td class="text-center">
                        <!-- <a href="<?php echo base_url(); ?>Division/delete/<?$row->id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> -->
                        <a onclick="deleteConfirm('<?php echo base_url("division/delete".$row->id); ?>')" href="#!" class="btn btn-sm btn-danger" style="width: 100%;"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h3 class="card-title">Add Division</h3>
              </div>
              <form action="<?php echo base_url('division/add'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <div class="position-relative form-group">
                      <label for="division_code">Division Code</label>
                      <input type="text" name="division_code" id="division_code" class="form-control" value="DIV-<?php echo sprintf("%04s", $division_code) ?>" readonly>
                    </div>
                    <div class="position-relative form-group">
                      <label for="department_code">Department</label>
                        <select class="form-control" name="department_code" id="department_code" required>
                          <option value="">No Selected</option>
                            <?php foreach($department as $row):?>
                              <option value="<?php echo $row['department_code'];?>"><?php echo $row['department_name'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                      <label for="division_name">Division Name</label>
                      <input type="text" name="division_name" id="division_name" class="form-control">
                    </div>
                  </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" name="add" class="btn btn-primary float-right">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>