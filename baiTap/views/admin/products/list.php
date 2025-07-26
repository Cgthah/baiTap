

<!-- views/admin/songs/list.php -->
<?php
ob_start();
?>

<h2>Danh sách bài hát</h2>
<!-- Form tìm kiếm sản phẩm -->
<form method="GET" action="admin.php">
    <input type="hidden" name="controller" value="admin">
    <input type="hidden" name="action" value="search">
    <input type="text" name="name" placeholder="Nhập tên sản phẩm..." value="<?= isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
    <button type="submit">Tìm kiếm</button>
</form>
      <!-- <a href="admin.php?action=create" class="btn-custom"><i class="ri-add-line"></i> Thêm bài hát</a> -->
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Ảnh</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Tiền</th>
            <th>Mô Tả</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $index => $sp): ?>
          <tr>
            <td><?= $index +1   ?></td>
            <td><img src="<?= $sp['image'] ?>" class="img-thumbnail"></td>
            <td><?= htmlspecialchars($sp['name']) ?></td>
            <td><?= htmlspecialchars($sp['price']) ?></td>
            <td><?= htmlspecialchars($sp['cartegory']) ?></td>
            <td>
              <a href="index.php?controller=admin&action=edit&id=<?= $sp['Id'] ?>" class="action-btn edit-btn"><i class="ri-pencil-line"></i> Sửa</a>
              <a href="index.php?controller=admin&action=delete&id=<?= $sp['Id'] ?>" class="action-btn delete-btn" onclick="return confirm('Xóa sp này?')"><i class="ri-delete-bin-line"></i> Xóa</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>


<?php
$content=ob_get_clean();
include "../views/admin/layout.php";
?>
