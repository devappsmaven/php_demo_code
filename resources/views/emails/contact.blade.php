<!DOCTYPE html>

<html>

    <head>

    <title>VividCustoms My Account</title>
    <style>
        body {
        background: #ffffff;
        font-family: 'Raleway', sans-serif;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
        line-height: 20px;}

        .td{color:#8e8e90;}
        .b{color:#8e8e90 !important;}
        .a{color:#8e8e90 !important;}
        a:hover{color:#8e8e90 !important;}
        a:active{color:#8e8e90 !important;}
        a:visited{color:#8e8e90 !important;}
        a:link{color:#8e8e90 !important;}
        .container{width: 550px;
                margin-right: auto;
                margin-left: auto;
                padding-right: 5px;
                padding-left: 5px;}

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: normal;
            color: #8e8e90;
            font-style: normal;
            font-weight: 400;
        }
        h1 {
            font-size: 30px;
            font-weight: 500;
        }
        h2 {
            font-size: 24px;
        }
        h3 {
            font-size: 20px;
        }
        h4 {
            font-size: 18px;
        }
        h5 {
            font-size: 16px;
        }
        h6 {
            font-size: 14px;
        }
        p {
            font-size: 13px;
            font-weight: normal;
            line-height: 16px;
            color: #999999;
            margin-bottom: 10px;
        }
        </style>

    </head>

    <body style='text-align: center; color: #0000ff;'>

       <p>Name: {{$email->firstname}} {{$email->lastname}}</p>
       <p>Email: {{$email->email}}</p>
       <p>Email: {{$email->phone}}</p>
       <p>Subject: {{$email->subject}}</p>
       <p>Message:</p><p>{{$email->message}}</p>
    </body>
</html>