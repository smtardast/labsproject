@if(session()->get('message'))
<div class="alert alert-{{session()->get('message')}}" role="alert">
  {{session()->get('textmessage')}}
</div>
@endif
