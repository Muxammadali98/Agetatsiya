
      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Tables</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Workers
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
                  <h6 class="mb-10">Table for Workers</h6>
                  <a href="{{ route('worker.create') }}" style="padding: 5px" class="main-btn primary-btn btn-hover"
                  >Add Worker</a
                >

                @if (!empty($workers->all()))
                  <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                          <tr>
                            <th><h6>Name</h6></th>
                            <th><h6>Surname</h6></th>
                            <th><h6>Group Name</h6></th>
                            <th><h6>Job Title</h6></th>
                            <th><h6>City Name</h6></th>
                            <th><h6>Address</h6></th>
                            <th><h6> Show</h6></th>
                            <th><h6> Delete</h6></th>
                          </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        @foreach ($workers as $worker)
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">
                                <img
                                  src="{{ 'images/'.$worker->image }}"
                                  alt=""
                                />
                              </div>
                              <div class="lead-text">
                                <p>{{ $worker->name }}</p>
                              </div>
                            </div>
                          </td>
                   
            
                          <td>
                            <p>{{ $worker->surname }}</p>
                          </td>
                          <td>
                            <p>{{ is_null($worker->group_id)? 'Not group' : $worker->group->title }}</p>
                          </td>
                          <td>
                            <p>{{ $worker->job_title==0? 'Worker' : 'Leader' }}</p>
                          </td>
                          <td>
                            <p>{{ is_null($worker->city_id)? 'Not city' : $worker->city->name }}</p>
                          </td>              
                          <td>
                            <p>{{ $worker->address }}</p>
                          </td>
                          <td>
                            <div class="action">
                           
                              <a href="{{ route('worker.show', $worker->id) }}" class="text-warning fs-5 ">
                                  <i class="lni lni-eye"></i>
                              </a>
                            </div>
                          </td>
                          <td>
                            <div class="action">
                            <form action="{{ route('worker.destroy', $worker->id) }}" method="POST">
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
                      Not Worker
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
