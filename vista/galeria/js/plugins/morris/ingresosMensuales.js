 Morris.Bar({
	element: "ingresosMensuales",
	axes: false,
	data: [
		{ y: 'Enero', money: 0.5 },
		{ y: 'Febrero', money: 1.0 },
		{ y: 'Marzo', money: 3.0 },
		{ y: 'Abril', money: 5.0 },
		{ y: 'Mayo', money: 5.5 },
	],
	xkey: 'y',
	ykeys: ['money'],
	labels: ['Millones de pesos']
});