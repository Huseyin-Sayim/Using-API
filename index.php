<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

  <form action="cURL.php" method="post" class="w-50 my-5 mx-auto">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Age</label>
      <input type="number" name="age" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Birthday</label>
      <input type="datetime-local" name="birthday" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <button class="close_form w-100 btn btn-primary my-3">Formu Kapat</button>

  <button class="run_api w-100 btn btn-secondary my-3">Api Kullan</button>

  <div id="api" class="w-50 mx-auto my-3">

  </div>
  
  <script src="script.js"></script>
</body>
</html>

