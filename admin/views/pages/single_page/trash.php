<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý trang đơn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?option=single_page">Quản lý trang đơn</a></li>
                        <li class="breadcrumb-item active">Kho lưu trữ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title font-weight-bold py-2">Quản lý lưu trữ trang đơn</h3>
                                <div class="card-tools">
                                    <a class="btn btn-info" href="index.php?option=single_page">
                                        <i class="fa fa-arrow-left"></i> Thoát
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="datatable" style="width:100%" class="datatable table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10px">#</th>
                                        <th class="text-center" width="100px">Hình</th>
                                        <th class="text-center">Tên trang đơn</th>
                                        <th class="text-center">Loại</th>
                                        <th class="text-center" width="150px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_singlepage as $row) : ?>
                                        <tr>
                                            <td class="text-center"><?= $row['id']; ?></td>
                                            <td class="text-center">
                                                <img src="<?= '../public/images/post/' . $row['img']; ?>" style="width: 100%;" class="img img-fuild img-thumbnail">
                                            </td>
                                            <td class="text-center">
                                                <?= $row['title']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($row['type'] == 'singlepage') {
                                                    echo 'Trang đơn';
                                                } ?>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-info" href="index.php?option=single_page&act=retrash&id=<?= $row['id']; ?>" data-toggle="tooltip" title="Khôi phục"><i class="fa fa-undo"></i></a>
                                                <!-- <a class="btn btn-sm btn-danger" href="index.php?option=single_page&act=delete&id=<?= $row['id']; ?>" data-toggle="tooltip" title="Xoá"><i class="fa fa-trash"></i></a> -->
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmDeleteModal" title="Xoá">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Xác nhận xoá Modal -->
                                        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xoá</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn có chắc chắn muốn xoá?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                        <a id="confirmDeleteButton" class="btn btn-danger" href="index.php?option=single_page&act=delete&id=<?= $row['id']; ?>">Xác nhận</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->