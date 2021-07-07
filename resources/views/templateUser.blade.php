<!DOCTYPE html>
<html>
<head>
    <title>@yield('page-title', "User") - Pierre</title>
    <link rel="stylesheet" href="">

</head>
<body>
<div class="content">
    @yield("page-content")
</div>
@yield('additionnal-scripts')
<script src="/js/app.js"></script>
</body>


</html>
