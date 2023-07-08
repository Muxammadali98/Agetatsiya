      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Create client</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{ route('client.index') }}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('client.index') }}">clients</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Create
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
                <form action="{{ route('client.store') }}" method="POST">
                  @csrf
                  <div class="card-style mb-30">
                    <div class="input-style-3" style="display: flex; justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Create</button>
                    </div>
                    <div class="input-style-1">
                      <label>F.I.O.</label>
                      <input type="text" name="title"  placeholder="F.I.O." />
                      @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="input-style-1">
                      <label>Phone</label>
                      <input type="text" name="phone"  placeholder="+998 90 123 45 67" />
                      @error('phone')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="select-style-1">
                      <label>Status</label>
                      <div class="select-position">
                        <select name="status_id">
                          @foreach ($status as $item)
                          <option value="{{ $item->id }}">{{ $item->title }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="select-style-1">
                      <label>Tasks</label>
                      <div class="select-position">
                        <select name="task_id">
                          @foreach ($tasks as $item)
                          <option value="{{ $item->id }}">{{ $item->company->title }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="select-style-1">
                      <label>Worker</label>
                      <div class="select-position">
                        <select name="worker_id">
                          @foreach ($workers as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="input-style-1">
                      <label>Comment</label>
                      <textarea name="comment" id="" cols="25" rows="10"></textarea>
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
