<?php
session_start();

if(!isset($_SESSION['dddd'])){
?>

{{-- <script>window.location.href = '{{route("pages.create")}}';</script> --}}
<?php
$_SESSION["dddd"] = 11;
}

$button1 = 0;
$button2 = 0;
?>
@extends('layouts.app')
{{-- @extends('layouts.frontend') --}}

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center; color:#000;">Todays Attendence</div>

                <div class="panel-body">
                    @if (Auth::guest())

                        {{-- <script>window.location.href = '{{route("login")}}';</script> --}}

                    @endif

                        {{-- <p style="font-size:12px;"><b>Note:</b>&nbsp;&nbsp; Please use your office system to Punch In/Out but if you forgot or<br>
                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; want to work from home then E-mail at hybridlogics@gmail.com<br>
                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  for Punch In/Out timing.<br><br><br></p> --}}





                        <div class="container">
                            <div class="row">
                                <div class="col-md-4" style="text-align: center;">
                            <div  id="digital-clock" style="font-size: 60px;"></div>
                            <h6 style="font-size: 20px;">{{date('D, d/M/y')}} </h6> &ensp;&ensp;&ensp;&ensp;
                                </div>
                            </div>
                        </div>





                        <div class="container btn-container">

                            &ensp;&ensp;&ensp;<button type="button" class="btn-in <?php

                            if($_SESSION["dddd"] == 1){
                                echo "btn btn-success ";
                                $button1 = 1;
                            }
                            elseif($_SESSION["dddd"] == 2){
                                echo "btn btn-success disabled";
                                $button1 = 2;
                            }
                            elseif($_SESSION["dddd"] == 3){
                                echo "btn btn-success disabled";
                                $button1 = 3;
                            }

                            ?> "
                                    onclick="myFunction()"   >
                                    &ensp;&ensp;&ensp;TIME IN&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</button>



                            <button type="button" class="btn-out<?php
                            if($_SESSION["dddd"] == 1){
                                echo "btn btn-success disabled";
                                $button2 = 1;
                            }
                            elseif($_SESSION["dddd"] == 2){
                                echo "btn btn-success ";
                                $button2 = 2;
                            }
                            elseif($_SESSION["dddd"] == 3){
                                echo "btn btn-success disabled";
                                $button3 = 3;
                            }

                            ?>" onclick="myFunction1()">
                                &ensp;&ensp;&ensp;TIME OUT&ensp;&ensp;&ensp;</button>

                        </div>

                        <script>
                            function myFunction() {
                                <?php
                                        if($button1 == 1){
                                            ?>
                                            // window.location.href = '{{route("pages.create")}}';
                                            <?php
                                        }
                                ?>
                                }
                            function myFunction1() {
                                <?php
                                        if($button2 == 2){
                                        $_SESSION["whenIn"] = 1;
                                        ?>
                                        // window.location.href = '{{route("pages.create")}}';
                                <?php
                               }
                                ?>
                            }
                        </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection



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

