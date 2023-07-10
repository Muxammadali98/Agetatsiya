
<div>
  <section style="table-components">
    <div class="container py-5">
      
      <div class="row">
  
        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
  
          <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>
  
          <div class="card">
            <div class="card-body">
  
              <ul class="list-unstyled mb-0" style="height: 540px; overflow-y:auto">
                {{-- <li class="p-2 border-bottom" style="background-color: #eee;">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">John Doe</p>
                        <p class="small text-muted">Hello, Are you there?</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">Just now</p>
                      <span class="badge bg-danger float-end">1</span>
                    </div>
                  </a>
                </li> --}}
  
  
                @foreach ($chats as $chat)
                    <li class="p-2 border-bottom">
                      <a href="{{ route('messages',$chat->id) }}" class="d-flex justify-content-between">
                        <div class="d-flex flex-row">
                          <img height="60px" width="60px"  src="/images/{{ $chat->worker->image }}" alt="avatar"
                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                          <div class="pt-1">
                            <div style="display: flex">
  
                              <p style="margin-right: 15px" class="fw-bold mb-0">{{ $chat->worker->name }}</p>
                              <p style="font-size: 10 px; color: rgb(150, 150, 135)">{{ $chat->messages[0]->created_at->format('d M') }}</p>
                            </div>
                            <p class="small text-muted">{{ substr($chat->messages[0]->text, 0,30 ) }}</p>
                          </div>
                        </div>
                        <div class="pt-1">
                          <p class="small text-muted mb-1">{{ $chat->messages[0]->created_at->format('H:i') }}</p>
                          <span class="badge bg-danger float-end">1</span>
                        </div>
                      </a>
                    </li>
                @endforeach
  
              </ul>
  
            </div>
          </div>
  
        </div>
  
        @if (\Session::has('message'))
            <h1>{{ session('message') }}</h1>
        @endif      
        @if (!empty($messages->all()))
          <div class="col-md-6 col-lg-7 col-xl-8">
  
            <ul class="list-unstyled " style="height: 500px; overflow-y:auto">
  
              
            
  
                @foreach ($messages as $message)
  
  
                @if ($message->is_admin)
  
  
                    <li class="d-flex justify-content-between mb-4">
                      <div class="card w-100">
                        <div class="card-header d-flex justify-content-between p-3">
                          <p class="text-muted small mb-0"><i class="far fa-clock"></i> {{ $message->created_at->format('H:i') }}</p>
                          <p class="fw-bold mb-0">{{ $message->chat->user->name }}</p>
                        </div>
                        <div class="card-body">
                          <p class="mb-0 d-flex justify-content-end">
                            {{ $message->text }}
                          </p>
                        </div>
                      </div>
                      <img height="60px" width="60px" src="/assets/images/profile/profile-image.png" alt="avatar"
                        class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                    </li>
  
                @else
  
                    <li  class="d-flex justify-content-start mb-4">
                      <a href="#" wire:click="messageDelete({{ $message->id }})">Delete</a>
  
                      <img src="/images/{{ $message->chat->worker->image }}" alt="avatar"
                        class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" height="60px" width="60">
                      <div class="card w-100">
                        <div class="card-header d-flex justify-content-between p-3">
                          <p class="fw-bold mb-0">{{ $message->chat->worker->name }}</p>
                          <p class="text-muted small mb-0"><i class="far fa-clock"></i> {{ $message->created_at->format('H:i') }}</p>
                        </div>
                        <div class="card-body">
                          <p class="mb-0">
                            {{ $message->text }}
                          </p>
                        </div>
                      </div>
                    </li>
  
                @endif
                    
  
  
              
                @endforeach
                  
              
  
            </ul>
              <form action="/messages" method="POST">
                @csrf
                <div class="form-outline">
                  <textarea class="form-control" required style="resize: none" id="textAreaExample2" rows="4" name="text" placeholder="Message" ></textarea>
                </div>
                @error('text')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="hidden" name="chat_id" value="{{ $message->chat_id }}" id="">
                <button id= "form"  class="btn btn-info btn-rounded float-end m-2 ">Send</button>
              </form>
              
          </div>
        @endif
  
      </div>
  
  
      <button id="emit" wire:click="createEvent">clic </button>
  
  
    </div>
  
    <script>
      let button = document.getElementById('emit');

  
      function test(){
        console.log('test ishladi');
        Livewire.emit('postAdded');
        button.click()
      }
  
  
  
    </script>
  </section>
</div>