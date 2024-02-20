@extends('layout')
@section('content')
@php
// print_r($data);
$male = 0;
$female = 0;
@endphp
@foreach($data as $key => $value)

    @if($value['gender'] == 'Male')
        @php $male += 1; @endphp

    @elseif($value['gender'] == 'Female')
        @php $female += 1; @endphp

    @endif

@endforeach

{{-- @php echo $female; echo $male; @endphp --}}

<div style="width: 30%; height: 30%;">
    <canvas id="myChart" ></canvas>
</div>

{{-- @include('footer') --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    var maleCount = {{ $male }};
    var femaleCount = {{ $female }};
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Male', 'Female'],
        datasets: [{
          label: 'Gender wise Chart',
          data: [maleCount, femaleCount],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  @endsection
