<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
    <style type="text/css">
<!--
.font-bold {color:blue; line-height:1.5;}
-->
</style>

    <h1>Hello World!!</h1>
    @php
    $name = 'ららべる';
    $isActive = true;
    @endphp

    <style>
        
    </style>
    @if($course == 'Laravel1')
    ララベル
    @else
    あああ
    @endif
    <span @class(['font-bold' => $isActive])>{{$name}}</span>
    <span>{{$course}}</span>
    {{-- コメント --}}
    </body>
</html>
