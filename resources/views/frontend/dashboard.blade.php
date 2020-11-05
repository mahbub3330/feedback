@extends('layouts.backend.app')

@section('title','FeedBack')

@push('css')
@endpush

@section('content')
    <div class="container-fluid pt-3">

        <div class="block-header">
            <h2>FeedBack</h2>
        </div>
        <!-- Widgets -->
        <div class=" ">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


        @if(count($topfeedback))
        @foreach($topfeedback as $key => $feedback)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="info-box {{ $key % 2 == 0 ? 'bg-light-green' : 'bg-red' }} hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">thumb_up_alt</i>
                    </div>
                    <div class="content">
                        <div class="text">{{ $feedback->question_name  }}</div>
                        <div class="text text-center" data-fresh-interval="2"><h4><b>{{ $feedback->top_feedback_top  }}</b></h4></div>
{{--                        <div class="text" data-from="0" data-to="who" data-speed="15" data-fresh-interval="20"></div>--}}
{{--                        <div class="text" data-from="0" data-to="where" data-speed="15" data-fresh-interval="20"></div>--}}
                    </div>
                </div>
            </div>
        @endforeach
            @else
            <h3><span>No Feedback Today</span></h3>
            @endif
        </div>
{{--        end widgets--}}
        </div>


    </div>

@endsection
@push('js')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('assets/backend/plugins/chartjs/Chart.bundle.js') }}"></script>


    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/index.js') }}"></script>
@endpush
