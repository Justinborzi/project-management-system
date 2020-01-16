<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Management Solution</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body>
        <header>
            <div>
                <img src="" alt="" srcset="">
            </div>
            <ul class="links">
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/projects">Projects</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/blog">Blog</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/users">Users</a></li>
                <li><a href="{{env('APP_FULL_URL')}}/admin">Admin</a></li>
            </ul>
        </header>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <h2 class="title">Project Management</h2>
                    <p>by {{env("APP_AUTHOR")}}</p>
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
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="{{env('APP_FULL_URL')}}/projects">Projects</a></li>
                    <li><a href="{{env('APP_FULL_URL')}}/blog">Blog</a></li>
                    <li><a href="{{env('APP_FULL_URL')}}/users">Users</a></li>
                </ul>
            </div>
            <div class="f-contact-us">
                <h2 class="f-title">Contact</h2>
                <ul>
                    <li><a href="mailto:example@domain.com">example@domain.com</a></li>
                    <li>8219 O'Reilly Drive</li>
                    <li>172-890-1358</li>
                    <li>Website Design</li>
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
                <p style="position: absolute; bottom: 0; right: 0; margin: auto 5px; width: fit-content; color: white;">&copy; MysticSeagull • 2020 - <?= date("Y") ?></p>
            </div>
        </footer>
    </body>
</html>