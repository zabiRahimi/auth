@extends('studyPhp.layoutPhp')
@section('title') gettype @endsection
@section('content')
  <style media="screen">
  p{background: #f0f0f0; text-align: right;direction: rtl;padding: 15px; border-radius: 4px;}
  p strong{direction: ltr; text-align: left; display: inline-block;}
  </style>

  <p>
    توسط دستور <strong>gettype()</strong> می توان نوع داده را مشخص کرد .
  </p>
  {{ 'zabi' }}
  {{ header("X_MY:kd") }}
  <pre>{{ var_dump(headers_list() )}}</pre>

@endsection
