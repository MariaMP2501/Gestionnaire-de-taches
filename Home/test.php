<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Traçabilité Photos</title>
</head>

<body>

	<?php
	include('head.php');
	include('nav.php');
	?>
	<h1 class="mb-10 text-3xl font-bold italic underline text-violet-400 text-center">Traçabilité des etiquettes</h1>

	<div class="grid grid-cols-2 p-5 mt-5 mb-24 sm:px-52 gap-10 xl:gap-10 mb-24 ">
		<div class="justify-items-center">
			<button id="start-camera" class=" mt-10 text-xl py-2 px-4 cursor-pointer bg-pink-400 text-white font-semibold rounded-lg shadow-md hover:bg-lime-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Activer camera </button>
			<video id="video" width="320" height="240" autoplay class="rounded-sm"></video>
		</div>
		<div>
			<button id="click-photo" class="mt-10 text-xl py-2 px-4 cursor-pointer bg-pink-400 text-white font-semibold rounded-lg shadow-md hover:bg-lime-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Prendre un photo</button>
			<canvas id="canvas" width="320" height="240" class="rounded-sm"></canvas>
		</div>


	</div>

	<script>
		let camera_button = document.querySelector("#start-camera");
		let video = document.querySelector("#video");
		let click_button = document.querySelector("#click-photo");
		let canvas = document.querySelector("#canvas");

		camera_button.addEventListener('click', async function() {
			let stream = await navigator.mediaDevices.getUserMedia({
				video: true,
				audio: false
			});
			video.srcObject = stream;
		});

		click_button.addEventListener('click', function() {
			canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
			let image_data_url = canvas.toDataURL('image/jpeg');

			// data url of the image
			// console.log(image_data_url);

			insertimage(image_data_url)


			function insertimage(url) {
				console.log(url);
				console.log("la fontion azcdazlcpozejvorek,vp,'o	zevô	kzsrvbdôk,aerdfô");
				$.post('include/insertimage.php', {
					url: url
				})
			}
		});
	</script>

</body>

</html>