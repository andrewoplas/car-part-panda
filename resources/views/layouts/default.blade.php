<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('includes.head')
</head>

<body class="{{ $body ?? '' }}">

@include('includes.header')

<div id="main">
    @yield('content')
</div>

@if(!($hideFooter ?? null))
    @include('includes.footer')
@endif

@include('includes.scripts')
</body>

</html>
