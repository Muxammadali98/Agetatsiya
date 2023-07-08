      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="titlemb-30">
                  <h2>Profile</h2>
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
                      <li class="breadcrumb-item"><a href="{{ route('worker.index') }}">Workers</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Profile
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

          <div class="row">
            <div class="col-lg-12">
              <div class="card-style settings-card-1 mb-30  ">
                <div
                  class="
                    title
                    mb-30
                    d-flex
                    justify-content-between
                    align-items-center
                  "
                >
                  <h6> Profile</h6>

                </div>
                <div class="profile-info">
                    <form action="{{ route('worker.update', $worker->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="d-flex align-items-center mb-30">
                            <div class="profile-image">
                            <img height="75px" width="75px" src="{{ '/images/'.$worker->image}}" alt="" />
                            <div class="update-image">
                                <input name="image" type="file" id="image"/>
                                <label for="image"
                                ><i class="lni lni-cloud-upload"></i
                                ></label>
                            </div>
                            </div>
                            <div class="profile-meta">
                            <h5 class="text-bold text-dark mb-10">{{ $worker->name }}</h5>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-style-1">
                                    <label>Name*</label>
                                    <input
                                    name="name"
                                    type="text"
                                    value="{{ $worker->name }}"
                                    />
                                </div>
                                <div class="input-style-1">
                                    <label>Surname*</label>
                                    <input
                                    name="surname"
                                    type="text"
                                    value="{{ $worker->surname }}"
                                    />
                                </div>                                
                                <div class="input-style-1">
                                    <label>Username*</label>
                                    <input
                                    name="username"
                                    type="text"
                                    value="{{ $worker->username }}"
                                    />
                                </div>                                
                                <div class="select-style-1">  
                                  <label>Group</label>
                                  <div class="select-position">
                                    <select name="group_id" class="light-bg">
                                      <option value=""> Empty </option>
                                      @foreach ($groups as $group)

                                      <option {{ $group->id == $worker->group_id?'selected':'' }} value="{{ $group->id }}">{{ $group->title }}</option>
                                          
                                      @endforeach
                                    </select>
                                  </div>
                                </div>           
                                <div class="input-style-1">
                                    <label>Password</label>
                                    <input 
                                    name="password"
                                    type="password" />
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="select-style-1">
                                  <label>City</label>
                                  <div class="select-position">
                                    <select name="city_id" class="light-bg">
                                      @foreach ($cities as $city)

                                      <option {{ $city->id == $worker->city_id?'selected':'' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                          
                                      @endforeach
                                    </select>
                                  </div>
                                </div>  
                    
                                <div class="input-style-1">
                                    <label>Address*</label>
                                    <input
                                    name="address"
                                    type="text"
                                    value="{{ $worker->address }}"
                                    />
                                </div>           
                                <div class="select-style-1">
                                  <label>Status*</label>
                                  <div class="select-position">
                                    <select name="status" class="light-bg">
                                      <option value=1>Active</option>

                                      <option {{ 0 == $worker->status?'selected':'' }} value="">Not Active</option>
                                          
                                    </select>
                                  </div>
                                </div>
                                <div class="select-style-1">
                                  <label>Job Title*</label>
                                  <div class="select-position">
                                    <select name="job_title" class="light-bg">
                                      <option value=1>Leader</option>

                                      <option {{ 0 == $worker->job_title?'selected':'' }} value="">Worker</option>
                                          
                                    </select>
                                  </div>
                                </div>
                                <div class="input-style-1" style="display: flex; justify-content: right; margin-top: 70px ">
                                    <button style="padding: 10px 30px" class="main-btn primary-btn btn-hover">Save Change</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
            {{-- 
            <div class="col-lg-6">
              <div class="card-style settings-card-2 mb-30">
                <div class="title mb-30">
                  <h6>My Profile</h6>
                </div>
                <form action="#">
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Full Name</label>
                        <input type="text" placeholder="Full Name" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" placeholder="Email" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Company</label>
                        <input type="text" placeholder="Company" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Address</label>
                        <input type="text" placeholder="Address" />
                      </div>
                    </div>
                    <div class="col-xxl-4">
                      <div class="input-style-1">
                        <label>City</label>
                        <input type="text" placeholder="City" />
                      </div>
                    </div>
                    <div class="col-xxl-4">
                      <div class="input-style-1">
                        <label>Zip Code</label>
                        <input type="text" placeholder="Zip Code" />
                      </div>
                    </div>
                    <div class="col-xxl-4">
                      <div class="select-style-1">
                        <label>Country</label>
                        <div class="select-position">
                          <select class="light-bg">
                            <option value="">Select category</option>
                            <option value="">USA</option>
                            <option value="">UK</option>
                            <option value="">Canada</option>
                            <option value="">India</option>
                            <option value="">Bangladesh</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>About Me</label>
                        <textarea placeholder="Type here" rows="6"></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Update Profile
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end card -->
            </div> --}}
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->