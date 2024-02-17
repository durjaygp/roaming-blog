@extends('frontEnd.layout')
@section('content')
    <div id="content">
      <div class="slider-block style-one mt-60">
        <div class="container"> 
          <div class="row row-gap-32">
            <div class="col-md-3 col-sm-12">
              
            </div>
            <div class="col-md-6 col-sm-9">
              {{--  <pre>
                {{print_r($records)}}
              </pre>  --}}

              
              
             
                <center>
                  <h3>Search "{{$name}}"</h3>
                <p>{{ $class_word}}</p>
                </center>
                <hr>
                <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <br>
                        <div class="alert alert-warning" role="alert">
                        @foreach ($records as $record)
                            {{ $record->WM_meaning}}
                          
                            @if($record->WM_sentence)
                            <br>
                            {{ $record->WM_sentence}}
                            @endif
                          <br>
                            @endforeach
                
                          </div>
                      </div>
                    </div>
                  </div>
                 
            </div>
            <div class="col-md-3 col-sm-3"></div>
          </div>
        </div>
      </div>
      
      
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->


@endsection