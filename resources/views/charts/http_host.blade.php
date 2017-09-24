<script>
  // Create the chart
  Highcharts.chart('http_host', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Http Host'
      },
      xAxis: {
          type: 'category'
      },
      yAxis: {
          title: {
              text: 'Total data'
          }

      },
      legend: {
          enabled: false
      },
      plotOptions: {
          series: {
              borderWidth: 0,
              dataLabels: {
                  enabled: true,
                  format: '{point.y:f}'
              }
          }
      },

      tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b><br/>'
      },

      series: [{
          name: 'Http Host',
          colorByPoint: true,
          data: [
            @foreach ($data_http_host as $key => $value)
            {
              name: "{{ $value->http_host }}",
              y: {{ $value->count }}
            },
            @endforeach
          ]
      }]
  });
</script>
