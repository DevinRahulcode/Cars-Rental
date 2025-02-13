<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Findal Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"
      rel="stylesheet"
    /> -->

    <link rel="stylesheet" href="css/app.css" />
    <!-- <link rel="stylesheet" href="css/output.css" /> -->
  </head>
  <body>
    <header class="navbar">
      <div class="container navbar-content">
        <a href="{{url('/')}}" class="logo-wrapper">
          <img src="/img/logoipsum-265.svg" alt="Logo" />
        </a>
        <button class="btn btn-default btn-navbar-toggle">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            style="width: 24px"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
          </svg>
        </button>
        <div class="navbar-auth">
          <a href="/add_new.html" class="btn btn-add-new-car">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 18px; margin-right: 4px"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
              />
            </svg>

            Add new Car
          </a>
          <div class="navbar-menu" tabindex="-1">
            <a href="javascript:void(0)" class="navbar-menu-handler">
              My Account
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                style="width: 20px"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m19.5 8.25-7.5 7.5-7.5-7.5"
                />
              </svg>
            </a>
            <ul class="submenu">
              <li>
                <a href="my_cars.html">My Cars</a>
              </li>
              <li>
                <a href="watchlist.html">My Favourite Cars</a>
              </li>
              <li>
                <form action="#" method="post">
                  <button>Logout</button>
                </form>
              </li>
            </ul>
          </div>
          <a href="/signup.html" class="btn btn-primary btn-signup">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 18px; margin-right: 4px"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
              />
            </svg>

            Signup
          </a>
          <a href="/login.html" class="btn btn-login flex items-center">
            <svg
              style="width: 18px; fill: currentColor; margin-right: 4px"
              viewBox="0 0 1024 1024"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M426.666667 736V597.333333H128v-170.666666h298.666667V288L650.666667 512 426.666667 736M341.333333 85.333333h384a85.333333 85.333333 0 0 1 85.333334 85.333334v682.666666a85.333333 85.333333 0 0 1-85.333334 85.333334H341.333333a85.333333 85.333333 0 0 1-85.333333-85.333334v-170.666666h85.333333v170.666666h384V170.666667H341.333333v170.666666H256V170.666667a85.333333 85.333333 0 0 1 85.333333-85.333334z"
                fill=""
              />
            </svg>
            Login
          </a>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        @foreach ($viewcars as $car)
            
    
        <h1 class="car-details-page-title">{{$car->name}}</h1>
        <div class="car-details-region">{{$car->address}}  {{$car->created_at}}</div>

        <div class="car-details-content">
          <div class="car-images-and-description">
            <div class="car-images-carousel">
              <div class="car-image-wrapper">
                <img
                  src="{{ asset('uploads/cars/'.$car->photo)}}"
                  alt=""
                  class="car-active-image"
                  id="activeImage"
                />
              </div>
              <div class="car-image-thumbnails">
                <img src="{{ asset('uploads/cars/'.$car->photo)}}" alt="" />
                <img src="{{ asset('uploads/cars/'.$car->photo)}}" alt="" />
                <img src="{{ asset('uploads/cars/'.$car->photo)}}" alt="" />
                <img src="{{ asset('uploads/cars/'.$car->photo)}}" alt="" />
              </div>
              <button class="carousel-button prev-button" id="prevButton">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 64px"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5 8.25 12l7.5-7.5"
                  />
                </svg>
              </button>
              <button class="carousel-button next-button" id="nextButton">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 64px"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m8.25 4.5 7.5 7.5-7.5 7.5"
                  />
                </svg>
              </button>
            </div>

            <div class="card car-detailed-description">
              <h2 class="car-details-title">Detailed Description</h2>
              <p>{{$car->description}}</p>
            </div>
          </div>
          <div class="car-details card">
            <div class="flex items-center justify-between">
              <p class="car-details-price">USD{{$car->price}}</p>
              <button class="btn-heart">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  style="width: 20px"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                  />
                </svg>
              </button>
            </div>

            <hr />
            <table class="car-details-table">
              <tbody>
                <tr>
                  <th>Model</th>
                  <td>{{$car->name}}</td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>{{$car->price}}</td>
                </tr>
                <tr>
                  <th>Milage</th>
                  <td>{{$car->mil}} KMs</td>
                </tr>
                <tr>
                  <th>Fuel Type</th>
                  <td>{{$car->fuel}}</td>
                </tr>
                <tr>
                  <th>Location</th>
                  <td>{{$car->city}}</td>
                </tr>
              </tbody>
            </table>
            <hr />

            <div class="flex gap-1 my-medium">
              <img
                src="/img/avatar.png"
                alt=""
                class="car-details-owner-image"
              />
              <div>
                <h3 class="car-details-owner">John Smith</h3>
                <div class="text-muted">5 cars</div>
              </div>
            </div>
            <a href="tel:+995557123***" class="car-details-phone">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                style="width: 16px"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"
                />
              </svg>

              {{$car->phone}}
              <span class="car-details-phone-view">Book a Test Drive</span>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </main>

    <footer></footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
      integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="js/app.js"></script>
  </body>
</html>
