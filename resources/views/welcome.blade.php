<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brasil</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>
<style>
    *, h1,h2{
        margin: 0;
        padding: 0;
        border-radius: 3px;
        font-family: Roboto, sans-serif;
        /* color: #011F26; */
    }
    .logo span{
        display: flex;
        align-items: center;
    }
    .logo{
        align-self: center;
        justify-content: center;
        margin: 30px;
        color: #F0941F;
    }
    .content-conatainer{
        justify-content: center;
        transition: 1s;
        animation-duration: 1s;
        animation-name: inicio;
    }
    @keyframes inicio {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    .container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;

        background-color: #363432;
    }

    #busca{
        width: 600px;
        height: 40px;
        border-radius: 3px;
        border:none;

        background-color: #fff;
        color: black;
    }
    .content-text{
        margin: 50px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #FAA732;
        height: 500px;

    }
    .icons-1{

        padding: 15px 0;
    }
    .content-text .box-content{
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 3px;
        background-color:#fff;
        min-height: 50px;
        margin: 5px;
    }
    .content-text h4{
        font-size: 1.25rem;
    }
    #icon{
        max-width: 100px;
    }
    .clima-icon{
        display: flex;
        justify-content: space-around;
        align-items: end;
        margin: 15px;
        text-align: center;
    }
    .clima-icon h5{
        text-align: end;
    }
    .header-text span {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        margin-top: 10px;
        color: #3C3C3C;
    }
    .temp span{
        display: flex;
        flex-direction: row;
    }
    .temp span h1{
        font-size: 3.5rem;
    }
    .box-content_itens{
        width: 80%;
        display: flex;
        align-items: center;
        justify-content: space-around;

    }
</style>
<body>
    <div class="container">
        {{-- {{dd($data)}} --}}
        <div class="content-conatainer">
            <div class="logo">
                <h1>OLHE</h1>
                <span><h4>PARA O</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(239, 96, 36, 1);transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.611 5.757 9.15 3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5h11c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888z"></path></svg></span>
            </div>

            <form action="{{ route('home')}}" method="GET">
                <input type="text" name="busca" id="busca" placeholder="      Buscar...">
            </form>
            <div class="content-text">
                <div class="clima-icon">
                    <div class="header-icon">
                        <img id ="icon" src=" https://openweathermap.org/img/wn/{{$data['weather'][0]['icon'] ?? ''}}@2x.png" alt="">
                        <h5>{{strtoupper($data['weather'][0]['description'] ?? '')}}</h5>
                    </div>

                    <div class="header-text">
                        <div>
                            <div>
                                <h5>{{$day ?? ''}}</h5>
                                <h5 style="color:#F24405">{{$date ?? ''}}</h5>
                            </div>
                            <span><h1 style="font-family: Poppins, sans-serif">{{$data['name'] ?? ''}}</h1></span>
                        </div>
                    </div>

                   <div class="temp">
                        <span><h1 style="font-weight: 300">{{round($data['main']['temp'] ?? '0')}}</ style="font-weight: 300"><h6>C</h6></span>
                    </div>

                </div>
                <div class="box-content">
                    <div class="box-content_itens">
                        <div class="icons-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #CC3F0D;transform: ;msFilter:;"><path d="M12 2C6.579 2 2 6.58 2 12s4.579 10 10 10 10-4.58 10-10S17.421 2 12 2zm0 18c-4.337 0-8-3.664-8-8 0-3.998 3.115-7.417 7-7.927V6.09C8.167 6.569 6 9.033 6 12c0 3.309 2.691 6 6 6 1.595 0 3.1-.626 4.237-1.763l-1.414-1.415A3.97 3.97 0 0 1 12 16c-2.206 0-4-1.794-4-4 0-1.858 1.279-3.411 3-3.858v2.146c-.59.353-1 .993-1 1.712 0 1.081.919 2 2 2s2-.919 2-2c0-.719-.41-1.359-1-1.712V4.073c3.885.51 7 3.929 7 7.927 0 4.336-3.663 8-8 8z"></path></svg>
                                <h5>Pressao</h5>
                                <h5 style="color:#808080">{{$data['main']['pressure'] ?? ''}} hPa</h5>
                            </span>
                        </div>
                        <div class="icons-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(65, 174, 217, 1);transform: ;msFilter:;"><path d="M12.6 2.4c-.4-.3-.9-.3-1.2 0C9.5 3.9 4 8.5 4 14c0 4.4 3.6 8 8 8s8-3.6 8-8c0-5.4-5.5-10.1-7.4-11.6"></path></svg>
                                <h5>Umidade</h5>
                                <h5  style="color:#808080">{{$data['main']['humidity'] ?? ''}}%</h5>
                            </span>
                        </div>
                        <div class="icons-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #ccc;transform: ;msFilter:;"><path d="M13 5.5C13 3.57 11.43 2 9.5 2 7.466 2 6.25 3.525 6.25 5h2c0-.415.388-1 1.25-1 .827 0 1.5.673 1.5 1.5S10.327 7 9.5 7H2v2h7.5C11.43 9 13 7.43 13 5.5zm2.5 9.5H8v2h7.5c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5c-.862 0-1.25-.585-1.25-1h-2c0 1.475 1.216 3 3.25 3 1.93 0 3.5-1.57 3.5-3.5S17.43 15 15.5 15z"></path><path d="M18 5c-2.206 0-4 1.794-4 4h2c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2H2v2h16c2.206 0 4-1.794 4-4s-1.794-4-4-4zM2 15h4v2H2z"></path></svg>
                                <h5>Vento</h5>
                                <h5  style="color:#808080">{{$speedWind ?? ''}}km/h</h5>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="box-content_itens">
                        <div class="icons-1 temp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #4CE1FF;transform: ;msFilter:;"><path d="M19 21a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14zm-8-9V7h2v5h4l-5 5-5-5h4z"></path></svg>
                            <span><h4>{{round($data['main']['temp_min'])}}</h4></span>
                            <h5>Min</h5>
                        </div>
                        <div class="icons-1 temp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #ccc;transform: ;msFilter:;"><path d="M9 16a3.001 3.001 0 0 0 6 0c0-.353-.072-.686-.184-1H9.184A2.962 2.962 0 0 0 9 16z"></path><path d="M18 6V4h-3.185A2.995 2.995 0 0 0 12 2c-1.654 0-3 1.346-3 3v5.8A6.027 6.027 0 0 0 6 16c0 3.309 2.691 6 6 6s6-2.691 6-6a6.027 6.027 0 0 0-3-5.2V10h3V8h-3V6h3zm-4.405 6.324A4.033 4.033 0 0 1 16 16c0 2.206-1.794 4-4 4s-4-1.794-4-4c0-1.585.944-3.027 2.405-3.676l.595-.263V5a1 1 0 0 1 2 0v7.061l.595.263z"></path></svg>
                            <h6 style="color:#ccc">TEMPERATURA</h6>
                        </div>
                        <div class="icons-1 temp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #FF4500;transform: ;msFilter:;"><path d="M5 21h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm7-14 5 5h-4v5h-2v-5H7l5-5z"></path></svg>
                            <span><h4>{{round($data['main']['temp_max'])}}</h4></span>
                            <h5>Max</h5>
                        </div>
                    </div>
                </div>
                <div class="box-content"><h4>{{$data['coord']['lon'] ?? ''}}</h4></div>
                <div class="box-content"><h4>{{$data['base'] ?? ''}}</h4></div>
                <div class="box-content">

                </div>
                {{dd($data)}}
            </div>

        </div>
    </div>
</body>
</html>
