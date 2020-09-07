@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session()->get('success') }}
</div> 
@elseif(count($errors)>0)
  <div class="alert alert-danger" role="alert">
    <strong>Errors found</strong><ul>
    @foreach ($errors -> all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
  </div>
  
@endif
