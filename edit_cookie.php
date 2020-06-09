<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chỉnh sửa dữ liệu - cookie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Chỉnh sửa dữ liệu - cookie</h2>
    
    <form action="">

      <div class="form-group">
        <label for="name">Tên:</label>
        <input type="text" class="form-control" id="name" name="email">
      </div>

      <div class="form-group">
        <label for="link">Link:</label>
        <input type="text" class="form-control" id="Link" name="Link">
      </div>

      <div class="form-group">
        <label for="description">Mô tả:</label>
        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea name="content" id="content" rows="3" class="form-control"></textarea>
      </div>

      <div class="checkbox">
        <label><input type="checkbox" name="status"> Hiển thị</label>
      </div>

      <hr>

      <button type="submit" class="btn btn-primary">Lưu lại</button>

      <a href="table_cookie.php" class="btn btn-default">Quay lại</a>

    </form>

  </div>

  <script src="ckeditor/ckeditor.js"></script>
  <script>CKEDITOR.replace('content');</script>

</body>
</html>
