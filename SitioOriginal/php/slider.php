

		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="../js/slider.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					responsive: true,
					items: {
						visible: 1,
						width: 1030,
						height: 400
					},
					scroll: {
						duration: 650,
						timeoutDuration: 2500,
						fx: 'uncover-fade'
					},
					pagination: '#pager'
				});
			});
		</script>
		<style type="text/css">
			html, body {
				height: 100%;
				padding: 0;
				margin: 0;
			}
			body {
				background: #fff;
				min-height: 600px;
			}
			body * {
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				color: #666;
				line-height: 22px;
			}
			
			#wrapper {
				width: 100%;
				min-width: 900px;
				height: 500px;
				margin: -250px 0 0 0;
				position: absolute;
				top: 50%;
				left: 0;
			}
			#carousel div {
				height: 500px;
				float: left;
				margin-top: -150px;
			}
			#carousel img {
				min-width: 100%;
				min-height: 100%;
			}
			#title {
				text-align: center;
				width: 100%;
				margin-top: -10px;
				position: absolute;
				top: 50%;
			}
			#title h3 {
				text-shadow: 
					0 3px 3px rgba( 0, 0, 0, 0.3 ),
					0 -3px 3px rgba( 0, 0, 0, 0.3 ),
					3px 0 3px rgba( 0, 0, 0, 0.3 ),
					-3px 0 3px rgba( 0, 0, 0, 0.3 );

				font-size: 50px;
				font-weight: bold;
				line-height: 50px;
				color: #fff;
				margin: 0;
			}
			#title a {
				color: #fff;
			}
			#title a:hover {
				background: rgba( 0, 0, 0, 0.5 );
				padding: 2px 5px;
			}
			#pager {
				border-radius: 20px;
				background: #fff;
				text-align: center;
				width: 120px;
				height: 50px;
				padding-top: 2px;
				margin: 235px 0 0 -60px;
				position: absolute;
				top: 50%;
				left: 50%;
			}
			#pager a.selected span {
				background: #666;
			}
			#pager a {
				display: inline-block;
				padding: 5px;
			}
			#pager span {
				border-radius: 10px;
				background: #ccc;
				text-indent: -100px;
				line-height: 0;
				display: inline-block;
				width: 10px;
				height: 10px;
				overflow: hidden;
			}

			#donate-spacer {
				height: 100%;
			}
			#donate {
				border-top: 1px solid #999;
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
				color: #999;
			}
			#donate form {
				width: 100px;
			}
		</style>
	</head>

	<div id="carousel">
				<div><img src="../img/slider/01.jpg" /></div>
			  <div><img src="../img/slider/02.jpg" /></div>
			  <div><img src="../img/slider/03.jpg" /></div>
			  <div><img src="../img/slider/04.jpg" /></div>
              <div><img src="../img/slider/05.jpg" /></div>
              <div><img src="../img/slider/06.jpg" /></div>
              <div><img src="../img/slider/07.jpg" /></div>
		  </div>
			

		
