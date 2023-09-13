<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/Ingot.css">
    <title>PEnimbang/Vendor</title>
</head>
<body>
    <div class="container-fluid" id="form"> 
        <div class="row">
          <div class=" d-flex justify-content-center "><p class="fs-3">STOCK INGOT</p></div>
          <div class=" d-flex justify-content-end ">
            <div id= "date" class="fs-5"> </div>
          </div>

          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link {{( $input === "LihatIngot") ? 'active' : ''}}" href="/LihatIngot">Lihat Ingot</a>
                  <a class="nav-link {{( $input === "InputIngot") ? 'active' : ''}}" aria-current="input" href="/InputIngot">Input Ingot</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
    </div>
    
    <div class="card">

    </div>
</body>
</html>