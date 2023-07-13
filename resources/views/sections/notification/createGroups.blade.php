      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Guruhga Bildirishnoma Jonatish</h2>
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
                      <li class="breadcrumb-item"><a href="{{ route('notification.index') }}">Bildirishnoma</a></li>
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
                <form action="{{ route('storeGroup') }}" method="POST">
                  @csrf
   
                  <div class="card-style mb-30">
                    <div style="display: flex; align-items: center; justify-content: space-between">
                    <div class="col-xxl-4">
                      <div class="select-style-1">
                        <label>Guruh</label>
                        <div class="select-position">
                          <select name="group_id">
                            @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->title }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="input-style-3" style="display: flex; justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Jo'natish</button>
                    </div>
                    <input type="hidden" name="type" value="g">
                    </div>
                    <div class="input-style-1">
                      <label>Matin </label>
                      <input type="text" name="text"  placeholder="Matin" />
                      @error('text')
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
