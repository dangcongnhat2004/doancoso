@extends('user_layout')
@section('content')


  <!--Main layout-->
  <main class="mt-4 mb-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <!--Section: Post data-mdb-->
          //hình ảnh
          <section class="border-bottom mb-4">
            {{-- Kiểm tra xem $news có tồn tại và thumbnall không phải là null --}}
                <img src="{{ asset($news->thumbnall) }}" class="img-fluid shadow-2-strong rounded mb-4" alt="{{ $news->title }}" />

        </section>


        <!-- Section: Post data-mdb -->
        <section>
            {{-- Kiểm tra xem $news có tồn tại và description không phải là null --}}
                <p><strong>{!! e($news->description) !!}</strong></p>


            {{-- Kiểm tra xem $news có tồn tại và content không phải là null --}}
                <p>{!! nl2br(e($news->content)) !!}</p>

        </section>



          <!--Section: Share buttons-->
          <section class="text-center border-top border-bottom py-4 mb-4">
            <p><strong>Chia sẻ với bạn bè:</strong></p>

            <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init style="background-color: #3b5998;">
              <i class="fab fa-facebook-f"></i>
            </button>
            <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init style="background-color: #55acee;">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init style="background-color: #0082ca;">
              <i class="fab fa-linkedin"></i>
            </button>
            <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init>
              <i class="fas fa-comments me-2"></i>Bình luận
            </button>
          </section>
          <!--Section: Share buttons-->

          <!--Section: Author-->
          <section class="border-bottom mb-4 pb-4">
            <div class="row">
              <div class="col-3">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg"
                  class="img-fluid shadow-1-strong rounded" alt="" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Anna Maria Doe</strong></p>
                <a href="" class="text-dark"><i class="fab fa-facebook-f me-1"></i></a>
                <a href="" class="text-dark"><i class="fab fa-twitter me-1"></i></a>
                <a href="" class="text-dark"><i class="fab fa-linkedin me-1"></i></a>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                  inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                  Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                </p>
              </div>
            </div>
          </section>
          <!--Section: Author-->

          <!--Section: Comments-->
          <section class="border-bottom mb-3">
            <p class="text-center"><strong>Số lượt bình luận: 3</strong></p>

            <!-- Comment -->
            <div class="row mb-4">
              <div class="col-2">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                  class="img-fluid shadow-1-strong rounded" alt="" />
              </div>

              <div class="col-10">
                <p class="mb-2"><strong>Marta Dolores</strong></p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                  inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                  Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                </p>
              </div>
            </div>

            <!-- Comment -->
            <div class="row mb-4">
              <div class="col-2">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
                  class="img-fluid shadow-1-strong rounded" alt="" />
              </div>

              <div class="col-10">
                <p class="mb-2"><strong>Valeria Groove</strong></p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                  inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                  Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                </p>
              </div>
            </div>

            <!-- Comment -->
            <div class="row mb-4">
              <div class="col-2">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                  class="img-fluid shadow-1-strong rounded" alt="" />
              </div>

              <div class="col-10">
                <p class="mb-2"><strong>Antonia Velez</strong></p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                  inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                  Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                </p>
              </div>
            </div>
          </section>
          <!--Section: Comments-->

          <!--Section: Reply-->
          <section>
            <p class="text-center"><strong>Leave a reply</strong></p>

            <form>
              <!-- Name input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="text" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">Họ tên</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">Địa chỉ email</label>
              </div>

              <!-- Message input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Nội dung</label>
              </div>

              <!-- Checkbox -->

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                Đăng
              </button>
            </form>
          </section>
          <!--Section: Reply-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <div class="bg-image hover-overlay mb-4" data-mdb-ripple-init>
                <img
                  src="https://moh.gov.vn/documents/20182/0/ch%E1%BB%89+m%E1%BB%A5c+%281%29.jpg/0d1a9e4b-29c0-4b29-aa8b-6001a78f52fd?t=1550469174025"
                  class="img-fluid" />
                <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
              </div>

              <p>
                Bộ Y tế là cơ quan chính phủ chịu trách nhiệm quản lý và hướng dẫn ngành y tế, chăm sóc sức khỏe và y tế của Việt Nam.
              </p>

            </section>
            <!--Section: Ad-->

            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Thông điệp 2K+ phòng chống dịch COVID-19| Kênh thông tin Bộ Y tế</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/0EmcQx_Y8nw" poster="https://i.ytimg.com/vi/0EmcQx_Y8nw/hqdefault.jpg"></iframe>
                allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->
          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  </main>
  <!--Main layout-->


@endsection
