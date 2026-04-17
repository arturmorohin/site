<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ввод</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1>Добавление записи</h1>
  <form action="./data_create.php" method="POST" enctype="multipart/form-data" style="margin:30px">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Название товара</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Цена</label>
      <input type="number" name="price" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Описание</label>
      <textarea name="description" class="form-control" ></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Картинка</label>
      <input type="file" name="img" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Создать товар</button>
  </form>

  <script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </script>
  
</body>

</html>