<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container">
        <section class="content-header">
            <h1><?= $title ?></h1>
            <hr>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-10">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                    <?php else : ?>
                        <?= $this->session->flashdata('message'); ?>
                    <?php endif; ?>
                    <a href="" class="btn btn-info mb-3 tambahsm" data-toggle="modal" data-target="#addSubModal">Add New Submenu</a>
                    <table class="table table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Submenu</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Url</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($submenu as $sm) :
                            ?>
                                <tr>
                                    <th><?= $i++; ?></th>
                                    <td><?= $sm['title'] ?></td>
                                    <?php
                                    $menuid = $sm['menu_id'];
                                    $m = $this->db->get_where('user_menu', ['id' => $menuid])->row_array();
                                    ?>
                                    <td><?= $m['menu'] ?></td>
                                    <td><?= $sm['url'] ?></td>
                                    <td><i class="<?= $sm['icon'] ?>"></i></td>
                                    <td><?= $sm['is_active'] ?></td>
                                    <td>
                                        <a href="<?= base_url('menu/editsm') ?>" class="badge badge-success editsm" data-toggle="modal" data-target="#addSubModal" data-id="<?= $sm['id'] ?>">edit</a>
                                        <a href="<?= base_url('menu/remove/') . $sm['id'] ?>" class="badge badge-danger" onclick="confirm('yakin?')">delete</a>
                                    </td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="addSubModal" tabindex="-1" role="dialog" aria-labelledby="addNewSubModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewSubModal">Add new Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/submenu') ?>" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group">
                        <label for="submenu">Submenu :</label>
                        <input type="text" class="form-control" name="submenu" id="submenu">
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu :</label>
                        <select name="menu" id="menu" class="form-control">
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="url">Url :</label>
                        <input type="text" class="form-control" name="url" id="url">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon :</label>
                        <input type="text" class="form-control" name="icon" id="icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="active" id="active" value="1" checked>
                            <label for="active" class="form-check-label text-muted">Active?</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Add Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>