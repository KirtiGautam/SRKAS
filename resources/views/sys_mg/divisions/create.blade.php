@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Add Designation</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('divisions.store')}}" method="POST">
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">business</i>
                                <input type="text" name="division_name" id="division_name" class="validate" value="{{ Request::old('division_name') ? : '' }}">
                                <label for="division_name">Designation Name</label>
                                <span class="{{$errors->has('division_name') ? 'helper-text red-text' : '' }}">{{$errors->first('division_name')}}</span>
                            </div>
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light mt-15 col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/divisions">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
