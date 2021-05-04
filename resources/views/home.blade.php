@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div style="padding-bottom: 40px;">
                @if(Auth::user()->frappe_user_id == "STR00001939")
                    <iframe
                            id="metabase"
                            src="https://report.nana.sa/public/dashboard/511b70a9-37d4-42bb-8335-87614610781e"
                            frameborder="0"
                            width="100%"
                            height="100%"
                            allowtransparency
                    ></iframe>
                @elseif(Auth::user()->frappe_user_id == "STR00002052")
                <iframe
                            id="metabase"
                            src="https://report.nana.sa/public/dashboard/b4a2bf91-2f54-4156-9530-a6fc940b1336"
                            frameborder="0"
                            width="100%"
                            height="100%"
                            allowtransparency
                    ></iframe>
                @else
                    <iframe
                            id="metabase"
                            src="https://report.nana.sa/public/dashboard/899c5e83-c109-4d45-bdbd-c1fe0f17a550?charity_id={{ Auth::user()->frappe_user_id }}"
                            frameborder="0"
                            width="100%"
                            height="100%"
                            allowtransparency
                    ></iframe>
                @endif
            </div>
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
@endsection
