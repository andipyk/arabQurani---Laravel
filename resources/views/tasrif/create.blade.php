<a href="{{ route('tasrif.index') }}"><button><- Index</button></a> <br><br>

@if (session('status'))
    Status : {{ session('status') }}
@endif

<form action="{{ route('tasrif.store') }}" method="post">
    @csrf
    arti :<input type="text" name="arti"> <br>
    madi :<input type="text" name="madi"> <br>
    mudhori :<input type="text" name="mudhori"> <br>
    masdar :<input type="text" name="masdar"> <br>
    sifat :<input type="text" name="sifat"> <br>
    amr :<input type="text" name="amr"> <br>
    bab :<input type="text" name="bab"> <br>
    
    <input type="submit" value="Simpan">

</form>