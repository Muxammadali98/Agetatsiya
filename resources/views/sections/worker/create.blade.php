      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Hodim Qo'shish</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{ route('group.index') }}">Bosh sahifa</a>
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('worker.index') }}">Hodimlar</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Yaratish
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <!-- input style start -->
                <form action="{{ route('worker.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-style mb-30">
                    <div class="input-style-3" style="display: flex; justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Saqlash</button>
                    </div>
                    <div class="input-style-1">
                      <label>Nomi</label>
                      <input type="text" name="name"  placeholder="Nomi" />
                      @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Familya</label>
                      <input type="text" name="surname"  placeholder="Familya" />
                      @error('surname')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Foydalanuvchi Nomi</label>
                      <input type="text" name="username"  placeholder="Usernamel" />
                      @error('username')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Telefon Raqami </label>
                      <input type="text" name="phone"  placeholder="+998907823396" />
                      @error('phone')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Rasim</label>
                      <input type="file" name="image" />
                      @error('image')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="select-style-1">
                      <label>Shahar</label>
                      <div class="select-position">
                        <select name="city_id">
                          @foreach ($cities as $city)
                          <option value="{{ $city->id }}">{{ $city->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="input-style-1">
                      <label>Manzil</label>
                      <input type="text" name="address"  placeholder="Address " />
                      @error('address')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Parol</label>
                      <input type="password" name="password"  placeholder="password " />
                      @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Parolni aytadan kiriting</label>
                      <input type="password" name="confirm_password"  placeholder="Confirmation password" />
                      @error('confirm_password')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <!-- end col -->
                </form>
                <!-- end card -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== tab components end ========== -->
