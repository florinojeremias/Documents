@extends('layouts.menu')
@section('content')
<div class="table-responsive">
    @isset($relatorio)
        
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Receita liquida</th>
                 <th>Custo fixo</th>
            </tr>
            
        </thead>
        <tbody>
            <tr>
                <td>{{$relatorio['receita_liquida']}}</td>
                <td>{{$relatorio['custo_fixo']}}</td>

            </tr>
        </tbody>


    </table>

    @endisset
</div>
@endsection