<script>
  // Create the chart
  Highcharts.chart('url', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Url'
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
          name: 'Url',
          colorByPoint: true,
          data: [
            @foreach ($data_url as $key => $value)
            {
              name: "{{ $value->url }}",
              y: {{ $value->count }}
            },
            @endforeach
          ]
      }]
  });
</script>
