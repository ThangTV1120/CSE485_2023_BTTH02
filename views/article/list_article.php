<?php include('../admin/header_admin.php'); 
      include '../../configs/DBConnection.php'; ?>

<main class="container mt-5 mb-5">
<div class="row">
                <div class="col-sm">
                    <a href="add_article.php" class="btn btn-success">Thêm mới</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tiêu Đề </th>
                                <th scope="col">Tên Bài Hát </th>
                                <th scope="col">Mã Thể Loại </th>
                                <th scope="col">Tóm Tắt </th>
                                <th scope="col">Nội Dung</th>
                                <th scope="col">Mã Tác Giả</th>
                                <th scope="col">Ngày Viết </th>
                                <th scope="col">Hình Ảnh </th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Ket noi db
                            $dbConn = new DBConnection();
                            $conn = $dbConn->getConnection();
                            // Truy van
                            $sql = "SELECT * FROM baiviet";
                            $result = $conn->query($sql);
                            // Xu li ket qua tra ve
                            $row = $result->fetchAll();
                            foreach($row as $row){
                            ?>
                                    <th scope="row"><?=$row['ma_bviet'] ?></th>
                                    <td><?=$row['tieude'] ?></td>
                                    <td><?=$row['ten_bhat'] ?></td>
                                    <td><?=$row['ma_tloai'] ?></td>
                                    <td><?=$row['tomtat'] ?></td>
                                    <td><?=$row['noidung'] ?></td>
                                    <td><?=$row['ma_tgia'] ?></td>
                                    <td><?=$row['ngayviet'] ?></td>
                                    <td><a href="<?=$row['hinhanh'] ?>"></a></td>
                                    <td>
                                        <a href="update_article.php?id=<?=$row['ma_bviet'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <a href="delete_article.php"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                    </tr>
                            <?php
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </main>

<?php include('../admin/footer_admin.php'); ?>

