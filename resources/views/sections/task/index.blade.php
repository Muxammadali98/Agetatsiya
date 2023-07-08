
      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Task</h2>
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
                      <li class="breadcrumb-item active" aria-current="page">
                        Task
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
                  <div class="row">
                    <div class="col-6">
                      <h6 class="mb-10">Table for Task</h6>
                      <a href="{{ route('task.create') }}" style="padding: 5px" class="main-btn primary-btn btn-hover">Add Task</a>
                    </div>

                    <form class="col-6"  action="{{ route('filterTask') }}" method="GET" style="display: flex; justify-content: flex-end; flex-direction: column;">
                      @csrf
                      <div class="row col-lg-12">
                          <div class="col-xxl-3">
                            <div class="select-style-1">
                              <label>Groups</label>
                              <div class="select-position">
                                <select name="group_id">
                                  <option value="">All</option>
                                  @foreach ($groups as $group)
                                  <option {{ !empty($_GET['group_id'])&&$_GET['group_id']==$group->id? 'selected':''; }} value="{{ $group->id }}">{{ $group->title }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-3">
                            <div class="select-style-1">
                              <label>Compony</label>
                              <div class="select-position">
                                <select name="company_id">
                                  <option value="">All</option>
                                  @foreach ($companies as $compony)
                                  <option {{ !empty($_GET['company_id'])&&$_GET['company_id']==$compony->id? 'selected':''; }} value="{{ $compony->id }}">{{ $compony->title }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-3">
                            <div class="select-style-1">
                              <label>Status</label>
                              <div class="select-position">
                                <select name="status_id">
                                  <option value="">All</option>
                                  <option {{ !empty($_GET['status_id'])&&$_GET['status_id']==1? 'selected':''; }} value="{{ 1 }}">Finished</option>
                                  <option {{ isset($_GET['status_id'])&&$_GET['status_id']==0? 'selected':''; }} value="{{ 0 }}">Un Finished</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-3" style="display: flex; align-items: center" >
                            <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Filter</button>
                          </div>
                  
                        </div>

                    </form>
                  </div>
                @if (!empty($tasks->all()))
                         <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th><h6> Geroups</h6></th>
                          <th><h6> Companies</h6></th>
                          <th><h6> Date</h6></th>
                          <th><h6> Status</h6></th>
                  
                          <th><h6>Update </h6></th>
                            
                          <th><h6> Deete</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>

                        @foreach ($tasks as $task)
                        @php
                           static $i=0;
                            $i++;
                        @endphp
                          <tr>
                            <td>
                              <h6 class="text-sm">#{{ $i }}</h6>
                            </td>
                            <td>
                              <p>{{ $task->group->title }}</p>
                            </td>
                            <td>
                              <p>{{ $task->company->title }}</p>
                            </td>
                            <td>
                              <p>{{ $task->date }}</p>
                            </td>
                            <td>
                              <p>{{ $task->status? 'Finished':'Un Finished' }}</p>
                            </td>

                            <td>
                              <div class="action">
                             
                                <a href="{{ route('task.edit', $task->id) }}" class="text-warning fs-5  ">
                                    <i class="lni lni-eye"></i>
                                </a>
                              </div>
                              </td>
                              <td>
                                <div class="action">
                                <form action="{{ route('task.destroy', $task->id) }}" method="POST">
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
                    Not Task
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
