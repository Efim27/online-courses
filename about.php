<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная</title>
	<link rel="stylesheet" href="/static/css/main.css">
	<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
</head>

<body>
	<?php require('./parts/header.php'); ?>
	<main class="main">
		<div class="main__inner">
			<div class="main__content">
				<div class="project-about">
					<div class="project-about__label">о проекте</div>
					<div class="project-about__row">
						<div class="project-about__info">
							<div class="project-about__title">Мир рядом</div>
							<div class="project-about__description">Развлекательно-образовательный проект. Помогаем раскрыть окружающий мир через творчество</div>
						</div>
						<div class="project-about__statistics">
							<div class="project-about__cell cell">
								<div class="cell__value">5</div>
								<div class="cell__label">направлений</div>
							</div>
							<div class="project-about__cell cell">
								<div class="cell__value">10</div>
								<div class="cell__label">лет опыта</div>
							</div>
							<div class="project-about__cell cell">
								<div class="cell__value">200+</div>
								<div class="cell__label">видео</div>
							</div>
							<div class="project-about__cell cell">
								<div class="cell__value">100+</div>
								<div class="cell__label">студентов</div>
							</div>
						</div>
					</div>
					<div class="project-about__image">
						<img src="./static/img/project_about_image.png" alt="Мир рядом">
					</div>
				</div>
				<div class="project-aim">
					<div class="project-aim__row">
						<div class="project-aim__aim">Наша цель</div>
						<div class="project-aim__description">
							<div class="project-aim__title">Заниматься творчеством может каждый. Стань музыкантом, режиссерром, фотографом. Добавь в каждую работу частицу себя.</div>
							<div class="project-aim__about">Проведи время креативно и необычно на нашем развлекательно - образовательном проекте “Мир рядом” Проведи время креативно и необычно на нашем развлекательно - образовательном проекте “Мир рядом”. Проведи время креативно и необычно на нашем развлекательно - образовательном проекте “Мир рядом”</div>
						</div>
					</div>
					<div class="project-aim__images">
						<div class="project-aim__image"><img src="./static/img/project_aim1.png" alt="Цель"></div>
						<div class="project-aim__image"><img src="./static/img/project_aim2.png" alt="Цель"></div>
					</div>
					<div class="our-worth">
						<div class="our-worth__title">Наши ценности</div>
						<div class="our-worth__cards">
							<div class="our-worth__card worth-card">
								<div class="worth-card__circle"></div>
								<div class="worth-card__label">Стань музыкантом, режиссерром, фотографом.</div>
							</div>
							<div class="our-worth__card worth-card">
								<div class="worth-card__circle worth-card__circle_bg-yellow"></div>
								<div class="worth-card__label">Стань музыкантом, режиссерром, фотографом.</div>
							</div>
							<div class="our-worth__card worth-card">
								<div class="worth-card__circle worth-card__circle_bg-yellow"></div>
								<div class="worth-card__label">Стань музыкантом, режиссерром, фотографом.</div>
							</div>
							<div class="our-worth__card worth-card">
								<div class="worth-card__circle"></div>
								<div class="worth-card__label">Стань музыкантом, режиссерром, фотографом.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-education">
			<div class="main__inner">
				<div class="main__content">
					<div class="about-education__algorithm algorithm-education">
						<div class="algorithm-education__divider-top divider"></div>
						<div class="algorithm-education__row">
							<div class="algorithm-education__title">Как проходит<br>обучение</div>
							<div class="algorithm-education__stages">
								<div class="algorithm-education__stage algorithm-stage">
									<div class="algorithm-stage__row">
										<div class="algorithm-stage__dot"></div>
										<div class="algorithm-stage__label">Вы получаете доступ к видео <br> и дополнительным материалам. </div>
									</div>
									<div class="algorithm-stage__divider divider"></div>
								</div>
								<div class="algorithm-education__stage algorithm-stage">
									<div class="algorithm-stage__row">
										<div class="algorithm-stage__dot"></div>
										<div class="algorithm-stage__label">Изучаете материал в подходящем вам темпе и в удобное для вас время.</div>
									</div>
									<div class="algorithm-stage__divider divider"></div>
								</div>
								<div class="algorithm-education__stage algorithm-stage">
									<div class="algorithm-stage__row">
										<div class="algorithm-stage__dot"></div>
										<div class="algorithm-stage__label">Cоздаете свой креатив, следуя видео инструкции и дополнительному материалу</div>
									</div>
								</div>
							</div>
						</div>
						<div class="algorithm-education__divider-bottom divider"></div>
					</div>
					<div class="about-education__videos">
						<div class="about-education__videobox">
							<div class="about-education__video">
								<img src="./static/img/about_video1.png" alt="Видео 1">
							</div>
							<div class="about-education__label">Видео о нашем проекте</div>
						</div>
						<div class="about-education__videobox">
							<div class="about-education__video">
								<img src="./static/img/about_video2.png" alt="Видео 2">
							</div>
							<div class="about-education__label">Создаем трек в стиле эмбиент</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php require('./parts/footer.php'); ?>
</body>

</html>