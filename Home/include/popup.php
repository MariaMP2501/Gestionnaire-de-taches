<style>
		.popup {
			-webkit-animation: slide-in-right 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
			animation: slide-in-right 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;

		}

		@-webkit-keyframes slide-in-right {
			0% {
				-webkit-transform: translateX(1000px);
				transform: translateX(1000px);
				opacity: 0;
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
				opacity: 1;
			}
		}

		@keyframes slide-in-right {
			0% {
				-webkit-transform: translateX(1000px);
				transform: translateX(1000px);
				opacity: 0;
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
				opacity: 1;
			}
		}
	</style>
	<?php if(!isset($_SESSION['valider'])){
			header('Location:logging.php');
		}
		else {
			
	if ($_SESSION['valider'] == 1) : ?>
		<div onclick="this.remove()" class=" cursor-pointer popup w-[300px] absolute left-[80%] top-20 h-[70px] border-4 border-lime-100 shadow-2xl bg-teal-300 rounded-2xl items-center flex justify-center text-xl text-white font-bold">Tache effectué</div>
	<?php
		

		$_SESSION['valider'] = 0;
	endif ;

		}
	?>