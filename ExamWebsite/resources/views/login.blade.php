<!DOCTYPE html>
@extends('layouts.login')
 
@section('title', 'Login')

@section('content')

<!--Back Button-->

<!--Login Form-->
<div class="d-flex flex-column">
    <div class="container border rounded shadow-lg text-light mw-100 mh-100 h-50 w-50 mt-5">
        <h3 class="display-6 text-center mt-2" id="loginPageHeader">Sign Up</h3>
        <p class="lead text-center">Join Today</p>
        <form class="">
            <!--Email box-->
            <div class="form-group d-inline-flex mw-100 w-100 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope flex-shrink-0" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                <input type="email" id="emailBox" class="form-control flex-shrink-1 mx-3" placeholder="Email Address"/>
            </div> 
            <!--Password box-->
            <div class="form-group d-inline-flex mw-100 w-100 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-lock flex-shrink-0" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg>
                <input type="password" class="form-control flex-shrink-1 mx-3" placeholder="Password"/>
            </div>
            <!--Full Name box-->
            <div class="form-group d-inline-flex mw-100 w-100 mt-2" id="loginFullNameBox">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person flex-shrink-0" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <input type="text" class="form-control flex-shrink-1 mx-3" placeholder="Full Name"/>
            </div>
            <!--Age box-->
            <div class="form-group d-inline-flex mw-100 w-100 mt-2" id="loginAgeBox">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-date flex-shrink-0" viewBox="0 0 16 16">
                    <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                <input type="date" class="form-control flex-shrink-1 mx-3" placeholder="Age"/>
            </div>

            <!--Checkboxes-->
            <div class="my-2 mx-5">
                <input type="checkbox" class="form-check-input" value="" id="loginIsTeacherCheckbox"/>
                <label class="form-check-label flex-shrink-1" for="loginIsTeacherCheckbox"> I am a teacher. </label>
            </div>
            <div class="my-2 mx-5">
                <input type="checkbox" class="form-check-input flex-shrink-1" value="" id="loginIsSigningUpCheckbox"/>
                <label class="form-check-label flex-shrink-1" for="loginIsSigningUpCheckbox"> I want to create an account. </label>
            </div>
            <div class="my-3 mx-auto justify-content-center text-center">
                <input type="submit" value="Sign Up" class="btn btn-lg btn-outline-info" id="loginSignUpButton"/>
            </form>

    </div>
</div>