@extends('layouts.backend.app')

@section('title','FeedBack')

@push('css')
@endpush

@section('content')
    <div class="container">

        <div class="block-header">
            <h2>FeedBack</h2>

            {{--            {{ dd( $toppositive->feedbackToUser->name) }}--}}

        </div>
        <!-- Widgets -->
        <div class="row">


            {{--            return--}}
            @foreach($tops as $top)
                {{--            {{ dd($top) }}--}}
                @foreach($top->feedbacks as $question)
                    {{ $question }}
                    {{--                {{ $top }}--}}
                @endforeach
            @endforeach

            {{--            @endforeach--}}





            {{--            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
            {{--                <div class="info-box bg-light-green hover-expand-effect">--}}
            {{--                    <div class="icon">--}}
            {{--                        <i class="material-icons">thumb_up_alt</i>--}}
            {{--                    </div>--}}
            {{--                    <div class="content">--}}
            {{--                        <div class="text">{{ $toppositive->question->question_name }}</div>--}}
            {{--                        <div class="text text-center" data-fresh-interval="20"><h4><b>{{ $toppositive->feedbackToUser->name }}</b></h4></div>--}}
            {{--                        <div class="text" data-from="0" data-to="{{ $toppositive->feedbackToUser->name ?? '' }}" data-speed="15" data-fresh-interval="20"></div>--}}
            {{--                        <div class="text" data-from="0" data-to="{{ $toppositive->feedbackToUser->name ?? '' }}" data-speed="15" data-fresh-interval="20"></div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}


            {{--            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
            {{--                <div class="info-box bg-red hover-expand-effect">--}}
            {{--                    <div class="icon">--}}
            {{--                        <i class="material-icons">thumb_down_alt</i>--}}
            {{--                    </div>--}}
            {{--                    <div class="content">--}}
            {{--                        <div class="text">{{ $topnegative->question->question_name }}</div>--}}
            {{--                        <div class="text text-center" data-fresh-interval="20"><h4><b>{{ $topnegative->feedbackToUser->name }}</b></h4></div>--}}

            {{--                        --}}{{-- <div class="text">{{ $topnegative->feedbackToUser->name }}</div>--}}
            {{--                        --}}{{-- <div class="number count-to" data-from="0" data-to="{{ $topnegative->feedbackToUser->name ?? '' }}" data-speed="1000" data-fresh-interval="20"></div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

        </div>
        {{--        end widgets--}}


    </div>

@endsection
@push('js')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('assets/backend/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/index.js') }}"></script>
@endpush
