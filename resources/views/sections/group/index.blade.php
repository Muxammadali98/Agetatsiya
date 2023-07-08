
      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Groups</h2>
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
                        Geroups
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
                  <h6 class="mb-10">Table for Groups</h6>
                  <a href="{{ route('group.create') }}" style="padding: 5px" class="main-btn primary-btn btn-hover"
                  >Add Group</a
                >

                @if (!empty($groups->all()))
                         <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th><h6>Title</h6></th>
                          <th><h6>Count Workers</h6></th>
                          <th><h6>Tasks</h6></th>
                          <th><h6>Update </h6></th>
                            
                          <th><h6> Deete</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($groups as $group)
                        @php
                           static $i=0;
                            $i++;
                        @endphp
                          <tr>
                            <td>
                              <h6 class="text-sm">#{{ $i }}</h6>
                            </td>
                            <td>
                              <p>{{ $group->title }}</p>
                            </td>
                            <td>
                              <p>{{ count($group->workers) }}</p>
                            </td>
                            <td>
                              <p>{{ count($group->tasks) }}</p>
                            </td>
                            <td>
                              <div class="action">
                             
                                <a href="{{ route('group.edit', $group->id) }}" class="text-warning fs-5  ">
                                    <i class="lni lni-eye"></i>
                                </a>
                              </div>
                              </td>
                              <td>
                                <div class="action">
                                <form action="{{ route('group.destroy', $group->id) }}" method="POST">
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
                    Not Group
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
