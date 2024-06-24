<?php

/** 
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>


<section class='admin'>
	<div class='wrapper'>
		<div class="admin__main">
			<div class="sidebar">
				<div class="sidebar__inner">
					<a href="./profile" class="sidebar__link sidebar__circle">
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
					<a href="./admin" class="sidebar__link sidebar__active">
						<svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M7.99512 7.99513C7.99512 3.57955 11.5747 0 15.9902 0C20.4058 0 23.9854 3.57955 23.9854 7.99513C23.9854 12.4107 20.4058 15.9903 15.9902 15.9903C11.5747 15.9903 7.99512 12.4107 7.99512 7.99513ZM15.9902 3.19805C13.3408 3.19805 11.1932 5.34578 11.1932 7.99513C11.1932 10.6445 13.3408 12.7922 15.9902 12.7922C18.6397 12.7922 20.7873 10.6445 20.7873 7.99513C20.7873 5.34578 18.6397 3.19805 15.9902 3.19805Z" fill="black" />
							<path d="M3.29702 31.9805C4.0839 25.6703 9.46684 20.7873 15.9903 20.7873C18.6389 20.7873 21.095 21.5905 23.1344 22.9665L24.46 23.8607L26.2486 21.2095L24.9231 20.3153C22.3718 18.5941 19.2959 17.5893 15.9903 17.5893C7.15908 17.5893 0 24.7485 0 33.5796V35.1786H25.5844V31.9805H3.29702Z" fill="black" />
							<path d="M31.9766 20.7835L32 30.3776L28.8019 30.3853L28.7786 20.7912L31.9766 20.7835Z" fill="black" />
							<path d="M28.7821 31.9805H31.9961V35.1786H28.7821V31.9805Z" fill="black" />
						</svg>
					</a>

				</div>
			</div>

			<div class="admin__content">
				<div class="admin__orders">
					<div class="admin__header">
						<h2>заказы</h2>
						<p class="admin__order-btn">смотреть всё</p>
					</div>
					<div class="admin__order-wrapper">
						<div class="admin__order">
							<div class="admin__order-info">
								<p class="admin__order-name">зарядное устройство Ukca</p>
								<p class="admin__order-tel">+79994443333</p>
							</div>
							<div class="admin__order-id">
								<form action="">
									<select name="">
										<option value="">в ожидании</option>
									</select>
								</form>
								<p>товар ID: <span>#000001</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="admin__items">
					<div class="admin__header">
						<h2>все товары</h2>
						<p class="admin__item-btn">смотреть всё</p>
					</div>
					<div class="admin__item-wrapper">
						<div class="admin__item">
							<img src="./assets/img/catalog/1.png" alt="">
							<button class="admin__delete">
								<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g filter="url(#filter0_d_123_34)">
										<rect x="4" width="32" height="32" rx="4" fill="white" />
									</g>
									<path d="M26.4643 9.65625H23.706L22.5676 7.77197C22.2489 7.29308 21.7567 7 21.1942 7H17.8058C17.2433 7 16.721 7.29308 16.433 7.77197L15.294 9.65625H12.5357C12.2386 9.65625 12 9.89299 12 10.1875V10.7188C12 11.0143 12.2386 11.25 12.5357 11.25H13.0714V21.875C13.0714 23.0487 14.0307 24 15.2143 24H23.7857C24.9693 24 25.9286 23.0487 25.9286 21.875V11.25H26.4643C26.7623 11.25 27 11.0143 27 10.7188V10.1875C27 9.89299 26.7623 9.65625 26.4643 9.65625ZM17.7556 8.68938C17.7891 8.63127 17.856 8.59375 17.9263 8.59375H21.0737C21.1448 8.59375 21.2118 8.6311 21.2453 8.68921L21.8304 9.65625H17.1696L17.7556 8.68938ZM23.7857 22.4062H15.2143C14.9184 22.4062 14.6786 22.1684 14.6786 21.875V11.25H24.3214V21.875C24.3214 22.1672 24.0804 22.4062 23.7857 22.4062ZM19.5 20.8125C19.7961 20.8125 20.0357 20.5749 20.0357 20.2812V13.375C20.0357 13.0814 19.7961 12.8438 19.5 12.8438C19.2039 12.8438 18.9643 13.0828 18.9643 13.375V20.2812C18.9643 20.5734 19.2054 20.8125 19.5 20.8125ZM16.8214 20.8125C17.1161 20.8125 17.3571 20.5734 17.3571 20.2812V13.375C17.3571 13.0814 17.1175 12.8438 16.8214 12.8438C16.5253 12.8438 16.2857 13.0828 16.2857 13.375V20.2812C16.2857 20.5734 16.5268 20.8125 16.8214 20.8125ZM22.1786 20.8125C22.4747 20.8125 22.7143 20.5749 22.7143 20.2812V13.375C22.7143 13.0814 22.4747 12.8438 22.1786 12.8438C21.8825 12.8438 21.6429 13.0828 21.6429 13.375V20.2812C21.6429 20.5734 21.8839 20.8125 22.1786 20.8125Z" fill="black" />
									<defs>
										<filter id="filter0_d_123_34" x="0" y="0" width="40" height="40" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
											<feFlood flood-opacity="0" result="BackgroundImageFix" />
											<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
											<feOffset dy="4" />
											<feGaussianBlur stdDeviation="2" />
											<feComposite in2="hardAlpha" operator="out" />
											<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
											<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_123_34" />
											<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_123_34" result="shape" />
										</filter>
									</defs>
								</svg>
							</button>
							<h3>зарядное устройство uksa</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="admin__content-add">
				<div class="admin__models">
					<div class="admin__header">
						<h2>модели</h2>
					</div>
					<div class="admin__models-wrapper">
						<div class="admin__models-add">
							<form action="">
								<label>
									<p>Название</p>
									<input type="text" name="">
								</label>
								<label>
									<p>Цена</p>
									<input type="number" name="">
								</label>
								<label>
									<p>Описание</p>
									<textarea name=""></textarea>
								</label>
								<div class="admin__models-btn">
									<p>Фото</p>
									<button>Выбрать</button>
									<input type="file">
								</div>
								<label>
									<p>Категория</p>
									<select name="">
										<option value="">текст</option>
									</select>
								</label>
								<button class="admin__models-button">Добавить</button>
							</form>
						</div>
					</div>
				</div>
				<div class="admin__stations">
					<div class="admin__header">
						<h2>Категории</h2>
					</div>
					<div class="admin__stations-wrapper">
						<form action="">
							<label for="">
								<p>Название</p>
								<input type="text">
							</label>
							<label>
								<p>Описание</p>
								<textarea name=""></textarea>
							</label>
							<button>Создать</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>







<?php $view->component('end') ?>