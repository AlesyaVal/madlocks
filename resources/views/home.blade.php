@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">оставьте отзыв</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-inline">
 
  <div class="form-group">
    
	<textarea placeholder="Сообщение" name="message" rows="10" cols="45"></textarea>
      </div>
  <button type="submit" class="btn btn-default">отправить</button>
</form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
