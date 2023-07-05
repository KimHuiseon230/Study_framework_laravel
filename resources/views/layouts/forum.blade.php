<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 상당히 보안쪽에서 보완됨 -->
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>Forum</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/93edb85122.js" crossorigin="anonymous"></script>
  <!-- css 추가  -->
  @yield('inside_head_tag')
</head>

<body>
  @include('inc.nav') 
  {{-- 본문 부분 --}}
  @yield('content')
  {{-- 푸터 부분 --}}
  @include('inc.footer')
  {{-- 자바 스트립트 코드 추가 --}}
  @yield('before_body_end_tag')
</body>

</html>