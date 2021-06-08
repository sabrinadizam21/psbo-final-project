<!DOCTYPE html><html class=''>
<head>
    <title>::Jadwal Dokter::</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

 @extends('layouts.master')
<body style="background-color: #D8C9FF;">
        <section>
            <div id="wrapper">
                <div id="header">
                    
                    <div id="main-header">
                        
                    </div>
                </div>
            </div>
            
            <div id="tabel-jadwal">
                <details>
                    <summary>Dokter Umum</summary>   
                    <div class="details-content">
                        <table id="tabel-dokter">
                        <tr>
                            <th>Dokter</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                        </tr>
                        <tr>
                            <td>Dr. Laszlo Kreizler</td>
                            <td>08.00-12.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Dr. Kevin swinger</td>
                            <td>13.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                        </tr>
                        <tr>
                            <td>Dr. Mory Kenzler</td>
                            <td>-</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                            <td>12.00-16.00</td>
                        </tr>
                        </table>
                    </div>
                    
                </details>

                <details>
                    <summary>Poli Gigi</summary>
                    <div class="details-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eligendi, ab quasi cupiditate temporibus perferendis eaque nemo! Fuga nisi assumenda explicabo nostrum odit voluptas dicta voluptatum nobis accusantium. At, perferendis?</p>
                    </div>
                </details>

                <details>
                    <summary>Poli Gigi</summary>
                    <div class="details-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eligendi, ab quasi cupiditate temporibus perferendis eaque nemo! Fuga nisi assumenda explicabo nostrum odit voluptas dicta voluptatum nobis accusantium. At, perferendis?</p>
                    </div>
                </details>

                <details>
                    <summary>Poli Gigi</summary>
                    <div class="details-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eligendi, ab quasi cupiditate temporibus perferendis eaque nemo! Fuga nisi assumenda explicabo nostrum odit voluptas dicta voluptatum nobis accusantium. At, perferendis?</p>
                    </div>
                </details>
            </div>
        </section>
        
        <script src="js/index.js"></script>
    </body>
</html>