<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Admin</title>
</head>

<body>
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Selamat Datang <?= $user['username']?></h5>
        <p class="card-text">Admin Sejak : <?= date('d M Y',$user['date_created']);?></p>
        <a href="#" class="btn btn-primary">Profile Info</a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>