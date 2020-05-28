<!doctype html>
<html lang="en">
<head>
<x-head/>
</head>
<body>
<x-aside/>
<!-- Main content -->
<div class="main-content" id="panel">
    <x-topnav/>
    <!-- Header -->
    <!-- Header -->
    <x-header/>
    <!-- Page content -->
    <div class="container-fluid">
        @yield("content")
        <x-footer/>
    </div>
</div>
</body>
<x-scripts/>
</html>
