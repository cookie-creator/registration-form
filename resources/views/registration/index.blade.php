@extends('layouts.web')

@section('content')

    <div class="row h-100">
        <div class="d-none d-sm-none d-md-block col-4 col-lg-4 col-md-4 h-100">
        </div>
        <div class="col-12 col-lg-8 col-md-8 col-sm-12 bg-white h-100">
            <div class="px-5 form-wrapper clearfix">
                <div class="top-slogan pb-5">
                    <div class="">Hello there, lets try to register!</div>
                </div>
                <header class="py-5">
                    <h1 class="fw-bold">Create an <span>Account</span></h1>
                </header>

                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>

                <div id="status1">
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>

                        </div>
                    </div>
                </div>

                <div id="status0">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>

                        </div>
                    </div>
                </div>

                <div id="formWrappper">
                    <form id="registrationForm" class="needs-validation">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-12 col-sm-12 mb-4">
                                <label for="firstname" class="col-6 col-form-label fs-5">First name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                <div id="valid-firstname" class="validation-msg text-danger text-sm">
                                    First name must be longer
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-12 col-sm-12 mb-4">
                                <label for="secondname" class="col-6 col-form-label fs-5">Second name</label>
                                <input type="text" class="form-control" id="secondname" name="secondname">
                                <div id="valid-secondname" class="validation-msg text-danger text-sm">
                                    Second name must be longer
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label for="email" class="form-label fs-5">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="your@email.com">
                                <div id="valid-email" class="validation-msg text-danger text-sm">
                                    Please enter valid email address
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label for="password" class="form-label fs-5">Password</label>
                                <input type="password" class="form-control" id="password">
                                <div id="valid-password" class="validation-msg text-danger text-sm">
                                    Password must be more than 8 symbols
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label for="password" class="form-label fs-5">Please confirm password</label>
                                <input type="password" class="form-control" id="passconfirm">
                                <div id="valid-passconfirm" class="validation-msg text-danger text-sm">
                                    Passwords doesn't match
                                </div>
                            </div>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="checkbox" value="" id="agree" name="agree">
                            <label class="form-check-label text-black-50" for="agree">
                                I am agree to use my data for registration
                            </label>
                            <div id="valid-agree" class="validation-msg text-danger text-sm">
                                You must agree for registration
                            </div>
                        </div>
                        <div class="mb-4">
                            <button id="submit" type="button" class="btn btn-primary btn-lg rounded-3 shadow">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
