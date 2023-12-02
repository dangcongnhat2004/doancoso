<!DOCTYPE html>
<html lang="en">
<head>

    <!--md bootstrap-->
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...your-sha512-hash-here..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Nhập</p>
                      @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
                  @if (session('error'))
                  <div class="alert alert-success">
                      {{ session('error') }}
                  </div>
              @endif
              <form class="mx-1 mx-md-4" method="POST" action="{{ URL::to('/doctor-home') }}">

                {{ csrf_field() }}

                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="email" id="form3Example3c" class="form-control" name="email" />
                    <label class="form-label" for="form3Example3c">Tên Đăng Nhập</label>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="password" id="form3Example4c" class="form-control" name="password" />
                    <label class="form-label" for="form3Example4c">Mật Khẩu</label>
                  </div>
                </div>

<!-- Checkbox -->
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
<label class="form-check-label" for="form1Example3">Lưu Mật Khẩu</label>
</div>



                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4"><br>
                  <button type="submit" class="btn btn-primary btn-lg">Đăng Nhập</button>
                </div>

              </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="https://medical3danimationcompany.com/wp-content/uploads/2022/03/Medical-Animation-Explainer-Videos-scaled.jpg"
                        class="img-fluid" alt="Sample image" >

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</html>
