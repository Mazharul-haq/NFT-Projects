<!doctype html>
<html lang="en">
@include('frontend.layouts.header')
<body>
@include('frontend.layouts.navbar')
@yield('navbar')

@yield('main')

@include('frontend.layouts.footer');
//Flowbite datePicker
<script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
<script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script>

</body>
</html>
