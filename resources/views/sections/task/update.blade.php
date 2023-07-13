      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Topshiriqni O'zgartirish</h2>
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
                <form action="{{ route('task.update',$task->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-style mb-30">
                    <div class="input-style-3" style="display: flex;   justify-content: right">
                      <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Update</button>
                    </div>
                    <div class="row">
                      <div class="col-xxl-4">
                        <div class="select-style-1">
                          <label>Guruh</label>
                          <div class="select-position">
                            <select name="group_id">
                              @foreach ($groups as $group)
                              <option {{ $task->group_id == $group->id?'selected':'' }} value="{{ $group->id }}">{{ $group->title }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-4">
                        <div class="select-style-1">
                          <label>Tashkilot</label>
                          <div class="select-position">
                            <select name="company_id">
                              @foreach ($companies as $compony)
                              <option {{ $task->company_id == $compony->id?'selected':'' }} value="{{ $compony->id }}">{{ $compony->title }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-4">
                        <div class="input-style-1">
                          <label>Sana</label>
                          <input type="date" value="{{ $task->date }}" name="date" placeholder="City" />
                          @error('date')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
  
                    </div>
                    <div class="row">
                      <div >

                        <label for="">Bajarilgan </label>
                        <input {{ $task->status == 1?'checked':'' }} value="1" type="checkbox" name="status">
                      </div>
                    </div>
                    
                 
                  </div>
                  <!-- end col -->


         

                </form>
                <!-- end card -->

                <h6>Mijozlar</h6>
                <div class="card-style mb-30">
                  <div class="table-wrapper table-responsive">
                    @if(!empty($task->clients->all()))
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th><h6>Nomi</h6></th>
                          <th><h6>Holat</h6></th>
                          <th><h6>Tel Raqami</h6></th>
                          <th><h6>Izoh</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        @foreach ($task->clients as $client)
              
                          <tr>
                            <td>
                              {{-- <div class="check-input-primary">
                                <input name="clients[]"
                                value="{{ $client->id }}"
                                  class="form-check-input"
                                  type="checkbox"
                                  checked
                                  id="checkbox-1"
                                />
                              </div> --}}
                            </td>
                            <td>
                              <p>{{ $client->title }}</p>
                            </td>
                            <td>
                              <p>{{ $client->status->title }}</p>
                            </td>
                            <td>
                              <p>{{ $client->phone }}</p>
                            </td>
                            <td>
                              <p>{{ $client->comment }}</p>
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
                        Mijozlar Mavjud emas
                      </h2>
                    </div>
                    @endif
                    <!-- end table -->
                  </div>
                </div>

            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== tab components end ========== -->
