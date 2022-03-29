@extends('layout')

@section('content')
<form method="POST" action="{{ route('login') }}" >
    @csrf
    <div class="auth-wrapper">
        <div class="font_montserat">
            <div class="auth-block">
                <label for="email" class="auth-label auth-label_margin auth-label__require">Електронна адреса</label>
                <input type="text" name="email" id="email" class="auth-input auth-input_margin" placeholder="Електронна адреса" >
            </div>
            <div class="auth-block">
                <label for="password" class="auth-label">Пароль</label>
                <input type="password" name="password" id="password" class="auth-input auth-input_margin" placeholder="Пароль">
            </div>
            <div class="auth-block_with_btn">
                <button type="submit" class="btn btn_bg_pink btn_register">{{ __('Увійти') }}</button>
            </div>
        </div>
    </div>
</form>

@if($errors->any())
    <div class="auth-error auth-error_margin font_montserat">
        <div>
            @foreach ($errors->all() as $error)
                <li class="auth-error__item">{{ $error }}</li>
            @endforeach
        </div>
    </div>
    @endif
@endsection
