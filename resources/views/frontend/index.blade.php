@extends('layouts.frontend')

@section('content')

<div class="middle-container">
	<div class="current-time"> <h2 id="digital-clock"></h2></div>
	<h6 class="date-div">{{date('D, d/M/y')}}</h6>
	<form method="post">
		<button type="button" class="btn-in-out"> TIME IN </button>
	</form>

</div>




<script type="text/javascript">

//======Get and shows current time without needing to refresh the browser each time to log in current time ========
    function getDateTime() {
        var now     = new Date(); 
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds(); 
         
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }   
        var dateTime = hour+':'+minute + ' Hrs';   
         return dateTime;
    }

    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("digital-clock").innerHTML = currentTime;
    }, 1000);
    
</script>


@endsection




