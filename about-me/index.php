<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/ >
		<!--adding google fonts-->
		<link href='https://fonts.googleapis.com/css?family=Athiti:400,700,600,500' rel='stylesheet' type='text/css'>
		<!--adding custom CSS-->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>

		<!--adding custom JavaScript-->
		<script src="js/custom.js" type="text/javascript"></script>

		<title>All About Me</title>
	</head>
	<!--main body begins-->
	<body>
		<header class="main-header">
			<div class="container">
				<h1 class="name">
					About Me: Christina Sosa
				</h1>
				<h2>
					Welcome to my website!
				</h2>
			</div>
		</header>
		<main>
			<div class="text-area">
				<div>
					<img src="images/pyramidTop.jpg" alt="Top of Pyramid">
					<p>
						Hello, my name is Christina. I'm originally from Brooklyn, New York but have lived in New Mexico for
						many years now (thanks Intel!). Many people ask if I miss New York. In reality, I enjoy the open and
						beautiful views that New Mexico has to offer. Plus the sunsets aren't too shabby. My family is
						originally from Mexico and I love going there to visit, taste the amazing food and soak in the
						beautiful culture. In my last trip, I got the opportunity to climb to the top of a pyramid!
					</p>
				</div>
				<div>
					<img src="images/watchShows.jpg" alt="Watching show with dog">
					<p>
						When not traveling, I like to spend time with my friends and family. I live with my amazing
						grandmother and constantly get spoiled with her delightful Mexican cuisine. After a satisfying meal, I
						enjoy watching	an episode of <em>The Walking Dead</em> with my dog, Jasmine. As you can see, she also
						enjoys watching it with me. This was an intense episode!
					</p>
				</div>
				<div>
					<img src="images/award.jpg" alt="medal">
					<p>
						For fun, I like to powerlift. Here are some things I learned through the sport:
					</p>
					<ul>
						<li>
							Powerlifting is more of a mental challenge than it is a physical challenge.
						</li>
						<li>
							It’s okay to fail. It’s okay to miss a lift or have an off day of training. I've learned more from
							failure than I have from success. I can look back and see where I went wrong and how I need to
							improve.
						</li>
						<li>
							It's cool to keep up with the boys. It's even cooler to be stronger than them.
						</li>
					</ul>
					<p>
						Last year I did something crazy. Something that I would have never done were it not for my coaches.
						I competed in my first ever powerlifting meet. I never thought in a million years I would stand in
						front of a large crowd, wearing a singlet, and have people intentionally stare at my
						butt to see if I "hit depth" on my squat. It was one of the most exhausting days of my life, but I
						made it through. It was an incredible experience.
					</p>
				</div>
				<!--Submission Form-->
				<h3>
					What's your favorite thing about New Mexico?
				</h3>
				<form method="post" id="contact">
					<table>
						<tr>
							<td>
								<label>
									Name:
								</label>
								<br>
								<input type="text" name="name1" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									Your Message:
								</label>
								<br>
								<textarea maxlength="500" name="message" required>
										500 characters max.
									</textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" value="Submit">
							</td>
						</tr>
					</table>
				</form>
		</main>
		</div>
		<!--footer with copyright-->
		<footer class="main-footer">
			&copy 2016
		</footer>
	</body>
</html>