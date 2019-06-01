@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>{{$network_id}}</h1>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>Criterio</th>
                            <th>Aguila</th>
                            <th></th>
                            <th>FCF</th>
                            <th></th>
                        </thead>
                        <tbody>
                        <thead class="thead-light">
                            <tr>
                                <td colspan="6">Datos de procesamiento</td>
                            </tr>
                        </thead>
                        <tr>
                            <td colspan="">Fecha de Inicio de Post</td>
                            <td colspan="2">1 de enero de 2014</td>
                            <td colspan="2">31 de marzo de 2019	</td>
                            
                        </tr>
                        <tr>
                            <td colspan="">Fecha de Finalizacion de Post</td>
                            <td colspan="2">1 de enero de 2014</td>
                            <td colspan="2">31 de marzo de 2019	</td>
                        </tr>
                        <tr>
                            <td colspan="">Fecha de Procesamiento Inicio</td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                        </tr>
                        <tr>
                            <td colspan="">Fecha de Procesamiento Final</td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                        </tr>
                        <thead class="thead-light">
                            <tr>
                                <td colspan="" >Volumen Procesado</td>
                                <td colspan="">No</td>
                                <td colspan="">%</td>
                                <td colspan="">No</td>
                                <td colspan="">%</td>
                            </tr>
                        </thead>
                        <tr>
                            <td colspan="">Numero de post</td>
                            <td colspan="">{{$data->CervezaAguila['no_posts']}}</td>
                            <td colspan=""></td> 
                            <td colspan="">{{$data->FCF['no_posts']}}</td>
                            <td colspan=""></td>
                        </tr>
                        <tr>
                            <td colspan="">Post Selección</td>
                            <td colspan="">{{$data->CervezaAguila['no_post_seleccion']}}</td>
                            <td colspan=""></td>
                            <td colspan="">{{$data->FCF['no_post_seleccion']}}</td>
                            <td colspan=""></td>
                        </tr>
                        <thead class="thead-light">
                            <tr>
                                <td colspan="">Puntajes</td>
                                <td colspan="">Puntaje</td>
                                <td colspan="">No</td>
                                <td colspan="">Puntaje</td>
                                <td colspan="">No</td>
                            </tr>
                        </thead>
                        <tr>
                            <td colspan="">Usuarios que han interactuado</td>
                            <td colspan="">(+100)</td>
                            <td colspan=""> {{$data->CervezaAguila['user_interactions']}} </td>
                            <td colspan="">(+20)</td>
                            <td colspan="">{{$data->FCF['user_interactions']}}</td>
                        </tr>
                        <tr>
                            <td colspan="">Commentarios sobre post</td>
                            <td colspan="">(+2) por comentario</td>
                            <td colspan="">{{$data->CervezaAguila['comments']}}</td>
                            <td colspan="">(+2) por comentario</td>
                            <td colspan="">{{$data->FCF['comments']}}</td>
                        </tr>
                        <tr>
                            <td colspan="">Palabras positivas</td>
                            <td colspan="">(+5) por cada Keyword</td>
                            <td colspan="">{{ $data->CervezaAguila['keywords'] }}</td>
                            <td colspan="">(+5) por cada Keyword</td>
                            <td colspan="">{{ $data->FCF['keywords'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="">Reacciones sobre post</td>
                            <td colspan=""></td>
                            <td colspan="">{{ $data->CervezaAguila['reactions_over_posts'] }}</td>
                            <td colspan=""></td>
                            <td colspan="">{{ $data->FCF['reactions_over_posts'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Shares sobre post</td>
                            <td colspan="">(+5)</td>
                            <td colspan="">{{ $data->CervezaAguila['shares'] }}</td>
                            <td colspan=""></td>
                            <td colspan="">{{ $data->FCF['shares'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Like</td>
                            <td colspan="">(+2)</td>
                            <td colspan=""> {{ $data->CervezaAguila['reactions']['like'] }}</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->FCF['reactions']['like'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Haha</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->CervezaAguila['reactions']['haha'] }}</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->FCF['reactions']['haha'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Love</td>
                            <td colspan="">(+5)</td>
                            <td colspan="">{{ $data->CervezaAguila['reactions']['love'] }}</td>
                            <td colspan="">(+5)</td>
                            <td colspan="">{{ $data->FCF['reactions']['love'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Sad</td>
                            <td colspan="">(0)</td>
                            <td colspan="">{{ $data->CervezaAguila['reactions']['sad'] }}</td>
                            <td colspan="">(0)</td>
                            <td colspan="">{{ $data->FCF['reactions']['sad'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Angry</td>
                            <td colspan="">(-5)</td>
                            <td colspan="">{{ $data->CervezaAguila['reactions']['angry'] }}</td>
                            <td colspan="">(-5)</td>
                            <td colspan="">{{ $data->FCF['reactions']['angry'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Wow</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->CervezaAguila['reactions']['wow'] }}</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->FCF['reactions']['wow'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Comentarios sobre Comentarios</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->CervezaAguila['comments_over_comments'] }}</td>
                            <td colspan="">(+2)</td>
                            <td colspan="">{{ $data->FCF['comments_over_comments'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Reacciones sobre comentarios</td>
                            <td colspan="">(+1)</td>
                            <td colspan="">{{ $data->CervezaAguila['reactions_over_comments'] }}</td>
                            <td colspan="">(+1)</td>
                            <td colspan="">{{ $data->FCF['reactions_over_comments'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="">Likes sobre comentarios</td>
                            <td colspan="">(+1)</td>
                            <td colspan="">{{ $data->CervezaAguila['likes_over_comments'] }}</td>
                            <td colspan="">(+1)</td>
                            <td colspan="">{{ $data->FCF['likes_over_comments'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
