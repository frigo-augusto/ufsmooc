@extends('layouts.app')

@section('style')
    {{ url('style/pages/login.css') }}
@endsection

@section('title', 'Faça o Login')

@section('content')
        <form method="POST" action={!! Route('post.data.login.validate') !!}>
            @csrf
            <div class="main-container">            
                <div>
                    <div class='main-title'> Faça seu login </div>
                    <div class='main-box'>
                        <input class='email-input' type="text" value="" name='email' placeholder="E-mail"/>
                        <input class='password-input' type="password" value="" name='password' placeholder="Senha"/>
                        <div class='remind-login-container'>
                            <input class='remind-login-checkbox' type="checkbox" /> Lembrar minha senha 
                        </div>

                        <input class='login-btn' type="submit" value="Entrar" />

                        <div class='lines-container'>
                            <div class="line"></div>ou<div class="line"></div>
                        </div>

                        <a class='create-account-btn' href={{ route('get.view.userSignup') }}>Criar conta</a>
 
                        <div class='forgot-account-container'>
                            <a class='forgot-account-btn' href={{ route('get.view.userForgotPass') }}>Esqueceu a senha?</a>
                        </div>
                    </div>                   
                </div>
            </div>
        </form>
@endsection