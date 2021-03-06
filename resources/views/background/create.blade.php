@extends('layouts.Admin')

@section('header')

@endsection
@section('content')

    <div class="container-fluid">

        <h1><i class="far fa-image"></i>@lang("Add Background")</h1>

     <div class="row">

        <div class='col-lg-6 col-lg-offset-6' >

			<hr>
			 {{ Form::open(array('url' => 'background', 'method' => 'POST', 'files' => true))}}


            <div class="form-group">
                @lang("Title")
                <br>

                {{ Form::text('title', null, array('class' => 'form-control')) }}

            </div>

            <div class="form-group">
                @lang("Body")
                <br>

                {{ Form::textarea('body', null, array('class' => 'form-control')) }}

            </div>


            <div class="form-group">
                @lang("Link Title")
                <br>

                {{ Form::text('link_title', null, array('class' => 'form-control')) }}

            </div>


            <div class="form-group">
                @lang("Link")
                <br>

                {{ Form::text('link', null, array('class' => 'form-control')) }}

            </div>




            <div class="form-group">
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">@lang("Choose Photo")</label>
            </div>
            </div>

            {{Form::submit(__('Add'), array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
         </div>
    </div>
     </div>
</div>


</br>

@endsection


