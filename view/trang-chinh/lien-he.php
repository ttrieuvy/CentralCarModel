<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
</head>
<body>
    <div class="container-fluid">
        <div class="text-center">
            <h1   class="mt-3">Hỗ Trợ Và Thông Tin Liên Hệ</h1>
        </div>
    </div>
   <div class="container">
    <!--end row liên hệ-->
       <div class="row">
        <div class="col-7">
            <div class="text-left">
                <h3>Địa chỉ và thông tin liên lạc</h3>
            </div>
            <ul class="list-unstyled">
                <li class="mt-4">
                    <span class="text-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                          Tòa P FPT Polytecnic, Quang Trung SoftWare City, Tân Chánh Hiệp, Quận 12, TP. HCM
                      </span>
                </li>
                <li class="mt-5">
                <span class="text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                      0288114115
                      </span>
                </li>
                <li class="mt-5">
                <span class="text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg>
                      nhom5.wd18203@fpt.poly.vn
                      </span>
                </li>
            </ul>
            <div class="mt-5">
                <hr>
            </div>
            <div class="mt-5">
                <div class="text-left">
                    <h3>Liên hệ với chúng tôi</h3>
                </div>
            </div>
            <div class="formclass">
                <form action="../../controller/process_mail.php" method="post">
                    <div class="form-group">
                        <input class="mt-4" name="name" type="text" placeholder="Họ và tên" required>
                    </div>
                    <div class="form-group">
                        <input class="mt-4" name="email" type="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@gmail\.com" required>
                    </div>
                        <textarea class="mt-4" name="content" rows="8" placeholder="Nội dung" min="12"></textarea>
                    <br>
                    <button class="mt-3" type="submit">Gửi</button>
                </form>
        </div>
        </div>
        <!--End colunms left-->
        <div class="col-5">
            <div class="text-center">
                <a onclick="mapsclick()" id="textmap" href="#">MAPS</a>
                <span class="mid">|</span>
                <a onclick="otherclick()" id="textother" href="#"> Other</a>
            </div>
            <div id="map" class="mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4435924065206!2d106.62525347584649!3d10.85382635775966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1687934587170!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="other" class="mt-3">
                <span>Đây chỉ là trang website mẫu không nhằm mục đích thương mại hóa.</span>
            </div>
        </div>
       </div>
   </div>
   <!--end container-->
    <div class="container-fluid">
    </div>
    <!--================= CSS Additional ===================-->
    <style>
        .container-fluid{height: 80px;}
        input{width: 80%; height: 2.5rem; border-radius: 50px; padding: 0 15px; border: 0.5px solid grey;}
        input:focus, input:hover{outline: none;border-color: #1ea8d9;background-color: #fff;box-shadow: 0 0 0 8px #1ea8d9/10%;}
        textarea{width: 80%; border-radius: 25px; padding: 10px 15px; border: 0.5px solid grey;}
        textarea:focus, textarea:hover{outline: none;border-color: #1ea8d9;background-color: #fff;box-shadow: 0 0 0 8px #1ea8d9/10%;}
        .formclass button {text-decoration: none;position: relative;border: none;font-size: 14px;font-family: inherit;color: #fff;width: 9em;height: 3em;line-height: 2em;text-align: center;background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);background-size: 300%;border-radius: 30px;z-index: 1;}
        .formclass button:hover {animation: ani 8s linear infinite;border: none;}
        @keyframes ani {0% {background-position: 0%;}100% {background-position: 400%;}}
        .formclass button:before {content: '';position: absolute;top: -5px;left: -5px;right: -5px;bottom: -5px;z-index: -1;background: linear-gradient(90deg,#0d3144,#1ea8d9,#46c0ea,#03a9f4);background-size: 400%;border-radius: 35px;transition: 1s;}
        .formclassbutton:hover::before {filter: blur(20px);}
        .formclass button:active {background: linear-gradient(32deg,#46c0ea,#f441a5,#ffeb3b,#03a9f4);}
        .mid{font-size: 30px;}
        .text-center a{color: black; text-decoration: none; font-size: 30px;}
        #textother{color: grey;}
        @keyframes thing{0%{opacity: 0;}100%{opacity: 1;}}
        .animate{animation-name: thing; animation-duration: 2.5s;}
    </style>
    <!--================= JS Additional ===================-->
    <script>
        var maps = document.getElementById("map")
        var other = document.getElementById("other")
        var textmap = document.getElementById("textmap")
        var textother = document.getElementById("textother")
        mapsclick = () =>{
            maps.style.display = 'block'
            other.style.display = "none"
            textmap.style.color = "black"
            textother.style.color = "grey"
            maps.classList.add("animate")
            console.log("đã nhấp mục maps")}
        otherclick = () =>{
            maps.style.display = "none"
            other.style.display = "block"
            textmap.style.color = "grey"
            textother.style.color = "black"
            other.classList.add("animate")
            alert("Liên hệ với chúng tôi nếu bạn cần tư vấn và giải quyết thắc mắc")
            console.log("đã nhấp mục other")}
    </script>
</body>
</html>