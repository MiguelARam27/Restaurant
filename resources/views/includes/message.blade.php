@if(session()->exists('success'))
<div id='message' class="alert alert-success message">
    {{session('success')}}
</div>
@endif
@if(session()->exists('danger'))
<div id='message' class="alert alert-danger message">
    {{session('danger')}}
</div>
@endif