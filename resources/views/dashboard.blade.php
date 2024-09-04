<x-layout bodyClass="g-sidenav-show bg-gray-200">
<x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
<!doctype html>
  <html lang="en">
    <head>
      <title>My Dashboard</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
aza
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
      <div class="container text-center">
            <h1 class="text-container ">Welcome to the Dashboard, {{$customer_name}}</h1>
      </div>   

        <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    </body>
  </html>
</x-layout>  