
      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Shaharlar</h2>
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
                      <li class="breadcrumb-item active" aria-current="page">
                        Shaharlar
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
                  <h6 class="mb-10">Shaharlar Jadvali</h6>
                  <a href="{{ route('city.create') }}" style="padding: 5px" class="main-btn primary-btn btn-hover"
                  >Shahar Qo'shish</a
                >

                @if (!empty($cities->all()))
                         <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th><h6>Shahar Nomi</h6></th>
                  
                          <th><h6>O'zgartirish </h6></th>
                            
                          <th><h6>O'chirish</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($cities as $group)
                        @php
                           static $i=0;
                            $i++;
                        @endphp
                          <tr>
                            <td>
                              <h6 class="text-sm">#{{ $i }}</h6>
                            </td>
                            <td>
                              <p>{{ $group->name }}</p>
                            </td>

                            <td>
                              <div class="action">
                             
                                <a href="{{ route('city.edit', $group->id) }}" class="text-warning fs-5  ">
                                    <i class="lni lni-eye"></i>
                                </a>
                              </div>
                              </td>
                              <td>
                                <div class="action">
                                <form action="{{ route('city.destroy', $group->id) }}" method="POST">
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
                    Shahar mavj emas
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
