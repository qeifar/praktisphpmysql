<html> 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            .wrapper {
                margin: 0 auto;
                width: 1366px;
            }

            a:link, a:visited {
                text-align: center;
                text-decoration: none;
                display: inline-block;
                color: white;
            }

            body {
                overflow: hidden;
                background-color: maroon;
                width: 100%;
                height: 1000px;

                /* Center and scale the image nicely  */
                background-size: 1400px 700px;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
            }

            .img_icons1 {
                width: 250%;
                transform: translate(85%, 0%);

                /* Add the blur effect 
                filter: blur(7px);
                -webkit-filter: blur(7px);*/
            }

            h2 {
                transform: translate(55%, -15%);
                font-weight: normal;
                font-size: 50px;
                white-space: nowrap;
                color: goldenrod;
                font-family: 'Times New Roman';

                /* Add the blur effect 
                filter: blur(7px);
                -webkit-filter: blur(7px);*/
            }

            h3 {
                transform: translate(0%, -47%);
                color: goldenrod;
            }

            /* Header Section */
            .header {
                overflow: hidden;
                background-color: rgba(0,0,0,0);;
                padding: 10px 10px;
                transform: translate(-18%, -40%);
                width: 153%;
            }

            .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px; 
                line-height: 25px;
                border-radius: 4px;
            }

            .header a:hover {
                background-color:black;
                color: black;
            }

            .header a.active {
                font-family: "Times New Roman";
                color: goldenrod;
                transform: translate(93%, 10%);
            }

            .img_logout {
                transform: translate(-5%, -5%);
            }

            .header-right {
                float: right;
                padding-top: 20px;
            }

            @media screen and (min-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                
                .header-right {
                    float: none;
                }
            }

            /* width */
            ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background-color: #0a0a0a; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #888; 
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #555; 
            }

            .form-control {
                background-color: rgba(0,0,0,0.3); /* Black w/opacity/see-through */
            }

            textarea {
                background-color: rgba(0,0,0,0.3); /* Black w/opacity/see-through */
            }

            .input_1 {
                background-color: rgba(0,0,0,0.3); /* Black w/opacity/see-through */
                width: 50%;
                text-align: center;
                transform: translate(625%, 15%);
            }

            h4 {
                font-size: 20px;
            }
                                
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="header-right">
                    <a class="active" href="index.html">
                        <img class="img_logout" style="width:20px;" src="Wallpaper/Logout.png">
                        LOGOUT
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <img src="Wallpaper/CrimsonLion.png" class="img_icons1"> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h2>UNIVERSITY CRIMSON LION</h2>  
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-12" align="center">
                    
                    <button type="button" class="btn btn-outline-success btn-lg">
                        <a href="http://localhost/ucl/vologin.php">
                            LOGIN
                        </a>                     
                    </button> 
                    <button type="button" class="btn btn-outline-info btn-lg">
                        <a href="http://localhost/ucl/register.php">
                            REGISTER
                        </a>
                    </button>
                </div>
            </div>
        </div>

    </body>
</html>