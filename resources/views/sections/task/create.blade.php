      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Topshiriq Qo'shish</h2>
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
                      <li class="breadcrumb-item"><a href="{{ route('task.index') }}">Topshiriqlar</a></li>
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
                <form action="{{ route('task.store') }}" method="POST">
                  @csrf
                  <div class="card-style mb-30">
                    <div class="input-style-3" style="display: flex;   justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Saqlash</button>
                    </div>
                    <div class="row">
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
                      <div class="col-xxl-4">
                        <div class="select-style-1">
                          <label>Tashkilot </label>
                          <div class="select-position">
                            <select name="company_id">
                              @foreach ($companies as $compony)
                              <option value="{{ $compony->id }}">{{ $compony->title }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-4">
                        <div class="input-style-1">
                          <label>Sana</label>
                          <input type="date" name="date" placeholder="City" />
                          @error('date')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
  
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
