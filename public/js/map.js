export async function initMap() {
	await ymaps3.ready;
	const { YMapZoomControl } = await ymaps3.import('@yandex/ymaps3-controls@0.0.1');
	const controls = new ymaps3.YMapControls({ position: 'bottom', orientation: 'horizontal' }).addChild(new YMapZoomControl({}));
	const map = new ymaps3.YMap(document.getElementById('map'), {
		location: {
			center: [55.970633692634905, 54.727798629682844],
			zoom: 16,
		},
		behaviors: ['drag', 'dblClick'],
	});
	map.addChild(new ymaps3.YMapDefaultSchemeLayer());
	map.addChild(controls);
}

