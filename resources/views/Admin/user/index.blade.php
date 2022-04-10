@extends('admin.base')

@section('info-blocks')
<div class="wrapper users-wrapper font_montserat" data-id="users">
  <div class="users-general-information">
    @include('admin.components.general-info', ['title' => 'Корисутвачів' , 'count'=> count($users), 'icon' => 'bxs-user-check' , 'link'=>'admin.users.list'])
    @include('admin.components.general-info', ['title' => 'Викладачів' , 'count'=> count($teachers), 'icon' => 'bxs-user-voice' , 'link'=>'admin.teachers.list'])
    @include('admin.components.general-info', ['title' => 'Нових користувачів' , 'count'=> count($newUsers), 'icon' => 'bxs-user-plus' , 'link'=>'home.index'])
    @include('admin.components.general-info', ['title' => 'Скарги' , 'count'=> 150, 'icon' => 'bx-user-x' , 'link'=>'home.index'])

  </div>
</div>
@overwrite

@section('content')

  @yield('table-data')

@endsection