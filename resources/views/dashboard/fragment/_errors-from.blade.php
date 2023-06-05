@if ($errors->any())
@foreach ($errors->all() as $erros)
<div class="error">
    {{$error}}
</div>
    
@endforeach    
@endif