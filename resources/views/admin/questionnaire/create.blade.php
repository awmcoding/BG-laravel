@extends('layouts.app')

@section('content')
  <form class="form-horizontal" action="/questionnaires" method="POST">
    @csrf

    <div class="form-group row">
        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTitle" placeholder="Title"
            name="title" value="">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
        </div>
    </div>
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10">
       <button type="submit" class="btn btn-danger">Create Questionnaire</button>
     </div>
   </div>
 </form>
@endsection


