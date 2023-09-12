<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E Comm Project</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</head>
<body>
    {{ View::make('header') }}
@yield('content')
{{ View::make('footer') }}

<style>
.custom-login{
    height: 500px;
    padding-top: 100px;


}
img.slider-img{
    height: 400px !important;
}
.custom-product{
    height: 600px;
}
.slider-text{
    background-color: #24465454 !important
}
.trending-img{
    height: 100px;
}
.trending-items{

    float: left;
    width: 20%;
}
.trending-wrapper{
    margin: 20px;
}
.detail-img{
    height: 200px;
}
.search-box{
    width: 500px !important;
}
</style>

</body>
</html>
