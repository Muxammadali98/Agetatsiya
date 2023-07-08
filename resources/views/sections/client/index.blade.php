
      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Clients</h2>
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
                        Clients
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
                      <h6 class="mb-10">Table for clients</h6>
                      <a href="{{ route('client.create') }}" style="padding: 5px" class="main-btn primary-btn btn-hover">Add Client</a>
                    </div>
                    
                    <form class="col-6"  action="{{ route('filterClient') }}" method="GET" style="display: flex; justify-content: flex-end; flex-direction: column;">
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
                              <label>Status</label>
                              <div class="select-position">
                                <select name="status_id">
                                  <option value="">All</option>
                                  @foreach ($statuses as $status)
                                  <option {{ !empty($_GET['status_id'])&&$_GET['status_id']==$status->id? 'selected':''; }} value="{{ $status->id }}">{{ $status->title }}</option>
                                  @endforeach
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
      

                  @if (!empty($clients->all()))
                          <div class="table-wrapper table-responsive">
                      <table class="table striped-table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th><h6>Title</h6></th>
                            <th><h6>Phone</h6></th>
                            <th><h6>Status</h6></th>
                            <th><h6>Worker</h6></th>
                            <th><h6>Group</h6></th>
                            <th><h6>Comment</h6></th>
                            <th><h6>Update </h6></th>
                              
                            <th><h6> Delete</h6></th>
                          </tr>
                          <!-- end table row-->
                        </thead>
                        <tbody>

                          @foreach ($clients as $client)
                          @php
                            static $i=0;
                              $i++;
                          @endphp
                            <tr>
                              <td>
                                <h6 class="text-sm">#{{ $i }}</h6>
                              </td>
                              <td>
                                <p>{{ $client->title }}</p>
                              </td>
                              <td>
                                <p>{{ $client->phone }}</p>
                              </td>
                              <td>
                                <p>{{ $client->status->title }}</p>
                              </td>
                              <td>
                                <p>{{ $client->worker->name }}</p>
                              </td>
                              <td>
                                <p>{{ $client->group->title }}</p>
                              </td>
                              <td>
                                <p>{{ $client->comment }}</p>
                              </td>
                              <td>
                                <div class="action">
                              
                                  <a href="{{ route('client.edit', $client->id) }}" class="text-warning fs-5  ">
                                      <i class="lni lni-eye"></i>
                                  </a>
                                </div>
                                </td>
                                <td>
                                  <div class="action">
                                  <form action="{{ route('client.destroy', $client->id) }}" method="POST">
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
                    Not client
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
