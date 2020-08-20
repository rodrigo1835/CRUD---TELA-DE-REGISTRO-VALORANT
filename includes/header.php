<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>

    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Signika', sans-serif;
        }

        html,body{
            height: 100%;
        }

        .center{
            width: 100%;
            margin: 0 auto;
            padding: 0 2%
        }

        .clear{clear: both;}

        .banner{
            width: 100%;
            height: 100vh;

            background-image: url('https://storage.googleapis.com/stateless-married-games/2020/05/f0fae80b-valorant-viper-4k-04-1920x1080-1.jpg');
            background-size: cover;
            background-position: center;
        }

        .banner-2{
            width: 100%;
            height: 100vh;

            background-image: url('https://wallpapercave.com/wp/wp6202035.jpg');
            background-size: cover;
            background-position: center;
        }

        .text-banner h1{
            position: absolute;
            bottom: 5%;
            color: white;
        }
    
        .content{
            float: right;
            margin-top: 10em;
            width: 25rem;
            height: 30rem;
            background-color: #f9f9f9;
            
        }

        .form-create{
            text-align: center;
            padding: 10%;
        }

        .form-create h2{
            margin-bottom: 2.5%
        }

        .form-content input{
            width: 80%;
            padding: 10px;
            margin-bottom: 5%;

            border: 1px solid #DDD;
            border-radius: 4px;
            
        }

        .form-content input+input[type=number],
        .form-content input+input[type=number]::placeholder{
            background-color: grey;
            color: white;
        }

        form button{
            margin-top: 2%;
            margin-bottom: 10%;
            font-size: 40px;
            border: none;
            padding: 0;
            background: none;
            cursor: pointer;
            transition: 0.2s
        }

        form button:hover{
            color: #DDD;
        }
        
        .link{
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .link a{
            margin-right: 2%;
            text-decoration: none;
            color: black;

            transition: 0.2s;
        }

        .link a:hover{
            color: #DDDD;
        }

        /* Usuarios Cadastrados Página */

        .container{
            padding: 2%;
            width: 100%;
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            gap: 1em;

        }

        .usuarios-registrados-container{
            background-color: #f9f9f9;
            padding: 5%;
            display:flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .usuarios-registrados-container img{
            width: 25%;
            height: 30%;
            margin-bottom: 5%;

            border-radius: 50%;
        }

        .usuarios-registrados-container p{
            margin-bottom: 1%;
        }

        .usuarios-registrados-container span{
            color: #E31459;
            font-weight: bold;
        }

        .icons{
            padding: 0 2%

        }

        .icons a{
            margin-right: 0.5em;
            color: lime;
        }

        .icons a+a{
            color: black;
        }

        .icons form{
            display: inline-block;
        }

        .icons form button{
            text-align: center;
            color: red;
            font-size: 16px;
        }



        @media(max-width: 600px){
            .banner{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .content{
                float: none;

                width: 80%;
                height: 40%;
                margin-top: 0;
                margin-left: 10%;
            }

            .form-content input::placeholder{font-size:9.5px}

            .text-banner h1{
                left: 30%;
                right: 25%;

                font-size: 24px;
            }

            .container{
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 0 auto;             
            }

        }

        @media(max-height: 360px){
            .text-banner h1{
                display: none;
            }     
        }

        @media(max-height: 700px){
            .text-banner h1{
                display: none;
            }
            body{
                background: linear-gradient(#e66465, #9198e5);
            }

        }


    
    </style>
</head>
<body>