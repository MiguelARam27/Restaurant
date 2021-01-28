@extends('layouts.app')

@section('content')
<div class="waitlist-page">
  <div class="content-box">
    <div class="row">
      <div class="col-md-6">
        <h1>Reserve your spot!</h1>
        <form method="POST" action="/reservations">
          @csrf
          <div class="form-group">
            <label for="firstNameInput">First Name</label>
            <input id="inputfname" type="text"
              class="form-control form-control-lg @error('firstName') is-invalid @enderror" name="firstName"
              value="{{ old('firstName') }}" required autocomplete="firstName" autofocus
              placeholder="Enter your First Name">

            @error('firstName')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="lastNameInput">Last Name</label>
            <input id="inputLastName" type="text"
              class="form-control form-control-lg @error('lastName') is-invalid @enderror" name="lastName"
              value="{{ old('lastName') }}" required autocomplete="lastName" autofocus
              placeholder="Enter your Last Name">

            @error('lastName')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="emailInput">Email</label>
            <input id="inputPhone" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
              placeholder="Enter your Email">

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="phoneInput">Phone Number</label>
            <input id="inputPhone" type="text"
              class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number"
              value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus
              placeholder="xxxx-xxx-xxxx">

            @error('phone_number')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="guestsinput">How Many Guest</label>
            <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror"
              id="guestsinput">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            @error('guests_total')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="timeinput">What Time?</label>
            <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeinput">
              <option value="6">6:00 PM</option>
              <option value="7">7:00 PM</option>
              <option value="8">8:00 PM</option>
              <option value="9">9:00 PM</option>
              <option value="10">10:00 PM</option>
            </select>
            @error('time')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Confirm</button>
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <img class="img-fluid" src="/img/waiting.jpeg" alt="people eating">
      </div>

    </div>
  </div>
</div>

@endsection