      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Tashkilotni O'zgartirish</h2>
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
                      <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Tashkilotlar</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        O'zgartirish
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
                <div class="card-style mb-30">
                <form action="{{ route('company.update',$company->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
       
                    <div class="input-style-3" style="display: flex; justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">O'zgartirish</button>
                    </div>
                    <div class="input-style-1">
                      <label>Nomi  </label>
                      <input type="text" value="{{ $company->title }}" name="title" placeholder="Name company" />
                      @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Manzil  </label>
                      <input type="text" value="{{ $company->address }}" name="address" placeholder="Fergana ..." />
                      @error('address')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Rasmlar </label>
                      <input type="file" name="images[]" multiple  />
                    </div>
                  <!-- end col -->
                </form>
                <!-- end card -->
                  <div class="image m-1 d-flex align-items-end">
                    @foreach ($company->images as $image)
                        <img style="height:150px; margin:5px" src="{{ '/images/'.$image->image }}" height="100px" alt="">
                        <form action="{{ route('company.show', $image->id) }}" style="justify-content: end" method="GET">
                          @csrf
                          <button class="text-danger fs-5  " style="border: 0 ; background-color: #fff ">
                            <i class="lni lni-trash-can"></i>
                          </button>
                        </form>
              
                        
                    @endforeach
                  </div>
                </div>
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== tab components end ========== -->
