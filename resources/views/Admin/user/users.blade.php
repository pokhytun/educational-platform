@extends('admin.user.index')


@section('table-data')
<section class="table-section table_margin font_rubik">
  <span class="table__title">Користувачі</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0" class="table">
      <thead>
        <tr class="table-row-header">
          <th>Ім'я</th>
          <th>Прізвище</th>
          <th>Логін</th>
          <th>Пошта</th>
          <th>Телефон</th>
          <th>Дата реєстрації</th>
          <th>Дата деактивації</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0" class="table">
      <tbody>
        @foreach ($users as $user)
          <tr class="table-row">
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->login}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
            <td>{{$user->created_at}} </td>
            <td>{{$user->deletet_at ? $user->deleted_at : 'Активний'}}</td>
          </tr>
        @endforeach       
      </tbody>
    </table>
  </div>
</section>
@endsection