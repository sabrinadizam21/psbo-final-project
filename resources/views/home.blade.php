@extends('layouts.master')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('content')
<body style = "background-image:url(./images/bg.png);
    background-color: #1F076C;">


            
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->


<div id="wrapper">
                
                <div class="container">
                    
                    <div id="main-footer">
                        <div id="rekam-medis">
                            <div>
                            </div>
                        </div>
                        <div id="jadwal-dokter">
                            
                        </div>  
                        <div id="konsultasi">
                                
                        </div> 
                    </div>
                </div>
                </div>
            </div>
</body>

@endsection