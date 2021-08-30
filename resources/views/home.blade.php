@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            -->
            <div class="card-header">
                 <h3> Employeers </h3>
                 <br>
                 <a href="{{url('/employeer/add')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Add Employeer</a>   

                 <a href="{{url('/text')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Text check</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
             <thead>
                 <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Name</th>
                     <th scope="col"></th>
                     <th scope="col"></th>
                 </tr>
             </thead>                               
                 <tbody>
                     @if (count($employeers) > 0)
                         @foreach ($employeers as $employeer)
                             <tr>
                                 <th scope="row">{{$employeer->id}}</th>
                                 <th scope="row">{{$employeer->fname}} {{$employeer->pname}} {{$employeer->sname}}</th>
                                 <th scope="row">
                                    <a href="{{url('/employeer/edit/'.$employeer->id)}}">Изменить</a>
                                </th>
                                 <th scope="row">
                                         <a href="{{url('/employeer/delete/'.$employeer->id)}}">Удалить</a>
                                </th>
                             </tr>
                         @endforeach
                     @else
                         <tr>
                             <th scope="row">I do not have records</th>
                         </tr>
                     @endif
                 </tbody>
         </table>
         {{ $employeers->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
