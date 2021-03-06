<!DOCTYPE html>
<html>
	<head>
		<title>3D cuboid demo</title>
		<link rel="stylesheet" href="cuboids.css" />
	</head>
	<body>
		<h1>3D Cuboid Demo</h1>
		<p>This is similar to the effect shown on the <a href="http://thetoshibatablet.com/">Toshiba Tablet</a> page. Their page uses Flash, this one uses 3D transforms. If anyone knows how to fix the z-index issues, please let me know! NB: You obviously need a browser that knows about 3D transforms to see this working, Chrome, iOS and Safari are all good choices. If you want to see the SASS behind this, go to <a href="cuboids.scss">the scss file</a>.</p>
		<p><a href="/demos/">Back to all demos</a>.</p>
		
		<section id="boxes">
			<div class="cuboid">
				<div>
					<div><p>Box 1</p></div>
					<div></div>			
				</div>
			</div>
			<div class="cuboid">
				<div>
					<div><p>Box 2</p></div>
					<div></div>			
				</div>
			</div>
			<div class="cuboid">
				<div>
					<div><p>Box 3</p></div>
					<div></div>				
				</div>
			</div>				
			<div class="cuboid active">
				<div>
					<div><p>Box 4</p></div>
					<div></div>			
				</div>
			</div>
			<div class="cuboid">
				<div>
					<div><p>Box 5</p></div>
					<div></div>	
				</div>
			</div>
			<div class="cuboid">
				<div>
					<div><p>Box 6</p></div>
					<div></div>		
				</div>
			</div>
			<div class="cuboid">
				<div>
					<div><p>Box 7</p></div>
					<div></div>			
				</div>
			</div>			
		</section>
		<?		
			include($_SERVER['DOCUMENT_ROOT']."/footer.php");		
		?>	
	</body>
</html>
