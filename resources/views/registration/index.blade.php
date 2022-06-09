@extends('layouts.web')

@section('content')

    <div class="row h-100">
        <div class="col-4 h-100">
        </div>
        <div class="col-8 bg-white h-100">
            <div class="px-5 form-wrapper clearfix">
                <div class="top-slogan pb-5">
                    <div class="">Hello there, lets try to register!</div>
                </div>
                <header class="py-5">
                    <h1 class="fw-bold">Create an <span>Account</span></h1>
                </header>
                <form class="needs-validation">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="firstname" class="col-6 col-form-label fs-5">First name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="secondname" class="col-6 col-form-label fs-5">Second name</label>
                            <input type="text" class="form-control" id="secondname" name="secondname">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="email" class="form-label fs-5">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="your@email.com">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="password" class="form-label fs-5">Password</label>
                            <input type="password" class="form-control" id="password">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="password" class="form-label fs-5">Please confirm your password</label>
                            <input type="password" class="form-control" id="passconfirm">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="checkbox" value="" id="agree" name="agree">
                        <label class="form-check-label text-black-50" for="agree">
                            I am agree to use my data for registration
                        </label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="mb-4">
                        <button id="submit" type="button" class="btn btn-primary btn-lg rounded-3 shadow">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
