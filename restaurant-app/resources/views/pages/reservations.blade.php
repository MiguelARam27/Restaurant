@extends('layouts.app')

@section('content')
<div class="waitlist-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
                <h1>Reserve your spot!</h1>
                <form>
                        <div class="form-group">
                          <label for="firstNameInput">First Name</label>
                          <input type="email" class="form-control" id="firstNameInput" name="firstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                          <label for="lastNameInput">Last Name</label>
                          <input type="email" class="form-control" id="lastNameInput" name="lastName" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                          <label for="emailInput">Email</label>
                          <input type="text" class="form-control" name="email" id="emailInput" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                          <label for="phoneInput">Phone Number</label>
                          <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="xxxx-xxx-xxxx">
                        </div>
                        <div class="form-group">
                          <label for="guestInput">How many guests?</label>
                          <select class="form-control" id="guestInput">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="timeInput">Time?</label>
                          <select class="form-control" id="timeInput">
                            <option value="6">6:00 pm</option>
                            <option value="7">7:00 pm</option>
                            <option value="8">8:00 pm</option>
                            <option value="9">9:00 pm</option>
                            <option value="10">10:00 pm</option>
                          </select>
                        </div>
                        <div class="form-group">
                                <button class="btn btn-primary" type="submit">Confirm</button>
                        </div>
                 </form>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="/img/waiting.jpeg" alt="people eating" >
            </div>
            
        </div>
    </div>
</div>
   
@endsection