<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience,
    .profile-button {
        transition: 1s;
        padding: 0.5rem 2rem;
        border-radius: 5px;
        background: #fff;
        border: 2px solid #1087b9;
        font-weight: 700;
        color: #1087b9;
        transition: 1s;
        margin-bottom: 40px;
    }

    .add-experience:hover,
    .profile-button:hover {
        background-color: #1087b9;
        color: #fff;
        cursor: pointer;

    }

    .col-md-4 {
        background-color: #f7f7f7;
    }

    .py-5 {
        padding-bottom: 0rem!important;
    }
</style>
</head>

<body>
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="200px" height="200px" style="margin-bottom: 30px;border: 1px solid black;" src="<?php echo $CONTENT_URL . '/image/user/' . $_SESSION['user']['image'] ?>">
                    <span class="font-weight-bold"><b><?= $user['last_name'] . ' ' . $user['first_name']  ?></b></span>
                    <br>
                    <span>
                        <a href="./ho-so.php?edit-infor">Sửa thông tin</a>
                    </span>
                    <span>
                        <a href="./ho-so.php?edit-password">Thay đổi mật khẩu</a>
                    </span>
                </div>
            </div>
            <?php
            include $VIEW_EDIT;
            ?>
        </div>
    </div>
    </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="../../content/js/adress.js"></script>
</body>