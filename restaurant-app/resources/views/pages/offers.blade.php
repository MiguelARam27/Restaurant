@extends('layouts.app')

@section('content')
<div class="offers-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Sign up for our offer list!</h1>
                <form>
                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                        <label for="firstNameInput">First Name</label>
                                        <input type="text" class="form-control" id="firstNameInput" name="firstName" placeholder="John">
                                </div>
                             </div>   
                             <div class="col-md-6">
                                <div class="form-group">
                                        <label for="lastNameInput">Last Name</label>
                                        <input type="text" class="form-control" id="lastNameInput" name="lastName" placeholder="Doe">
                                </div>
                             </div>   
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                           <label for="emailInput">Email address</label>
                                           <input type="email" class="form-control" id="emailInput" name="email" placeholder="name@example.com">
                                   </div>
                                </div>   
                                <div class="col-md-6">
                                   <div class="form-group">
                                           <label for="phoneInput">Phone Number</label>
                                           <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="xxxx-xxx-xxxx">
                                    </div>
                                </div>   
                        </div>
                        <div class="row">
                              <div class="col-md-6">    
                                      <p>In signing up I 
                                              Acknowledge that i am 18 years or older, and want to receive email offers from Food program, If i select to join the rewards
                                              program. 
                                      </p>
                               </div>  
                              <div class="col-md-6">    
                                        <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Confirm</button>
                                        </div>
                               </div>  
                        </div>
                 </form>
            </div>
            
        </div>
    </div>
</div>
   
@endsection