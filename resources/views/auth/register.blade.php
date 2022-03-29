@extends('layout')

@section('content')
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <div class="auth-wrapper">
        <div class="auth-body font_montserat">
            <div>
                <div class="auth-block">
                    <label for="first_name" class="auth-label auth-label_margin auth-label__require">Ім'я</label>
                    <input type="text" name="first_name" id="first_name" class="auth-input auth-input_margin" placeholder="Твоє ім'я" >
                </div>
                <div class="auth-block">
                    <label for="last_name" class="auth-label">Прізвище</label>
                    <input type="text" name="last_name" id="last_name" class="auth-input auth-input_margin" placeholder="Твоє прізвище">
                </div>
                <div class="auth-block">
                    <label for="phone_number" class="auth-label auth-label__require ">Телефон</label>
                    <input type="tel" name="phone_number" id="phone_number" class="auth-input auth-input_margin" placeholder="380 __ __ __ ___">
                </div>
                <div class="auth-block">
                    <label for="email" class="auth-label auth-label__require">Електронна адреса</label>
                    <input type="text" name="email" id="email" class="auth-input auth-input_margin" placeholder="Електронна адреса">
                </div>
            </div>
    
            <div>
                <div class="auth-block">
                    <label for="password" class="auth-label auth-label__require">Пароль</label>
                    <input type="password" name="password" id="password" class="auth-input auth-input_margin" placeholder="Твій пароль">
                </div>
                <div class="auth-block">
                    <div class="col-md-6">
                        <label for="password-confirm" class="auth-label auth-label__require">Підтвердіть пароль</label>
                        <input id="password-confirm" type="password" class="auth-input auth-input_margin" name="password_confirmation" required autocomplete="new-password" placeholder="Підтвердіть пароль">
                    </div>
                </div>
                <div class="auth-block">
                    <label for="login" class="auth-label auth-label__require">Логін</label>
                    <input type="text" name="login" id="login" class="auth-input auth-input_margin" placeholder="Твій логін">
                </div>
    
                <div class="auth-block_with_btn">
                    <label for="file-upload" class="auth-label_photo auth-input_margin">Фото</label>
                    <input id="file-upload" name="photo" type="file" class="auth-input_photo"/>
                    <button type="submit" class="btn btn_bg_pink btn_register">{{ __('Зареєструватись') }}</button>
                </div>
                </div>
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
