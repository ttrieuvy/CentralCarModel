<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script src="https://kit.fontawesome.com/d2ad07b7f4.js" crossorigin="anonymous"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="../../content/css/font-awesome.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
</head>
<style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    ol,
    ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    /* start editing from here */
    a {
        text-decoration: none;
    }

    .txt-rt {
        text-align: right;
    }

    /* text align right */
    .txt-lt {
        text-align: left;
    }

    /* text align left */
    .txt-center {
        text-align: center;
    }

    /* text align center */
    .float-rt {
        float: right;
    }

    /* float right */
    .float-lt {
        float: left;
    }

    /* float left */
    .clear {
        clear: both;
    }

    /* clear float */
    .pos-relative {
        position: relative;
    }

    /* Position Relative */
    .pos-absolute {
        position: absolute;
    }

    /* Position Absolute */
    .vertical-base {
        vertical-align: baseline;
    }

    /* vertical align baseline */
    .vertical-top {
        vertical-align: top;
    }

    /* vertical align top */
    nav.vertical ul li {
        display: block;
    }

    /* vertical menu */
    nav.horizontal ul li {
        display: inline-block;
    }

    /* horizontal menu */
    img {
        max-width: 100%;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background: url(../../content/image/different/bg-dang-nhap.jpg) no-repeat 0px 0px;
        background-size: cover;
        -webkit-background-size: cover;
        -ms-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    /*--header--*/


    /* Header */
    .main-w3layouts-agileinfo {
        width: 30%;
        margin: 0 auto;
        padding: 4em 2em;
        background: rgba(255, 255, 255, 0.07);
        -webkit-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
        -moz-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
        box-shadow: 0 6px 43px 0 rgba(0, 0, 0, 0.4);
    }

    .wthree-form h2 {
        color: #fff;
        font-size: 20px;
        font-weight: 300;
        text-align: center;
        margin-bottom: 1.5em;
        letter-spacing: 3px;
        text-shadow: 3px 3px 4px #000;
    }

    h1 {
        text-align: center;
        font-size: 45px;
        font-weight: 300;
        margin: 40px 0;
        color: #fff;
        letter-spacing: 9px;
        text-shadow: 4px 4px 3px #000;
        word-spacing: 4px;
        font-weight: 500;
        font-family: 'Josefin Slab', serif;
    }

    .icon-w3 i {
        color: #ffffff;
        font-size: 19px;
        line-height: 49px;
    }

    .icon-w3 {
        display: inline-block;
        position: absolute;
        right: 0px;
        bottom: 0;
        width: 53px;
        height: 50px;
        text-align: center;
        background: #00c6d7;
    }

    form {
        margin: 0 auto;
        width: 100%;
    }

    .submit-agileits {
        text-align: center;
        margin-top: 2em;
    }

    .form-sub-w3 {
        position: relative;
        margin-bottom: 20px;
    }

    .form-sub-w3 input[type="text"],
    input[type="password"] {
        width: 85%;
        padding: 15px 66px 15px 19px;
        text-align: left;
        background-color: rgba(0, 0, 0, 0.16);
        border: 0;
        border-left: 2px solid #00c6d7;
        font-size: 15px;
        letter-spacing: 1.5px;
        color: #fff;
        outline: 0;
        -webkit-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
        -moz-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.4);
        font-family: 'Open Sans', sans-serif;
    }

    .submit-agileits input[type="submit"] {
        text-align: center;
        border: 0;
        color: #ffffff;
        font-size: 17px;
        font-weight: 600;
        padding: 14px 90px;
        background-color: rgba(0, 0, 0, 0.34);
        border: 3px solid rgba(255, 255, 255, 0.43);
        -webkit-box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.71);
        -moz-box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.71);
        box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.71);
        outline: none;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 1px;
        transition: 0.5s ease-in-out;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        -ms-transition: 0.5s ease-in-out;
    }

    .submit-agileits input[type="submit"]:hover {
        color: #ffffff;
        border-color: #00c6d7;
    }

    /*-- checkbox --*/
    .anim {
        position: relative;
        display: block;
        margin-top: .5em;
    }

    label.anim span,
    label.anim a {
        color: #fff;
        font-size: 13px;
        display: inline;
        letter-spacing: 2px;
        text-transform: capitalize;
    }

    label.anim a {
        display: inline-block;
        text-decoration: none;
        float: right;
        margin-top: 4px;
    }

    label.anim a:hover {
        color: #00c6d7;
    }

    .wthree-text ul li {
        displaY: block;
    }

    .wthree-text ul li:nth-child(1) {
        margin-right: 36px;
    }

    .agileits-login label {
        font-size: 1em;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
        position: relative;

    }

    input.checkbox {
        background: #fff;
        cursor: pointer;
        width: 1.2em;
        height: 1.2em;
        margin: 0 6px 0 0 !important;
    }

    input.checkbox:before {
        content: "";
        position: absolute;
        width: 1.2em;
        height: 1.2em;
        background: inherit;
        cursor: pointer;
    }

    input.checkbox:after {
        content: "";
        transition: .4s ease-in-out;
        position: absolute;
        top: 1px;
        left: 0px;
        z-index: 1;
        width: 1.1em;
        height: 1.1em;
        /* margin-top: 4px; */
        border: 1px solid #00c6d7;
    }

    input.checkbox:checked:after {
        transform: rotate(-45deg);
        height: .5rem;
        border-color: #00c6d7;
        border-top-color: transparent;
        border-right-color: transparent;
    }

    .anim input.checkbox:checked:after {
        transform: rotate(-45deg);
        height: .5rem;
        border-color: transparent;
        border-right-color: transparent;
        animation: .4s rippling .4s ease;
        animation-fill-mode: forwards;
    }

    @keyframes rippling {
        50% {
            border-left-color: #d24747;
        }

        100% {
            border-bottom-color: #00c6d7;
            border-left-color: #00c6d7;
        }
    }

    .logo-header img {
        width: 200px;
    }

    .logo-header {
        margin: 50px 0;
        padding: 30px 30px 0px 30px;
        text-align: center;
    }
</style>

<body>
    <div class="logo-header">
        <a href="<?= $SITE_URL ?>/trang-chinh">
            <img src="<?= $CONTENT_URL ?>/image/different/logo.png" alt="">
        </a>

    </div>
    <div class="main-w3layouts-agileinfo">
        <div class="wthree-form">
            <h2>Fill out the form below to sign in</h2>
            <form action="<?= $ACCOUNT_URL ?>/checkLogin.php" method="post">
                <div class="form-sub-w3">
                    <input type="text" name="id_user" placeholder="Username" required="" autofocus>
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="pass" placeholder="Password" required="">
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <label class="anim">
                    <input type="checkbox" class="checkbox" name="remember">
                    <span>Remember Me</span>
                    <a href="dang-ky.php">Register</a>
                    <br>
                    <a href="quen-mk.php">Forgot Password</a>
                </label>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" value="Sign in" name="btn-login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>