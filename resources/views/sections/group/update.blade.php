      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <a  href="{{ url()->previous() }}" class="btn btn-primary" style=" border-color: #fd621e ; background-color: #fd621e ;  display: flex; width: 100px;justify-content: space-between;align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"></path>
                      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"></path>
                    </svg>
                    Ortga
                  </a>
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
                      <li class="breadcrumb-item"><a href="{{ route('group.index') }}">Guruhlar</a></li>
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
                <form action="{{ route('group.update',$group->id) }}" method="POST">
                  @csrf
                  @method('PATCH')
                  <div class="card-style mb-30">
                    <div class="input-style-3" style="display: flex; justify-content: space-between">
                      <h2>Guruhni O'zgartirish</h2>
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">O'zgartirish</button>
                    </div>
                    <div class="input-style-1">
                      <label>Guruh Nomi</label>
                      <input type="text" value="{{ $group->title }}" name="title" placeholder="Guruh nomi" />
                      @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
         
                    <div class="card-style mb-30">
                      @if (!empty($group->workers->all()) or !empty($workers->all()))
                        <h6 class="mb-10">Hodimlarni Tanlang</h6>
                      @else
                        <h4 class="mb-10"><a href="{{ route('worker.create') }}">Hodim Qo'shish</a> </h4>
                      @endif
                      
             
                      <div class="table-wrapper table-responsive">
                        @if(!empty($group->workers->all()) or !empty($workers->all()))
                        <table class="table striped-table" style="padding: 5px" >
                          <thead>
                            <tr>
                              <th></th>
                              <th><h6>Nomi</h6></th>
                              <th><h6>Familya</h6></th>
                              <th><h6>Shahar</h6></th>
                              <th><h6>Manzil</h6></th>
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
                            Hodim Topilmadi
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
