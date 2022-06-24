 
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }
    
            body {
                margin: 0;
                font-family: Arial;
                font-size: 17px;
            }
            #myVideo {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
            }
            .content {
                position: fixed;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
            }
            #myBtn {
                width: 200px;
                font-size: 18px;
                padding: 10px;
                border: none;
                background: #000;
                color: #fff;
                cursor: pointer;
            }
    
            #myBtn:hover {
                background: #ddd;
                color: black;
            }
            *NAVIGATION*/
nav ul{
	float:right;
	list-style-type:none;
	margin-top:25px;
}
 
nav ul li{
	display: inline-block;
}
 
nav ul li a{
	text-decoration:none;
	color:#fff;
	padding:5px 20px;
	border: 1px transparent;
	transition:0.6s ease;
}
 
nav ul li a:hover{
	background-color:green;
	color:#fff;
}
nav ul li.active a{
	background-color:green;
	color:#fff;
}
        </style>
    </head>
    
    <body>
    
        <video autoplay muted loop id="myVideo">
            <source src="rain.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
      <div class="content">
            <h1>Rozaa</h1>
            <br>
               <h2>نقدم ابتسامة مثالية مع كل زيارة</h2>
                       <h3>من إسمنا ابتدأنا وبالخبرة تميزنا</h3> 
                       <h3>الجودة والراحة</h3>  
                        <h3>عنايه يمكنك الوثوق بها</h3>
                       <h3>في عيادة روزا لدينا من الخبرة الكافية في</h3>
                       <h3>تشخيص الحالات وفهمها وعلاجها ولدينا فريق</h3>
                        <h3>عمل يتميز بأعلى مستويات الخبرة في التعامل مع العملاء وكما تتميز بالسرعة في الخدمات والمحافظة على النظافة المستمرة الدائمة</h3>
            </p>
            <button id="myBtn" onclick="myFunction()">Pause</button>
             
            <nav>
		<ul>
			<li><a href="index.php">Home</a></li>

		<nav>
		</ul>
        </div>
        <script>
            var video = document.getElementById("myVideo");
            var btn = document.getElementById("myBtn");

            function myFunction() {
                if (video.paused) {
                    video.play();
                    btn.innerHTML = "Pause";
                } else {
                    video.pause();
                    btn.innerHTML = "Play";
                }
            }
        </script>
    </body>
    <hr>
    <div class="test">
        <h3>Test inheritanse</h3>
        <h3>Test inheritanse2</h3>
    </div>
    </html>
    </body>
</html>