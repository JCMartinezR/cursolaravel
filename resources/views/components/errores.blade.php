@if($errors->any())
<div class="alert alert-warning" role="alert">
<ul id="errores" class="mb-0">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif