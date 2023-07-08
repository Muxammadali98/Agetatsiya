      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Update Group</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{ route('group.index') }}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('group.index') }}">Groups</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Update
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
                <form action="{{ route('group.update',$group->id) }}" method="POST">
                  @csrf
                  @method('PATCH')
                  <div class="card-style mb-30">
                    <div class="input-style-3" style="display: flex; justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Update</button>
                    </div>
                    <div class="input-style-1">
                      <label>Title Group</label>
                      <input type="text" value="{{ $group->title }}" name="title" placeholder="Title Group" />
                      @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
         
                    <div class="card-style mb-30">
                      @if (!empty($group->workers->all()) or !empty($workers->all()))
                        <h6 class="mb-10">Select Workers</h6>
                      @else
                        <h4 class="mb-10"><a href="{{ route('worker.create') }}">Create Workers </a> </h4>
                      @endif
                      
             
                      <div class="table-wrapper table-responsive">
                        @if(!empty($group->workers->all()) or !empty($workers->all()))
                        <table class="table striped-table">
                          <thead>
                            <tr>
                              <th></th>
                              <th><h6>Name</h6></th>
                              <th><h6>Surname</h6></th>
                              <th><h6>City</h6></th>
                              <th><h6>Address</h6></th>
                            </tr>
                            <!-- end table row-->
                          </thead>
                          <tbody>
                            @foreach ($group->workers as $worker)
                  
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input name="workers[]"
                                    value="{{ $worker->id }}"
                                      class="form-check-input"
                                      type="checkbox"
                                      checked
                                      id="checkbox-1"
                                    />
                                  </div>
                                </td>
                                <td>
                                  <p>{{ $worker->name }}</p>
                                </td>
                                <td>
                                  <p>{{ $worker->surname }}</p>
                                </td>
                                <td>
                                  <p>{{ $worker->city->name }}</p>
                                </td>
                                <td>
                                  <p>{{ $worker->address }}</p>
                                </td>
                                {{-- <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td> --}}
                              </tr>
              
                            @endforeach
                            @foreach ($workers as $worker)
                  
                              <tr>
                                <td>
                                  <div class="check-input-primary">
                                    <input name="workers[]"
                                    value="{{ $worker->id }}"
                                      class="form-check-input"
                                      type="checkbox"
                                 
                                      id="checkbox-1"
                                    />
                                  </div>
                                </td>
                                <td>
                                  <p>{{ $worker->name }}</p>
                                </td>
                                <td>
                                  <p>{{ $worker->surname }}</p>
                                </td>
                                <td>
                                  <p>{{ $worker->city->name }}</p>
                                </td>
                                <td>
                                  <p>{{ $worker->address }}</p>
                                </td>
                                {{-- <td>
                                  <div class="action">
                                    <button class="text-danger">
                                      <i class="lni lni-trash-can"></i>
                                    </button>
                                  </div>
                                </td> --}}
                              </tr>
              
                            @endforeach
                          </tbody>
                        </table>
                        @else
                
                        <div class="input-style-3" style="display: flex; justify-content: center">
                          <h2>
                            Not Workers
                          </h2>
                        </div>
                        @endif
                        <!-- end table -->
                      </div>
                    </div>
                    <!-- end card -->
                 
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
