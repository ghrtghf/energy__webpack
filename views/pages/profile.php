<?php

/** 
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>

<section class="profile">
	<div class="wrapper">

		<div class="profile__main">
			<div class="sidebar">
				<div class="sidebar__inner">
					<a href="./profile" class="sidebar__link sidebar__active">
						<svg width="36" height="40" viewBox="0 0 36 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M9 9.09091C9 4.07015 13.0294 0 18 0C22.9705 0 27 4.07015 27 9.09091C27 14.1117 22.9705 18.1818 18 18.1818C13.0294 18.1818 9 14.1117 9 9.09091ZM18 3.63636C15.0176 3.63636 12.6 6.07845 12.6 9.09091C12.6 12.1034 15.0176 14.5455 18 14.5455C20.9824 14.5455 23.4 12.1034 23.4 9.09091C23.4 6.07845 20.9824 3.63636 18 3.63636Z" fill="black" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 38.1818C0 28.1404 8.05887 20 18 20C27.941 20 36 28.1404 36 38.1818V40H0V38.1818ZM3.7114 36.3636H32.2886C31.4028 29.1885 25.3433 23.6364 18 23.6364C10.6567 23.6364 4.59718 29.1885 3.7114 36.3636Z" fill="black" />
						</svg>
					</a>
					<a href="./history" class="sidebar__link sidebar__circle">
						<svg width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.95 0C13.3 0 7.41 3.6 4.37 9.09474L0 4.73684V17.0526H12.35L7.03 11.7474C9.5 7.01053 14.25 3.78947 19.95 3.78947C27.74 3.78947 34.2 10.2316 34.2 18C34.2 25.7684 27.74 32.2105 19.95 32.2105C13.68 32.2105 8.55 28.2316 6.46 22.7368H2.47C4.56 30.3158 11.59 36 19.95 36C30.02 36 38 27.8526 38 18C38 8.14737 29.83 0 19.95 0ZM17.1 9.47368V19.1368L26.03 24.4421L27.55 21.9789L19.95 17.4316V9.47368H17.1Z" fill="black" />
						</svg>
					</a>
					<a href="./cart" class="sidebar__link sidebar__circle">
						<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M10.2 27.2C8.33 27.2 6.8 28.73 6.8 30.6C6.8 32.47 8.33 34 10.2 34C12.07 34 13.6 32.47 13.6 30.6C13.6 28.73 12.07 27.2 10.2 27.2ZM0 0V3.4H3.4L9.52 16.32L7.14 20.4C6.97 20.91 6.8 21.59 6.8 22.1C6.8 23.97 8.33 25.5 10.2 25.5H30.6V22.1H10.88C10.71 22.1 10.54 21.93 10.54 21.76V21.59L12.07 18.7H24.65C26.01 18.7 27.03 18.02 27.54 17L33.66 5.95C34 5.61 34 5.44 34 5.1C34 4.08 33.32 3.4 32.3 3.4H7.14L5.61 0H0ZM27.2 27.2C25.33 27.2 23.8 28.73 23.8 30.6C23.8 32.47 25.33 34 27.2 34C29.07 34 30.6 32.47 30.6 30.6C30.6 28.73 29.07 27.2 27.2 27.2Z" fill="black" />
						</svg>
					</a>
					<a href="./admin" class="sidebar__link sidebar__circle">
						<svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M7.99512 7.99513C7.99512 3.57955 11.5747 0 15.9902 0C20.4058 0 23.9854 3.57955 23.9854 7.99513C23.9854 12.4107 20.4058 15.9903 15.9902 15.9903C11.5747 15.9903 7.99512 12.4107 7.99512 7.99513ZM15.9902 3.19805C13.3408 3.19805 11.1932 5.34578 11.1932 7.99513C11.1932 10.6445 13.3408 12.7922 15.9902 12.7922C18.6397 12.7922 20.7873 10.6445 20.7873 7.99513C20.7873 5.34578 18.6397 3.19805 15.9902 3.19805Z" fill="black" />
							<path d="M3.29702 31.9805C4.0839 25.6703 9.46684 20.7873 15.9903 20.7873C18.6389 20.7873 21.095 21.5905 23.1344 22.9665L24.46 23.8607L26.2486 21.2095L24.9231 20.3153C22.3718 18.5941 19.2959 17.5893 15.9903 17.5893C7.15908 17.5893 0 24.7485 0 33.5796V35.1786H25.5844V31.9805H3.29702Z" fill="black" />
							<path d="M31.9766 20.7835L32 30.3776L28.8019 30.3853L28.7786 20.7912L31.9766 20.7835Z" fill="black" />
							<path d="M28.7821 31.9805H31.9961V35.1786H28.7821V31.9805Z" fill="black" />
						</svg>
					</a>
				</div>
			</div>

			<h2 class="profile__title person__title">персональные данные <span>изменить</span></h2>
			<form action="" method="POST" class="profile__form">
				<input type="submit" class="profile__submit-info" value="сохранить">

				<div class="profile__row">
					<div class="profile__name">
						<label>
							<p>имя</p>
							<input class="profile__input-info" type="text" name="name" value="Филипп" disabled>
						</label>
					</div>
					<div class="profile__phone">
						<label>
							<p>телефон</p>
							<input class="profile__input-info" type="text" name="phone" value="" disabled>
						</label>
					</div>
				</div>
				<div class="profile__row">
					<div class="profile__email">
						<label>
							<p>почта</p>
							<input class="profile__input-info" type="text" name="email" value="" disabled>
						</label>
					</div>
					<div class="profile__password">
						<label>
							<p>пароль</p>
							<input class="profile__input-info" type="text" name="password" placeholder="Новый пароль" value="" disabled>
						</label>
					</div>
				</div>
			</form>

			<h2 class="profile__title address__title ">адрес установки <span>изменить</span></h2>
			<form action="" method="POST" class="profile__form">
				<input type="submit" class="profile__submit-address" value="сохранить">
				<div class="profile__row">
					<div class="profile__index">
						<label>
							<p>почтовый индекс</p>
							<input class="profile__input" type="text" name="index" value="" disabled>
						</label>
					</div>
					<div class="profile__region">
						<label>
							<p>край/область/регион</p>
							<input class="profile__input" type="text" name="region" value="" disabled>
						</label>
					</div>
				</div>
				<div class="profile__row">
					<div class="profile__city">
						<label>
							<p>город</p>
							<input class="profile__input" type="text" name="city" value="Уфа" disabled>
						</label>
					</div>
					<div class="profile__street">
						<label>
							<p>улица, дом, квартира</p>
							<input class="profile__input" type="text" name="street" value="" disabled>
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>



<?php $view->component('end') ?>