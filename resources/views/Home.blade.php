<!-- @if($result === 100)
  <h1>Result is hundred</h1>
@elseif($result === 1000)
   <h1>Result Thousand</h1>
   @elseif($result === 10000)
   <h1>Result Ten Thousand</h1>
   @else
     <h1>Result is not in our range</h1>
     @endif -->


     @switch($result)

       @case(100)
        <h1>Result is hundred</h1>
        @break

        @case(1000)
        <h1>Result Thousand</h1>
        @break

        @case(10000)
        <h1>Result Ten Thousand</h1>
        @default
        <h1>Result is not in our range</h1>


     @endswitch