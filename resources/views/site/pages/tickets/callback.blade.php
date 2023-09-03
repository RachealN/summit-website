<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Summit - Payment Page</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>

<body>
<div class="vh-100 d-flex justify-content-center align-items-center">
    @if($status === 'successful')
        <div class="col-md-6" style="margin-top: 10%">
            <div class="border" style="border: 2px solid #ec167f !important;"></div>
            <div class="card bg-white p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success bi bi-check-circle" width="75" height="75"
                         fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Your payment is successful!</h1>
                    <p class="py-4">We've emailed your ticket details for the event.</p>
                    <a href="{{ route('home') }}" class="theme-btn btn-style-one">Back Home</a>
                </div>
            </div>
        </div>

    @elseif($status === 'cancelled')
            <div class="col-md-6" style="margin-top: 10%">
                <div class="border" style="border: 2px solid #ec167f !important;"></div>
                <div class="card bg-white p-5">
                    <div class="mb-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success bi bi-check-circle" width="100" height="100"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-center">
                        <h1>Your payment has been cancelled!</h1>
                        <p class="py-4">Please try to purchase the ticket again.</p>
                        <a href="{{ route('home') }}" class="theme-btn btn-style-one">Back Home</a>
                    </div>
                </div>
            </div>

    @else
            <div class="col-md-6" style="margin-top: 10%">
                <div class="border" style="border: 2px solid #ec167f !important;"></div>
                <div class="card bg-white p-5">
                    <div class="mb-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success bi bi-check-circle" width="100" height="100"
                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-center">
                        <h1>Something went wrong!</h1>
                        <p class="py-4">Please contact us for help in-case</p>
                        <a href="{{ route('home') }}" class="theme-btn btn-style-one">Back Home</a>
                    </div>
                </div>
            </div>
    @endif
</div>
</body>

</html>
