<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Management Solution</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html,
            body {
                background: linear-gradient(rgba(55, 0, 255), rgb(25, 15, 62));
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            html {
                height: fit-content;
            }

            body::-webkit-scrollbar-track {
                display: none;
            }

            body::-webkit-scrollbar {
                display: none;
            }

            body::-webkit-scrollbar-thumb {
                display: none;
            }

            .full-height {
                height: 93.8vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
                z-index: 5;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            header {
                position: sticky;
                top: 0;
                display: inline-flex;
                width: 100%;
                background: white;
                border-bottom: 2px solid black;
                justify-content: center;
                z-index: 10;
            }

            .title {
                font-size: 84px;
                color: white;
                margin-bottom: 0;
            }

            .m-b-md p {
                float: left;
                color: white;
                font-weight: 600;
                margin: 10px 20px;
            }

            header ul {
                display: inline-flex;
                justify-content: space-evenly;
                list-style: none;
                width: 100%;
            }

            .links li > a {
                color: #636b6f;
                padding: 0 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            li > a:hover {
                text-decoration: underline;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer {
                position: relative;
                bottom: 0;
                height: fit-content;
                width: 100%;
                background: #101010;
                border-top: 2px solid white;
                color: dimgrey;
                display: grid;
                grid-template-columns: auto auto auto auto auto;
            }

            footer .f-title {
                list-style: none;
                font-size: 20px;
                margin-left: 15px;
                color: rgb(173, 173, 173);
                margin-bottom: 0;
            }

            footer ul {
                margin-top: 5px;
            }

            footer img {
                width: 32px;
            }

            footer table {
                float: right;
                margin-right: 5px;
                margin-top: 5px;
            }

            footer table td {
                padding: 5px;
            }

            footer p {
                max-width: 450px;
                margin: auto 15px;
                width: 380px;
            }

            footer a {
                text-decoration: none;
                color: dimgrey;
            }

            .f-about-us {
                grid-column: 1;
                grid-row: 1
            }

            .f-navigation {
                grid-column: 2;
                grid-row: 1;
            }

            .f-contact-us {
                grid-column: 4;
                grid-row: 1;
            }

            .f-social-media {
                grid-column: 5;
                grid-row: 1;
            }

            /* Phone Screens */
            @media only screen and (min-width: 320px) {
                header {
                    position: relative;
                    top: 0;
                    display: inline-grid;
                    width: 100%;
                    background: white;
                    border-bottom: 2px solid #000000cf;
                    grid-template-columns: auto auto;
                }

                header ul {
                    display: block;
                    list-style: none;
                }

                .full-height {
                    height: 74.3vh;
                }

                .title {
                    font-size: 30px;
                    color: white;
                    margin-bottom: 0;
                }

                .f-about-us {
                    grid-column: 1;
                    grid-row: 1
                }

                .f-navigation {
                    grid-column: 1;
                    grid-row: 2;
                }

                .f-contact-us {
                    grid-column: 1;
                    grid-row: 3;
                }

                .f-social-media {
                    grid-column: 1;
                    grid-row: 4;
                }

                footer p {
                    max-width: 450px;
                    margin: auto 15px;
                    width: 290px;
                }
            }

            /* Tablet Screens */
            @media only screen and (min-width: 600px) {
            
            }

            /* Desktop Screens */
            @media only screen and (min-width: 768px) {
                html,
                body {
                    background: linear-gradient(rgba(55, 0, 255), rgb(25, 15, 62));
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100%;
                    margin: 0;
                }

                html {
                    height: fit-content;
                }

                body::-webkit-scrollbar-track {
                    display: none;
                }

                body::-webkit-scrollbar {
                    display: none;
                }

                body::-webkit-scrollbar-thumb {
                    display: none;
                }

                .full-height {
                    height: 93.8vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                    z-index: 5;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                header {
                    position: sticky;
                    top: 0;
                    display: inline-flex;
                    width: 100%;
                    background: white;
                    border-bottom: 2px solid black;
                    justify-content: center;
                    z-index: 10;
                }

                .title {
                    font-size: 84px;
                    color: white;
                    margin-bottom: 0;
                }

                .m-b-md p {
                    float: left;
                    color: white;
                    font-weight: 600;
                    margin: 10px 20px;
                }

                header ul {
                    display: inline-flex;
                    justify-content: space-evenly;
                    list-style: none;
                    width: 100%;
                }

                .links li > a {
                    color: #636b6f;
                    padding: 0 10px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                li > a:hover {
                    text-decoration: underline;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }

                footer {
                    position: relative;
                    bottom: 0;
                    height: fit-content;
                    width: 100%;
                    background: #101010;
                    border-top: 2px solid white;
                    color: dimgrey;
                    display: grid;
                    grid-template-columns: auto auto auto auto auto;
                }

                footer .f-title {
                    list-style: none;
                    font-size: 20px;
                    margin-left: 15px;
                    color: rgb(173, 173, 173);
                    margin-bottom: 0;
                }

                footer ul {
                    margin-top: 5px;
                }

                footer img {
                    width: 32px;
                }

                footer table {
                    float: right;
                    margin-right: 5px;
                    margin-top: 5px;
                }

                footer table td {
                    padding: 5px;
                }

                footer p {
                    max-width: 450px;
                    margin: auto 15px;
                    width: 380px;
                }

                footer a {
                    text-decoration: none;
                    color: dimgrey;
                }

                .f-about-us {
                    grid-column: 1;
                    grid-row: 1
                }

                .f-navigation {
                    grid-column: 2;
                    grid-row: 1;
                }

                .f-contact-us {
                    grid-column: 4;
                    grid-row: 1;
                }

                .f-social-media {
                    grid-column: 5;
                    grid-row: 1;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div>
                <img src="" alt="" srcset="">
            </div>
            <ul class="links">
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="http://">Projects</a></li>
                <li><a href="http://">Blog</a></li>
                <li><a href="http://">Users</a></li>
                <li><a href="http://">Admin</a></li>
            </ul>
        </header>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <h2 class="title">Project Management</h2>
                    <p>By MysticSeagull</p>
                </div>
            </div>
        </div>
        <footer>
            <div class="f-about-us">
                <h2 class="f-title">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius minima, quod voluptatem quo ea expedita fugit harum tempore veritatis recusandae laborum quas qui rem dolorem omnis pariatur dicta officia! Impedit.</p>
            </div>
            <div class="f-navigation">
                <h2 class="f-title">Navigation</h2>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="http://">Projects</a></li>
                <li><a href={{}}>Blog</a></li>
                    <li><a href="http://">Users</a></li>
                </ul>
            </div>
            <div class="f-contact-us">
                <h2 class="f-title">Contact</h2>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="f-social-media">
                <!--Icons thanks to Amit Jain, https://www.iconfinder.com/amit123jain -->
                <table>
                    <tr>
                        <td><a href=""><img src="assets/images/facebook.png" alt="" srcset=""></a></td>
                        <td><a href=""><img src="assets/images/youtube.png" alt="" srcset=""></a></td>
                        <td><a href=""><img src="assets/images/twitter.png" alt="" srcset=""></a></td>
                        <td><a href=""><img src="assets/images/rss.png" alt="" srcset=""></a></td>
                        <td><a href=""><img src="assets/images/github.png" alt="" srcset=""></a></td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>