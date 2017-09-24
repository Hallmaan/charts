<script>
  // Create the chart
  Highcharts.chart('user_agent', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'User Agent'
      },
      xAxis: {
          type: 'category'
      },
      yAxis: {
          title: {
              text: 'Total Data'
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
          name: 'User Agent',
          colorByPoint: true,
          data: [
            @foreach ($data_user_agent as $key => $value)
            {
              name: "{{ $value->user_agent }}",
              y: {{ $value->count }}
            },
            @endforeach
          ]
      }]
  });
</script>
