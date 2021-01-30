@extends('layouts.app')

@section('title')
About - {{$title}}
@endsection



@section('content')
<div id="contact-page">

   <div class="content-box">
      <div class="row">
         <div class="col-md-6">
            <h1>Contact Us</h1>
            <h3>Address</h3>
            <p>
               {{$address1}} {{$address2}},<br>
               {{$city}}, {{$state}} {{$zip}}
            </p>
            <h3>Phone Number</h3>
            <p>
               <a href="tel:{{$phone_number}}">{{$phone_number}}</a>
            </p>
         </div>
         <div class="col-md-6">
            {{-- <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.8140418344683!2d-80.21037164997058!3d25.809708312831688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b14a3b8bbaa7%3A0xea85c8a06c579c54!2sBurger%20King!5e0!3m2!1sen!2sus!4v1583531624923!5m2!1sen!2sus"
               width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> --}}
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112354.74234503729!2d-81.56067533355916!3d28.356258575519494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7635104961a6f%3A0x7f98a777e7cf0b62!2sBob&#39;s%20Family%20Restaurant!5e0!3m2!1sen!2sus!4v1612037503630!5m2!1sen!2sus"
               width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
               tabindex="0"></iframe>
         </div>
      </div>
   </div>
</div>
@endsection