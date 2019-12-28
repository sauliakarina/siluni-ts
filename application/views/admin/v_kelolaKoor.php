        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Koorprodi</h2>
            </div>
          </header>
          
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Koorprodi Ilmu Komputer</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm" data-toggle="modal" data-target="#modalGanti"><i class="fas fa-user-edit"></i> Ganti Koorprodi</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                           <tbody>
                            <tr>
                              <th scope="row">Nama</th>
                              <td><?php 
                                if (isset($koor)) {
                                  echo $koor->nama ;
                                } ?></td>
                            </tr>
                            <tr>
                              <th scope="row">NIDN</th>
                              <td><?php 
                                if (isset($koor)) {
                                  echo $koor->nidn ;
                                } ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Username</th>
                              <td>
                                <?php 
                                if (isset($koor)) {
                                  echo $this->m_master->getUserByUserID($koor->userID)->username;
                                } ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>

 <!-- Modal Ganti Koor -->
                      <div id="modalGanti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Ganti Koorprodi <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('admin/Dosen/exeChangeKoor'); ?>
                                <div class="form-group">
                                  <label>Nama Dosen</label>
                                    <select name="koorbaru" class="form-control">
                                      <option value="">-Pilih Koorprodi-</option>
                                      <?php foreach($dosen as $d) { ?>
                                        <option value="<?php echo $d->userID ?>"><?php echo $d->nama ?></option>
                                      <?php } ?>
                                    </select>
                                    <?php if (isset($koor)) { ?>
                                       <input type="hidden" name="koorlama"  value="<?php echo $koor->userID ?>" class="form-control form-control-sm">
                                    <?php } ?>
                                </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
