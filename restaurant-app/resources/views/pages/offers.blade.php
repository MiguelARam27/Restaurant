@extends('layouts.app')

@section('content')
<div class="offers-page">
        <div class="content-box">
                <div class="row">
                        <div class="col-md-8 offset-md-2">
                                <h1>Sign up for our offer list!</h1>
                                <form id="basicform" method="POST" action="/offers">
                                        @csrf
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label for="firstNameInput">First Name</label>
                                                                <input id="inputFirstName" type="text"
                                                                        class="form-control form-control-lg @error('firstName') is-invalid @enderror"
                                                                        name="firstName" value="{{ old('firstName') }}"
                                                                        required autocomplete="name" autofocus
                                                                        placeholder="First Name">

                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label for="lastNameInput">Last Name</label>
                                                                <input id="inputLastName" type="text"
                                                                        class="form-control form-control-lg @error('lastName') is-invalid @enderror"
                                                                        name="lastName" value="{{ old('lastName') }}"
                                                                        required autocomplete="name" autofocus
                                                                        placeholder="Last Name">
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label for="emailInput">Email address</label>
                                                                <input id="inputemail" type="text"
                                                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                                        name="email" value="{{ old('email') }}" required
                                                                        autocomplete="email" autofocus
                                                                        placeholder="Email address">
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label for="phoneInput">Phone Number</label>
                                                                <input id="inputPhoneNumber" type="text"
                                                                        class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                                                        name="phone_number"
                                                                        value="{{ old('phone_number') }}" required
                                                                        autocomplete="phone_number" autofocus
                                                                        placeholder="xxx-xxx-xxxx">
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <p>In signing up I
                                                                Acknowledge that i am 18 years or older, and want to
                                                                receive email offers from Food program, If i select to
                                                                join the rewards
                                                                program.
                                                        </p>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <button class="btn btn-primary"
                                                                        type="submit">Confirm</button>
                                                        </div>
                                                </div>
                                        </div>
                                </form>
                        </div>

                </div>
        </div>
</div>

@endsection