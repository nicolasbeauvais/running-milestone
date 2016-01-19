<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nicolas Beauvais Running milestone</title>
    <meta name="description" content="This year I will try to run 1000 kilometers (620 miles). This website show my progress to achieve this milestone." />

    <meta property="og:title" content="Nicolas Beauvais Running milestone" />
    <meta property="og:url" content="http://run.nicolas-beauvais.com/" />
    <meta property="og:image" content="http://run.nicolas-beauvais.com/background.jpg" />
    <meta property="og:description" content="This year I will try to run 1000 kilometers (620 miles). This website show my progress to achieve this milestone." />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        html, body {
            width: 100%;
            height: 100%;
            color: #fff;
            background-color: #222;
            font-family: 'Roboto', sans-serif;
        }

        #background {
            position: fixed;
            width: 100%;
            height: 100%;
            background-image: url('/background.jpg');
            background-position: center;
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: #fff;
        }

        .container {
            position: relative;
        }

        a {
            color: #53C2EC;
        }

        .me {
            text-align: center;
            margin: 40px auto 60px;
        }

        .me img {
            width: 90px;
            height: 90px;
            border-radius: 45px;
            display: block;
            margin: auto;
            border: 10px solid rgba(255, 255, 255, 0.3);
        }

        .me .name {
            font-size: 22px;
            font-weight: 300;
            margin-top: 10px;
        }

        .me .description {
            width: 360px;
            margin: 15px auto;
            font-size: 15px;
        }

        .me .twitter a {
            font-weight: 500;
            font-size: 16px;
        }

        .big-stat {
            width: 655px;
            text-align: center;
            margin: 0 auto 60px;
        }

        .sep {
            max-width: 400px;
            margin: 0px auto 30px;
            border-bottom: 3px solid rgba(255, 255, 255, 0.3);
        }

        #counter {
            color: #53C2EC;
        }

        #counter, #milestone {
            font-size: 120px;
            line-height: 90px;
            font-weight: 500;
        }

        .unit {
            font-size: 30px;
            font-weight: 300;
            text-transform: uppercase;
            text-align: right;
        }

        .small-stat {
            text-align: center;
        }

        .small-stat h3 {
            text-transform: uppercase;
            font-weight: 300;
            margin-bottom: 25px;
        }

        .small-stat .value {
            font-size: 60px;
            line-height: 60px;
            font-weight: 400;
        }

        .small-stat .unit {
            font-size: 16px;
            text-align: center;
            text-indent: 118px;
        }

        .credit {
            text-align: center;
            margin-top: 70px;
        }

        @media screen and (max-height: 950px) {
            .me {
                margin: 30px auto 40px;
            }

            .big-stat {
                width: 655px;
                margin: 0 auto 40px;
            }

            #counter, #milestone {
                font-size: 100px;
                line-height: 80px;
            }

            .credit {
                margin-top: 50px;
            }
        }

        @media screen and (max-width: 800px) {
            .big-stat {
                width: 500px;
            }

            #counter, #milestone {
                font-size: 80px;
                line-height: 60px;
            }

            .sep {
                max-width: 250px;
            }

            .unit {
                font-size: 25px;
            }

            .credit {
                text-align: center;
                margin-top: 50px;
            }

            .small-stat h3 {
                font-size: 22px;
            }

            .small-stat .value {
                font-size: 50px;
                line-height: 60px;
            }

            .small-stat .unit {
                font-size: 15px;
                text-indent: 100px;
            }
        }

        @media screen and (max-width: 650px) {
            .big-stat {
                width: 400px;
            }

            #counter, #milestone {
                font-size: 60px;
                line-height: 40px;
            }

            .sep {
                max-width: 150px;
            }

            .unit {
                font-size: 20px;
            }

            .credit {
                text-align: center;
                margin-top: 50px;
            }

            .small-stat {
                padding-bottom: 30px;
            }

            .small-stat h3 {
                font-size: 20px;
            }

            .small-stat .value {
                font-size: 45px;
                line-height: 50px;
            }

            .small-stat .unit {
                font-size: 15px;
                text-indent: 100px;
            }
        }

        @media screen and (max-width: 450px) {
            .me .description {
                width: 280px;
            }

            .big-stat {
                width: 280px;
            }

            #counter, #milestone {
                font-size: 48px;
                line-height: 40px;
            }

            .sep {
                max-width: 120px;
            }

            .unit {
                font-size: 18px;
            }

            .credit {
                text-align: center;
                margin-top: 50px;
            }

            .small-stat h3 {
                font-size: 18px;
            }

            .small-stat .value {
                font-size: 40px;
                line-height: 50px;
            }

            .small-stat .unit {
                font-size: 15px;
                text-indent: 90px;
            }
        }
    </style>
</head>
<body>
    <div id="background"></div>
    <div class="container">
        <div class="row">
            <div class="me col-lg-12">
                <img src="/avatar.jpg" alt="Nicolas Beauvais">
                <div class="name">Nicolas Beauvais</div>
                <div class="twitter"><a href="https://twitter.com/w3Nicolas">@w3Nicolas</a></div>

                <div class="description">
                    This year I will try to run <strong>1000</strong> kilometers (620 miles). This website show my progress to achieve this milestone.
                </div>
            </div>
            <div class="big-stat">
                <div id="counter">{{ $distance }}</div>
                <div class="unit">meters</div>
                <div class="sep"></div>
                <div id="milestone">1 000 000</div>
                <div class="unit">meters</div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="small-stat">
                    <h3>Average KM/Week</h3>
                    <div class="value">{{ $average_distance_by_week }}</div>
                    <div class="unit">KM/Week</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="small-stat">
                    <h3>Time running</h3>
                    <div class="value">{{ $time }}</div>
                    <div class="unit">Hours</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="small-stat">
                    <h3>Calories burned</h3>
                    <div class="value">{{ $calories }}</div>
                    <div class="unit">Calories</div>
                </div>
            </div>
            <div class="credit col-lg-12">
                Photo by <a href="https://unsplash.com/photos/ProdpBFQ3SY">Michał Parzuchowski</a>
            </div>
        </div>
    </div>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '{{ env('GOOGLE_ANALYTICS_ID') }}', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
