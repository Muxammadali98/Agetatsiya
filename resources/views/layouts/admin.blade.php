<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"
      href="/assets/images/favicon.svg"
      type="image/x-icon"
    />



    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/build/assets/app-1e2735e2.css">
    <link rel="stylesheet" href="/build/manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Add Bootstrap CSS and JavaScript to the head of your HTML file -->
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> --}}


    @livewireStyles()
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="/">
          <img src="/assets/images/logo/logo.svg" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item {{ request()->is('/') || request()->is('2')? 'active' : '' }}">
            <a href="/" >
              <span style="{{ request()->is('/') || request()->is('2')? 'color: #4a6cf7;' : '' }}" class="text">Statistika</span>
            </a>
          </li>      <li class="nav-item {{ request()->is('group')? 'active' : '' }}">
            <a href="{{ route('group.index') }}" >
              <span style="{{ request()->is('group')? 'color: #4a6cf7;' : '' }}" class="text">Guruhlar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('moderation')? 'active' : '' }}" >
            <a href="/moderation" >
              <span style="{{ request()->is('moderation')? 'color: #4a6cf7;' : '' }}" class="text">Moderatsiya</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('city')? 'active' : '' }}">
            <a href="{{ route('city.index') }}">
              <span style="{{ request()->is('city')? 'color: #4a6cf7;' : '' }}" class="text">Shaharlar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('worker')? 'active' : '' }}">
            <a href="{{ route('worker.index') }}">
              <span style="{{ request()->is('worker')? 'color: #4a6cf7;' : '' }}" class="text">Hodimlar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('task')? 'active' : '' }}">
            <a href="{{ route('task.index') }}">
              <span style="{{ request()->is('task')? 'color: #4a6cf7;' : '' }}" class="text">Topshiriqlar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('client')? 'active' : '' }}">
            <a href="{{ route('client.index') }}">
              <span style="{{ request()->is('client')? 'color: #4a6cf7;' : '' }}" class="text">Mijozlar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('status')? 'active' : '' }}">
            <a href="{{ route('status.index') }}">
              <span style="{{ request()->is('status')? 'color: #4a6cf7;' : '' }}" class="text">Holatlar(Status)</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('company')? 'active' : '' }}">
            <a href="{{ route('company.index') }}">
              <span style="{{ request()->is('company')? 'color: #4a6cf7;' : '' }}" class="text">Tashkilotlar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('chat')? 'active' : '' }}">
            <a href="{{ route('chat') }}">
              <span style="{{ request()->is('chat')? 'color: #4a6cf7;' : '' }}" class="text">Yozishmalar</span>
            </a>
          </li>
          <li class="nav-item {{ request()->is('notification')? 'active' : '' }}">
            <a href="{{ route('notification.index') }}">
              <span style="{{ request()->is('notification')? 'color: #4a6cf7;' : '' }}" class="text">Bildirishnoma</span>
            </a>
          </li>
        </ul>
      </nav>

    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                {{-- <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div> --}}
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                {{-- <!-- notification start -->
                <div class="notification-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="notification"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-alarm"></i>
                    <span>2</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="notification"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="/assets/images/lead/lead-6.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            John Doe
                            <span class="text-regular">
                              comment on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="/assets/images/lead/lead-1.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            Jonathon
                            <span class="text-regular">
                              like on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- notification end --> --}}


                @livewire('notifikation')


                {{-- <!-- filter start -->
                <div class="filter-box ml-15 d-none d-md-flex">
                  <button class="" type="button" id="filter">
                    <i class="lni lni-funnel"></i>
                  </button>
                </div>
                <!-- filter end --> --}}
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6>{{ auth()->user()->name }}</h6>
                        <div class="image">
                          <img
                              style="width: 42px; height: 42px"
                            src="{{ auth()->user()->image?'/images/'. auth()->user()->image : '/images/profile-icon.png' }}"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    <li>
                      <a href="/profile">
                        <i class="lni lni-user"></i> Shaxsiy ma'lumotlar
                      </a>
                    </li>

                    <li>

                        <button style="display: block; width: 100%; background: none; border: none "  data-bs-toggle="modal" data-bs-target="#logoutModal">
                          <a> <i class="lni lni-exit"></i> Chiqish </a>
                        </button>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

        @yield('content')

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a
                    href="https://plainadmin.com"
                    rel="nofollow"
                    target="_blank"
                  >

                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
              >
                <a href="#0" class="text-sm"> Company Find Work</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->

          <!-- Modal -->
          <div class="modal fade " id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- modal-dialog-centered - ekran o'rtasiga joylash -->
                  <div class="modal-content" style="width: 300px; margin: 0 auto">
                      <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">{{ "Ma'lumotni o'chirilsinmi?" }}</h5>
{{--                          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
                      </div>
                      <div  class="action d-flex justify-content-end ">
                          <button data-bs-dismiss="modal" class="text-danger fs-5 m-2 ">
                              <span class="badge rounded-pill bg-gray-500" style="font-size: 15px">Yopish</span>
                          </button>
                          <form action="" id="deleteItem" method="POST" class=" m-2">
                              @csrf
                              @method('DELETE')
                              <button class="text-danger fs-5">
                                  <span class="badge rounded-pill bg-danger " style="font-size: 15px">O'chirish</span>
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>


          <div class="modal fade " id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- modal-dialog-centered - ekran o'rtasiga joylash -->
                  <div class="modal-content" style="width: 300px; margin: 0 auto">
                      <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">{{ "Xisobdan chiqmoqchimisiz?" }}</h5>
{{--                          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
                      </div>
                      <div  class="action d-flex justify-content-end ">
                          <button data-bs-dismiss="modal" class="text-danger fs-5 m-2 ">
                              <span class="badge rounded-pill bg-gray-500" style="font-size: 15px">Yopish</span>
                          </button>
                          <form action="{{route('logout')}}" id="deleteItem" method="POST" class=" m-2">
                              @csrf
                              <button class="text-danger fs-5">
                                  <span class="badge rounded-pill bg-danger " style="font-size: 15px">Chiqish</span>
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->
    @livewireScripts
    <!-- ========= All Javascript files linkup ======== -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/Chart.min.js"></script>
    <script src="/assets/js/dynamic-pie-chart.js"></script>
    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/fullcalendar.js"></script>
    <script src="/assets/js/jvectormap.min.js"></script>
    <script src="/assets/js/world-merc.js"></script>
    <script src="/assets/js/polyfill.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/livewire/livewire.js"></script>

    <script src="/build/assets/app-a1256489.js"></script>
    <!-- modal -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}


{{--    <script>--}}
{{--      // ======== jvectormap activation--}}
{{--      var markers = [--}}
{{--        { name: "Egypt", coords: [26.8206, 30.8025] },--}}
{{--        { name: "Russia", coords: [61.524, 105.3188] },--}}
{{--        { name: "Canada", coords: [56.1304, -106.3468] },--}}
{{--        { name: "Greenland", coords: [71.7069, -42.6043] },--}}
{{--        { name: "Brazil", coords: [-14.235, -51.9253] },--}}
{{--      ];--}}

{{--      var jvm = new jsVectorMap({--}}
{{--        map: "world_merc",--}}
{{--        selector: "#map",--}}
{{--        zoomButtons: true,--}}

{{--        regionStyle: {--}}
{{--          initial: {--}}
{{--            fill: "#d1d5db",--}}
{{--          },--}}
{{--        },--}}

{{--        labels: {--}}
{{--          markers: {--}}
{{--            render: (marker) => marker.name,--}}
{{--          },--}}
{{--        },--}}

{{--        markersSelectable: true,--}}
{{--        selectedMarkers: markers.map((marker, index) => {--}}
{{--          var name = marker.name;--}}

{{--          if (name === "Russia" || name === "Brazil") {--}}
{{--            return index;--}}
{{--          }--}}
{{--        }),--}}
{{--        markers: markers,--}}
{{--        markerStyle: {--}}
{{--          initial: { fill: "#4A6CF7" },--}}
{{--          selected: { fill: "#ff5050" },--}}
{{--        },--}}
{{--        markerLabelStyle: {--}}
{{--          initial: {--}}
{{--            fontWeight: 400,--}}
{{--            fontSize: 14,--}}
{{--          },--}}
{{--        },--}}
{{--      });--}}
{{--      // ====== calendar activation--}}
{{--      document.addEventListener("DOMContentLoaded", function () {--}}
{{--        var calendarMiniEl = document.getElementById("calendar-mini");--}}
{{--        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {--}}
{{--          initialView: "dayGridMonth",--}}
{{--          headerToolbar: {--}}
{{--            end: "today prev,next",--}}
{{--          },--}}
{{--        });--}}
{{--        calendarMini.render();--}}
{{--      });--}}

{{--      // =========== chart one start--}}
{{--      const ctx1 = document.getElementById("Chart1").getContext("2d");--}}
{{--      const chart1 = new Chart(ctx1, {--}}
{{--        // The type of chart we want to create--}}
{{--        type: "line", // also try bar or other graph types--}}

{{--        // The data for our dataset--}}
{{--        data: {--}}
{{--          labels: [--}}
{{--            "Jan",--}}
{{--            "Fab",--}}
{{--            "Mar",--}}
{{--            "Apr",--}}
{{--            "May",--}}
{{--            "Jun",--}}
{{--            "Jul",--}}
{{--            "Aug",--}}
{{--            "Sep",--}}
{{--            "Oct",--}}
{{--            "Nov",--}}
{{--            "Dec",--}}
{{--          ],--}}
{{--          // Information about the dataset--}}
{{--          datasets: [--}}
{{--            {--}}
{{--              label: "",--}}
{{--              backgroundColor: "transparent",--}}
{{--              borderColor: "#4A6CF7",--}}
{{--              data: [--}}
{{--                600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,--}}
{{--              ],--}}
{{--              pointBackgroundColor: "transparent",--}}
{{--              pointHoverBackgroundColor: "#4A6CF7",--}}
{{--              pointBorderColor: "transparent",--}}
{{--              pointHoverBorderColor: "#fff",--}}
{{--              pointHoverBorderWidth: 5,--}}
{{--              pointBorderWidth: 5,--}}
{{--              pointRadius: 8,--}}
{{--              pointHoverRadius: 8,--}}
{{--            },--}}
{{--          ],--}}
{{--        },--}}

{{--        // Configuration options--}}
{{--        defaultFontFamily: "Inter",--}}
{{--        options: {--}}
{{--          tooltips: {--}}
{{--            callbacks: {--}}
{{--              labelColor: function (tooltipItem, chart) {--}}
{{--                return {--}}
{{--                  backgroundColor: "#ffffff",--}}
{{--                };--}}
{{--              },--}}
{{--            },--}}
{{--            intersect: false,--}}
{{--            backgroundColor: "#f9f9f9",--}}
{{--            titleFontFamily: "Inter",--}}
{{--            titleFontColor: "#8F92A1",--}}
{{--            titleFontColor: "#8F92A1",--}}
{{--            titleFontSize: 12,--}}
{{--            bodyFontFamily: "Inter",--}}
{{--            bodyFontColor: "#171717",--}}
{{--            bodyFontStyle: "bold",--}}
{{--            bodyFontSize: 16,--}}
{{--            multiKeyBackground: "transparent",--}}
{{--            displayColors: false,--}}
{{--            xPadding: 30,--}}
{{--            yPadding: 10,--}}
{{--            bodyAlign: "center",--}}
{{--            titleAlign: "center",--}}
{{--          },--}}

{{--          title: {--}}
{{--            display: false,--}}
{{--          },--}}
{{--          legend: {--}}
{{--            display: false,--}}
{{--          },--}}

{{--          scales: {--}}
{{--            yAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  display: false,--}}
{{--                  drawTicks: false,--}}
{{--                  drawBorder: false,--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 35,--}}
{{--                  max: 1200,--}}
{{--                  min: 500,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--            xAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  drawBorder: false,--}}
{{--                  color: "rgba(143, 146, 161, .1)",--}}
{{--                  zeroLineColor: "rgba(143, 146, 161, .1)",--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 20,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--          },--}}
{{--        },--}}
{{--      });--}}

{{--      // =========== chart one end--}}

{{--      // =========== chart two start--}}
{{--      const ctx2 = document.getElementById("Chart2").getContext("2d");--}}
{{--      const chart2 = new Chart(ctx2, {--}}
{{--        // The type of chart we want to create--}}
{{--        type: "bar", // also try bar or other graph types--}}
{{--        // The data for our dataset--}}
{{--        data: {--}}
{{--          labels: [--}}
{{--            "Jan",--}}
{{--            "Fab",--}}
{{--            "Mar",--}}
{{--            "Apr",--}}
{{--            "May",--}}
{{--            "Jun",--}}
{{--            "Jul",--}}
{{--            "Aug",--}}
{{--            "Sep",--}}
{{--            "Oct",--}}
{{--            "Nov",--}}
{{--            "Dec",--}}
{{--          ],--}}
{{--          // Information about the dataset--}}
{{--          datasets: [--}}
{{--            {--}}
{{--              label: "",--}}
{{--              backgroundColor: "#4A6CF7",--}}
{{--              barThickness: 6,--}}
{{--              maxBarThickness: 8,--}}
{{--              data: [--}}
{{--                600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,--}}
{{--              ],--}}
{{--            },--}}
{{--          ],--}}
{{--        },--}}
{{--        // Configuration options--}}
{{--        options: {--}}
{{--          borderColor: "#F3F6F8",--}}
{{--          borderWidth: 15,--}}
{{--          backgroundColor: "#F3F6F8",--}}
{{--          tooltips: {--}}
{{--            callbacks: {--}}
{{--              labelColor: function (tooltipItem, chart) {--}}
{{--                return {--}}
{{--                  backgroundColor: "rgba(104, 110, 255, .0)",--}}
{{--                };--}}
{{--              },--}}
{{--            },--}}
{{--            backgroundColor: "#F3F6F8",--}}
{{--            titleFontColor: "#8F92A1",--}}
{{--            titleFontSize: 12,--}}
{{--            bodyFontColor: "#171717",--}}
{{--            bodyFontStyle: "bold",--}}
{{--            bodyFontSize: 16,--}}
{{--            multiKeyBackground: "transparent",--}}
{{--            displayColors: false,--}}
{{--            xPadding: 30,--}}
{{--            yPadding: 10,--}}
{{--            bodyAlign: "center",--}}
{{--            titleAlign: "center",--}}
{{--          },--}}

{{--          title: {--}}
{{--            display: false,--}}
{{--          },--}}
{{--          legend: {--}}
{{--            display: false,--}}
{{--          },--}}

{{--          scales: {--}}
{{--            yAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  display: false,--}}
{{--                  drawTicks: false,--}}
{{--                  drawBorder: false,--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 35,--}}
{{--                  max: 1200,--}}
{{--                  min: 0,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--            xAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  display: false,--}}
{{--                  drawBorder: false,--}}
{{--                  color: "rgba(143, 146, 161, .1)",--}}
{{--                  zeroLineColor: "rgba(143, 146, 161, .1)",--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 20,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--          },--}}
{{--        },--}}
{{--      });--}}
{{--      // =========== chart two end--}}

{{--      // =========== chart three start--}}
{{--      const ctx3 = document.getElementById("Chart3").getContext("2d");--}}
{{--      const chart3 = new Chart(ctx3, {--}}
{{--        // The type of chart we want to create--}}
{{--        type: "line", // also try bar or other graph types--}}

{{--        // The data for our dataset--}}
{{--        data: {--}}
{{--          labels: [--}}
{{--            "Jan",--}}
{{--            "Fab",--}}
{{--            "Mar",--}}
{{--            "Apr",--}}
{{--            "May",--}}
{{--            "Jun",--}}
{{--            "Jul",--}}
{{--            "Aug",--}}
{{--            "Sep",--}}
{{--            "Oct",--}}
{{--            "Nov",--}}
{{--            "Dec",--}}
{{--          ],--}}
{{--          // Information about the dataset--}}
{{--          datasets: [--}}
{{--            {--}}
{{--              label: "Revenue",--}}
{{--              backgroundColor: "transparent",--}}
{{--              borderColor: "#4a6cf7",--}}
{{--              data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],--}}
{{--              pointBackgroundColor: "transparent",--}}
{{--              pointHoverBackgroundColor: "#4a6cf7",--}}
{{--              pointBorderColor: "transparent",--}}
{{--              pointHoverBorderColor: "#fff",--}}
{{--              pointHoverBorderWidth: 3,--}}
{{--              pointBorderWidth: 5,--}}
{{--              pointRadius: 5,--}}
{{--              pointHoverRadius: 8,--}}
{{--            },--}}
{{--            {--}}
{{--              label: "Profit",--}}
{{--              backgroundColor: "transparent",--}}
{{--              borderColor: "#9b51e0",--}}
{{--              data: [--}}
{{--                120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,--}}
{{--              ],--}}
{{--              pointBackgroundColor: "transparent",--}}
{{--              pointHoverBackgroundColor: "#9b51e0",--}}
{{--              pointBorderColor: "transparent",--}}
{{--              pointHoverBorderColor: "#fff",--}}
{{--              pointHoverBorderWidth: 3,--}}
{{--              pointBorderWidth: 5,--}}
{{--              pointRadius: 5,--}}
{{--              pointHoverRadius: 8,--}}
{{--            },--}}
{{--            {--}}
{{--              label: "Order",--}}
{{--              backgroundColor: "transparent",--}}
{{--              borderColor: "#f2994a",--}}
{{--              data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],--}}
{{--              pointBackgroundColor: "transparent",--}}
{{--              pointHoverBackgroundColor: "#f2994a",--}}
{{--              pointBorderColor: "transparent",--}}
{{--              pointHoverBorderColor: "#fff",--}}
{{--              pointHoverBorderWidth: 3,--}}
{{--              pointBorderWidth: 5,--}}
{{--              pointRadius: 5,--}}
{{--              pointHoverRadius: 8,--}}
{{--            },--}}
{{--          ],--}}
{{--        },--}}

{{--        // Configuration options--}}
{{--        options: {--}}
{{--          tooltips: {--}}
{{--            intersect: false,--}}
{{--            backgroundColor: "#fbfbfb",--}}
{{--            titleFontColor: "#8F92A1",--}}
{{--            titleFontSize: 16,--}}
{{--            titleFontFamily: "Inter",--}}
{{--            titleFontStyle: "400",--}}
{{--            bodyFontFamily: "Inter",--}}
{{--            bodyFontColor: "#171717",--}}
{{--            bodyFontSize: 16,--}}
{{--            multiKeyBackground: "transparent",--}}
{{--            displayColors: false,--}}
{{--            xPadding: 30,--}}
{{--            yPadding: 15,--}}
{{--            borderColor: "rgba(143, 146, 161, .1)",--}}
{{--            borderWidth: 1,--}}
{{--            title: false,--}}
{{--          },--}}

{{--          title: {--}}
{{--            display: false,--}}
{{--          },--}}

{{--          layout: {--}}
{{--            padding: {--}}
{{--              top: 0,--}}
{{--            },--}}
{{--          },--}}

{{--          legend: false,--}}

{{--          scales: {--}}
{{--            yAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  display: false,--}}
{{--                  drawTicks: false,--}}
{{--                  drawBorder: false,--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 35,--}}
{{--                  max: 300,--}}
{{--                  min: 50,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--            xAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  drawBorder: false,--}}
{{--                  color: "rgba(143, 146, 161, .1)",--}}
{{--                  zeroLineColor: "rgba(143, 146, 161, .1)",--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 20,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--          },--}}
{{--        },--}}
{{--      });--}}
{{--      // =========== chart three end--}}

{{--      // ================== chart four start--}}
{{--      const ctx4 = document.getElementById("Chart4").getContext("2d");--}}
{{--      const chart4 = new Chart(ctx4, {--}}
{{--        // The type of chart we want to create--}}
{{--        type: "bar", // also try bar or other graph types--}}
{{--        // The data for our dataset--}}
{{--        data: {--}}
{{--          labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],--}}
{{--          // Information about the dataset--}}
{{--          datasets: [--}}
{{--            {--}}
{{--              label: "",--}}
{{--              backgroundColor: "#4A6CF7",--}}
{{--              barThickness: "flex",--}}
{{--              maxBarThickness: 8,--}}
{{--              data: [600, 700, 1000, 700, 650, 800],--}}
{{--            },--}}
{{--            {--}}
{{--              label: "",--}}
{{--              backgroundColor: "#d50100",--}}
{{--              barThickness: "flex",--}}
{{--              maxBarThickness: 8,--}}
{{--              data: [690, 740, 720, 1120, 876, 900],--}}
{{--            },--}}
{{--          ],--}}
{{--        },--}}
{{--        // Configuration options--}}
{{--        options: {--}}
{{--          borderColor: "#F3F6F8",--}}
{{--          borderWidth: 15,--}}
{{--          backgroundColor: "#F3F6F8",--}}
{{--          tooltips: {--}}
{{--            callbacks: {--}}
{{--              labelColor: function (tooltipItem, chart) {--}}
{{--                return {--}}
{{--                  backgroundColor: "rgba(104, 110, 255, .0)",--}}
{{--                };--}}
{{--              },--}}
{{--            },--}}
{{--            backgroundColor: "#F3F6F8",--}}
{{--            titleFontColor: "#8F92A1",--}}
{{--            titleFontSize: 12,--}}
{{--            bodyFontColor: "#171717",--}}
{{--            bodyFontStyle: "bold",--}}
{{--            bodyFontSize: 16,--}}
{{--            multiKeyBackground: "transparent",--}}
{{--            displayColors: false,--}}
{{--            xPadding: 30,--}}
{{--            yPadding: 10,--}}
{{--            bodyAlign: "center",--}}
{{--            titleAlign: "center",--}}
{{--          },--}}

{{--          title: {--}}
{{--            display: false,--}}
{{--          },--}}
{{--          legend: {--}}
{{--            display: false,--}}
{{--          },--}}

{{--          scales: {--}}
{{--            yAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  display: false,--}}
{{--                  drawTicks: false,--}}
{{--                  drawBorder: false,--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 35,--}}
{{--                  max: 1200,--}}
{{--                  min: 0,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--            xAxes: [--}}
{{--              {--}}
{{--                gridLines: {--}}
{{--                  display: false,--}}
{{--                  drawBorder: false,--}}
{{--                  color: "rgba(143, 146, 161, .1)",--}}
{{--                  zeroLineColor: "rgba(143, 146, 161, .1)",--}}
{{--                },--}}
{{--                ticks: {--}}
{{--                  padding: 20,--}}
{{--                },--}}
{{--              },--}}
{{--            ],--}}
{{--          },--}}
{{--        },--}}
{{--      });--}}
{{--      // =========== chart four end--}}
{{--    </script>--}}


    <script>

      function test(url){

        let modalImage = document.getElementById('imageModal');
        modalImage.src = url;
      }
      function ochirish(data){

        let deleteItem = document.getElementById('deleteItem');
          deleteItem.action = data;
      }



    </script>

  </body>
</html>
