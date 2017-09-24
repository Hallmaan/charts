@extends('app')
@section('content')
  <div class="container">
    <div class="row" style="width: 50%">
      <div class="col">
        <h4>Choose Month</h4>
      </div>
      <div class="col">
        <select class="form-control" id="month">
          <option selected="" disabled="true">Pick One</option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">Jule</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div id="user_agent"></div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div id="url"></div>
      </div>
      <div class="col">
        <div id="http_host"></div>
      </div>
    </div>
  </div>
@endsection
@section('asset_footer')
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  @include('charts.user_agent')
  @include('charts.url')
  @include('charts.http_host')
  <script type="text/javascript">
    @if ($month)
      // window.history.pushState("string", "Report Traffic X Company", "{{ url('/') }}");
      // $(function() {
      //   $("#month").val("{{ $month }}").change();
      // });
    @endif
    $(function() {
      $("#month").change(function() {
        $(location).attr('href', '{{ url('/') }}' + '/' + $(this).val());
      });
    });
  </script>
@endsection
