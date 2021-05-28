<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>::SIK-POLI IPB::</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
    </head>

    <body style="background-color: #D8C9FF;">
        <section>
            <div id="wrapper">
                <div id="header">
                    
                    <div id="main-header">
                        <div class="main-container">
                            <div id="logo">
                                <span id="logo-name">SIK-POLI IPB</span>
                            </div>
                            <div id="user-menu">
                                <li><a href="{{url('home')}}">Home</a></li>
                                <li><a href="#">Rekam Medis</a></li>
                                <li><a href="{{url('jadwal_dokter')}}">Jadwal Dokter</a></li>
                                <li><a href="#">Konsultasi</a></li>
                            </div>  
                            <div id="profile-section">
                                <div class="profile-name">
                                    <a href="/profil">{{ Auth::user()->name }}</a>
                                </div>
                            </div> 
                        </div>
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