<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     echo '<script type="text/javascript">alert("Please Login First...");window.location.href="login.php";</script>';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<title>Form Reviews</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/Menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		:root {
			--yellow: #FFBD13;
			--blue: #4383FF;
			--blue-d-1: #3278FF;
			--light: #F5F5F5;
			--grey: #AAA;
			--white: #FFF;
			--shadow: 8px 8px 30px rgba(0, 0, 0, .05);
		}

		body {
			background: #7e7c77;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			padding: 1rem;
		}

		.wrapper {
			background: #000;
			padding: 2rem;
			max-width: 576px;
			width: 100%;
			border-radius: .75rem;
			box-shadow: var(--shadow);
			text-align: center;
			color: #FFF;
			font-weight: bold;
		}

		.wrapper h3 {
			font-size: 1.5rem;
			font-weight: 600;
			margin-bottom: 1rem;
		}

		.rating {
			display: flex;
			justify-content: center;
			align-items: center;
			grid-gap: .5rem;
			font-size: 2rem;
			color: var(--yellow);
			margin-bottom: 2rem;
		}

		.rating .star {
			cursor: pointer;
		}

		.rating .star.active {
			opacity: 0;
			animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
		}

		@keyframes animate {
			0% {
				opacity: 0;
				transform: scale(1);
			}

			50% {
				opacity: 1;
				transform: scale(1.2);
			}

			100% {
				opacity: 1;
				transform: scale(1);
			}
		}


		.rating .star:hover {
			transform: scale(1.1);
		}

		textarea {
			width: 100%;
			background: var(--light);
			padding: 1rem;
			border-radius: .5rem;
			border: none;
			outline: none;
			resize: none;
			margin-bottom: .5rem;
		}

		.btn-group {
			display: flex;
			grid-gap: .5rem;
			align-items: center;
		}

		.btn-group .btn {
			padding: .75rem 1rem;
			border-radius: .5rem;
			border: none;
			outline: none;
			cursor: pointer;
			font-size: .875rem;
			font-weight: 500;
		}

		.btn-group .btn.submit {
			background: #fac564;
			color: var(--white);
		}

		.btn-group .btn.submit:hover {
			background: var(--white);
			color: #fac564;
		}

		.btn-group .btn.cancel {
			background: var(--white);
			color: #fac564;
		}

		.btn-group .btn.cancel:hover {
			background: #fac564;
			color: var(--white);
		}

		/* .btn-group .btn.cancel:hover {
	background: var(--light);
} */
	</style>
</head>

<body>

	<div class="wrapper">
		<h1>Give Feedback</h1>
		<form action="review_action.php" method="post">
			<div class="rating">
				<input type="number" name="rating" hidden>
				<i class='bx bx-star star' style="--i: 0;"></i>
				<i class='bx bx-star star' style="--i: 1;"></i>
				<i class='bx bx-star star' style="--i: 2;"></i>
				<i class='bx bx-star star' style="--i: 3;"></i>
				<i class='bx bx-star star' style="--i: 4;"></i>
			</div>
			<input type="text" name="uid"  value="<?php echo $_SESSION['id'];?>" hidden>
			<!-- <input type="text" name="name" placeholder="Your name.." class="form-control btn btn-outline-light" style="width: 100%; margin-bottom:6px; text-align: left;"> -->
			<textarea name="opinion" name="opinion" class="form-control btn btn-outline-light" style="text-align: left;" cols="30" rows="5" placeholder="Your opinion..."></textarea>
			<div class="btn-group">
				<button type="submit" class="btn submit">Submit</button>
				<button type="reset" class="btn cancel">Cancel</button>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
	<script>
		const allStar = document.querySelectorAll('.rating .star')
		const ratingValue = document.querySelector('.rating input')

		allStar.forEach((item, idx) => {
			item.addEventListener('click', function() {
				let click = 0
				ratingValue.value = idx + 1
				allStar.forEach(i => {
					i.classList.replace('bxs-star', 'bx-star')
					i.classList.remove('active')
				})
				for (let i = 0; i < allStar.length; i++) {
					if (i <= idx) {
						allStar[i].classList.replace('bx-star', 'bxs-star')
						allStar[i].classList.add('active')
					} else {
						allStar[i].style.setProperty('--i', click)
						click++
					}
				}
			})
		})

		function viewImage(input) {
			if (input.files && input.files[0]) {
				let reader = new FileReader();
				reader.onload = function(e) {
					$("#view_profile_pic")
						.attr("src", e.target.result)
						.height(100)
						.width(100);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
</body>

</html>