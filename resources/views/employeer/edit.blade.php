@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Emploeer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/employeer/update/'.$emploeer->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{$emploeer->fname}}" required autocomplete="fname" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pname" class="col-md-4 col-form-label text-md-right">{{ __('Past Name') }}</label>

                            <div class="col-md-6">
                                <input id="pname" type="text" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ $emploeer->pname }}" required autocomplete="pname" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="sname" type="text" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ $emploeer->sname }}" required autocomplete="sname" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Emploeer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
