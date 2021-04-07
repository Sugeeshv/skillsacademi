

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- General meta tags needed-->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Needed for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- If you want custom browser colors on mobile -->
    <meta name="theme-color" content="#1843c1" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#1843c1">

    <title>Admin Dashboard</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('./website/favicon/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('./website/favicon/32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('./website/favicon/16x16.png') }}" sizes="16x16" type="image/png">

    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('admin/dist/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/summernote/summernote.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <style>
        .invalid-feedback{
            display: block
        }
        
    </style>
</head>
@yield('content')
        
<!-- JavaScript File -->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/summernote/summernote.min.js') }}"></script>
{{-- <script src="{{ asset('admin/dist/all.js') }}"></script> --}}
<script src="{{ asset('admin/dist/global.js') }}"></script>
<script src="{{ asset('admin/dist/datatable.js') }}"></script>
<script src="{{ asset('admin/dist/menu.js') }}"></script>
<script  src="{{ asset('admin/dist/script.js') }}"></script>
{{-- <script src="{{ asset('admin/dist/summernote.js') }}"></script> --}}
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src='https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js'></script>
<script>

$(document).ready(function() {

$('input[name="input"]').tagsinput({
trimValue: true,
confirmKeys: [13, 44, 32],
focusClass: 'my-focus-class'
});

$('.bootstrap-tagsinput input').on('focus', function() {
$(this).closest('.bootstrap-tagsinput').addClass('has-focus');
}).on('blur', function() {
$(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
});

});
</script>
<script src="{{ asset('admin/dist/summernote-custom.js') }}"></script>
{!! Toastr::message() !!}

</html>