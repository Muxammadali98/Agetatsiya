
      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Bildirishnomalar</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{ route('status.index') }}">Bosh sahifa</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Bildirishnomalar
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

          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">

            <div class="row">
              <!-- end col -->
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Bildirishnomalar Jadvali</h6>
                  <a href="{{ route('createGroup') }}" style="padding: 5px" class="main-btn primary-btn btn-hover m-3">Bildirishnoma Guruh uchun</a>
                  <a href="{{ route('notification.create') }}" style="padding: 5px" class="main-btn primary-btn btn-hover m-3">Bildirishnoma Hodimlar uchun</a>

                @if (!empty($notifications->all()))
                  <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th><h6>Bildirishnoma matni</h6></th>
                          <th><h6>Bildirishnoma Turi</h6></th>
                  
                          {{-- <th><h6>Update </h6></th> --}}
                            
                          <th><h6> O'chirish</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($notifications as $status)
                        @php
                           static $i=0;
                            $i++;
                        @endphp
                          <tr>
                            <td>
                              <h6 class="text-sm">#{{ $i }}</h6>
                            </td>
                            <td>
                              <p>{{ $status->text }}</p>
                            </td>
                            <td>
                              <p>
                                @php
                                    if ($status->type == 'l') {
                                      echo 'For Leaders' ;
                                    }elseif ($status->type == 'w') {
                                      echo 'For All Workers' ;
                                    }else{
                                      echo "For  Group ". $status->group->title ;
                                    }
                                @endphp
                              </p>
                            </td>

                            {{-- <td>
                              <div class="action">
                                <a href="{{ route('status.edit', $status->id) }}" class="text-warning fs-5  ">
                                    <i class="lni lni-eye"></i>
                                </a>
                              </div>
                              </td> --}}
                              <td>
                                <div class="action">
                                <form action="{{ route('status.destroy', $status->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="text-danger fs-5">
                                    <i class="lni lni-trash-can"></i>
                                  </button>
                                </form>
                              </div>
                            </td> 
                          </tr>
                        @endforeach
                        <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                @else
                <div class="input-style-3" style="display: flex; justify-content: center">
                  <h2>
                    Bildirishnoma Topilmadi
                  </h2>
                </div>
                @endif
             
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== table components end ========== -->