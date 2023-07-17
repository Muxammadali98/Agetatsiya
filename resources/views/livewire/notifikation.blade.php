<div>
                    <!-- message start -->
                    <div class="header-message-box ml-15 d-none d-md-flex">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          id="message"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                        <i class="lni lni-envelope"></i>
                        @empty(!$count)
                            
                        
                          <span>{{  $count }}</span>
                          @endempty
                        </button>

                       

                        @empty(!$count)
                        <ul
                          class="dropdown-menu dropdown-menu-end"
                          aria-labelledby="message"
                        >


                        @foreach ($chats as $chat)
                            
                      
                          <li>
                            <a  href="/chat?id={{ $chat->id }}">
                              <div class="image">
                                <img src="{{ $chat->worker->image?'/images/'. $chat->worker->image : '/assets/images/profile/man.png' }}" alt="" />
                              </div>
                              <div class="content">
                                <h6>{{ $chat->worker->name }}</h6>
                                <p>{{ $chat->messages->last()->text }}</p>
                                <span>{{ $chat->messages->last()->created_at->format('H:i') }}</span>
                                <span style="color: #fff" class="badge bg-danger float-end">{{ $chat->message}}</span>
                              </div>
                            </a>
                          </li>
                        
                          @endforeach

                          @endempty
               
               
               
                          {{-- <li>
                            <a href="#0">
                              <div class="image">
                                <img src="/assets/images/lead/lead-3.png" alt="" />
                              </div>
                              <div class="content">
                                <h6>John Doe</h6>
                                <p>Would you mind please checking out</p>
                                <span>12 mins ago</span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#0">
                              <div class="image">
                                <img src="/assets/images/lead/lead-2.png" alt="" />
                              </div>
                              <div class="content">
                                <h6>Anee Lee</h6>
                                <p>Hey! are you available for freelance?</p>
                                <span>1h ago</span>
                              </div>
                            </a>
                          </li> --}}
                        </ul>
                      </div>
                      <!-- message end -->
</div>
