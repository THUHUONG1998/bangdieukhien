<?php
  if(isset($_COOKIE['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bảng dữ liệu - cookie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  $a='Từ ấy trong tôi bừng nắng hạ';
  $b='Mặt trời chân lý chói qua tim';
  $c='Hồn tôi là một vườn hoa lá';
  $d='Rất đậm hương và rộn tiếng chim...';

  $e='Tôi buộc lòng tôi với mọi người';
  $f='Để tình trang trải với trăm nơi';
  $g='Để hồn tôi với bao hồn khổ';
  $h='Gần gũi nhau thêm mạnh khối đời';

  $i='Tôi đã là con của vạn nhà';
  $k='Là em của vạn kiếp phôi pha';
  $l='Là anh của vạn đầu em nhỏ';
  $m='Không áo cơm, cù bất cù bơ...';

  $arr=[$a,$b,$c,$d,$e,$f,$g,$h,$i,$k,$l,$m];
?>

<div class="container">
  <h2>Bảng dữ liệu - cookie <a href="delete_cookie.php" class="btn btn-warning">Đăng xuất</a> </h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên dòng thơ</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>

      <?php $i=0; foreach($arr as $key => $value){ $i++; ?>

      <tr id="<?php echo $i; ?>">
        <td><?php echo $i; ?></td>
        <td><?  echo $value; ?></td>
        <td>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Thực hiện
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="edit_cookie.php">Chỉnh Sửa</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Xóa</a></li>
            </ul>
          </div>
        </td>
      </tr>

      <div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Xóa dữ liệu</h4>
            </div>
            <div class="modal-body">
              <p>Bạn có chắc chắn muốn xóa <b><?php echo $value; ?></b></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="xoa(<?php echo $i; ?>)">Xóa ngay</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
          </div>
        </div>
      </div>

      <?php }?>

    </tbody>
  </table>

  <p>Người sử dụng: <b><?php echo $_COOKIE['username']; ?></b></p>

</div>

<script>function xoa(id){ $('tr#'+id).remove(); }</script>

</body>
</html>

<?php
  }else{ header('Location: login_post_cookie.php'); }
?>
