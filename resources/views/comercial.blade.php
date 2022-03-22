@extends('layouts.menu')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header text-center">
            Performance Comercial
            <form action="" class=" p-2">
                @csrf
                <div class="form-inline p-2">
                    <label for="">Periodo</label>
                    <select name="month" id="" class="form-control p-2">
                        <option value="1">Jan</option>
                        <option value="2">Fev</option>
                        <option value="3">Marc</option>
                        <option value="4">Abr</option>
                        <option value="5">Mai</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Ago</option>
                        <option value="9">Set</option>
                        <option value="10">Out</option>
                        <option value="11">Nov</option>
                        <option value="12">Dex</option>
                    </select>
                    <select name="year" id="" class="form-control p-2">
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        
                    </select>
                    <div class="text p-2"> a </div>
                    <select name="" id="" class="form-control p-2">
                        <option value="">Jan</option>
                        <option value="">Fev</option>
                        <option value="">Marc</option>
                        <option value="">Abr</option>
                        <option value="">Mai</option>
                        <option value="">Jun</option>
                        <option value="">Jul</option>
                        <option value="">Ago</option>
                        <option value="">Set</option>
                        <option value="">Out</option>
                        <option value="">Nov</option>
                        <option value="">Dex</option>
                    </select>
                    <select name="" id="" class="form-control p-2">
                        <option value="">2003</option>
                        <option value="">2004</option>
                        <option value="">2005</option>
                        <option value="">2006</option>
                        <option value="">2007</option>
                        
                    </select>
                </div>

            </form>
        </div>

        <div class="card-body">
            <div class="pm-tabs ">
                <ul role="tablist" class="nav nav-tabs nav-fill" >
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" role="tab" aria-controls="home" href="#clientetab">Por Cliente</a></li>
                     <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" href="#consultortab">Por Consultor</a></li>

                </ul>
                <div class="tab-content">
                    <div id="clientetab" class="tab-pane active">
                        <div class="table-responsive">
                           <table class="table table-striped ">
                               <thead>
                                <th>Clientes</th>
                               </thead>
                               <tbody>
                                 @isset($cliente)
                                     
                                 
                                   @foreach ($cliente as $cl )
                                   <tr>
                                       <td>{{$cl->no_razao}}</td>
                                       <td>
                                        <a href="/cliente_relatorio/{{$cl->co_cliente}}/{{$cl->data_emissao}}">
                                            <img src="{{asset('img/icone_relatorio.png')}}" alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ asset('img/icone_grafico.png')}}" alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ asset('img/icone_pizza.png')}}" alt="">
                                        </a>


                                       </td>
                                   </tr>
                                   <tr></tr>
                                   @endforeach
                               
                               </tbody>
                              

                           </table>
                           {{$cliente->render()}}
                           @endisset
                        </div>

                        <div class="table-responsive">


                        </div>
                       
                    </div>
                    <div id="consultortab" class="tab-pane ">
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <thead>
                                 <th>Consultores</th>
                                </thead>
                                <tbody>
                                  @isset ($fornecedor)
                                    @foreach ($fornecedor as $forn )
                                    <tr>
                                        <td>{{$forn->no_usuario}}</td>
                                        <td>
                                            <a href="">
                                                <img src="{{asset('img/icone_relatorio.png')}}" alt="">
                                            </a>
                                            <a href="">
                                                <img src="{{ asset('img/icone_grafico.png')}}" alt="">
                                            </a>
                                            <a href="">
                                                <img src="{{ asset('img/icone_pizza.png')}}" alt="">
                                            </a>
    
    
                                        </td>
                                        
                                    </tr>

                                    @endforeach
                                 
                                </tbody>

                            </table>
                            {{$fornecedor->render()}}
                            @endisset
                         </div>
                    </div>
                </div>


            </div>

        </div>

    </div>


</div>


@endsection