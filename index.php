<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>superman guided by zhou</title>
	<style type="text/css">
		*{
			padding:0;
			margin:0;
		}
		.main {
			width : 100vw;
			height: 100vh;
			background-image:url('superman.png');
			background-size:cover;
			background-position:center center;
		}
		.mengban {
			width : 100vw;
			height: 100vh;
			position:absolute;
			top:0;
			left:0;
			background-color:black;
			opacity:0.15;
		}
		.container {
			width:70%;
			margin: 0 auto;
			position:relative; 
			/*不加position relative .pencil会跟body定位,不加relative .container是static的 （默认定位）,我们想跟container定位，不想跟body定位*/
		}
		.pencil {
			position:absolute;
			top:20px;
			left:0;
		}
		.content {
			position:absolute;
			top:50vh;
			left:0;
			color:white;
			margin-top: -4.5rem;
			
		}
		.content h2 {
			font-size:3rem;
		}
		
		.content p {
			font-size:1.5rem;
		}
	</style>
</head>

<body>
	<div class="main">
		<div class="container">
			<div class="pencil">
				<img src="pencil.png" alt="pencil btn" width=70 class="pencil">	
			</div>

			

			<div class="content">
				<h2>A PASSIONATE PIXEL PUNCHING PROBLEM SOLVING PERFECTIONIST</h2>	
				<p>The Design & Art Direction of Brad James.Complete website coming soon.</p>			
			</div>
			
		</div>
	</div>
	<div class="mengban">
		
	</div>
</body>
</html>