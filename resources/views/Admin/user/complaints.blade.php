@extends('admin.user.index')

@section('table-data')
<section class="table-section table_margin font_rubik">
  <span class="table__title">Скарги</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0" class="table">
      <thead>
        <tr class="table-row-header">
          <th>Автор коментаря</th>
          <th>Текст коментаря</th>
          <th>Кількість скарг</th>
          <th>Дія</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0" class="table">
      <tbody>
        @foreach ($compleints as $complaint)
          <tr class="table-row">
            <td>{{$complaint->userAdmin->first_name}} {{$complaint->userAdmin->last_name}}</td>
            <td>{{$complaint->review}}</td>
            <td>{{$complaint->complaints_count}}</td>
            @if($complaint->deleted_at)
              <td>Комент забанено</td>
            @else
              <td class="admin-action"> <a href="{{route('admin.complaints.delete', $complaint->id)}}" class="btn_bg_pink table-action__btn">Видалити</a></td>
            @endif
          </tr>
        @endforeach       
      </tbody>
    </table>
  </div>
</section>
@endsection