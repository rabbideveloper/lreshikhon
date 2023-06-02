<!doctype html>
<html lang="en">
<head>
    @include('site.includes.header')
</head>
<body>

{{--This is Navbar Section--}}
@include('site.includes.navbar')

@yield('content')

@section('extrafields')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque cum deserunt eaque eius eveniet exercitationem, fugiat illum ipsam libero nam neque officiis optio quibusdam rem saepe sint suscipit, tempora tempore temporibus totam unde voluptates voluptatum. Autem eligendi maxime nam nihil, possimus similique totam. Adipisci animi consectetur culpa deserunt dicta distinctio dolor doloremque dolores earum eos esse et explicabo labore laborum magni minus molestiae mollitia neque nisi nostrum omnis optio provident, quam qui quis quisquam recusandae sapiente similique sunt tempora veniam vero vitae, voluptates. Amet architecto atque corporis doloremque nobis qui quidem, saepe similique. Alias ipsa labore ullam veritatis voluptatum.</p>
@show

@include('site.includes.footer')
</body>
</html>
