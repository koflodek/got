<script type="text/javascript">
	$(document).ready(function(){
		$('#map').vectorMap({
			map: 'GoT',
			regionStyle:{
				initial: {
					fill: 'white'
				}
			}
		});
		var a = $('#map').vectorMap('get', 'mapObject');
		a.regions.id1.element.style.initial.fill = 'black';
		a.regions.id37.element.style.initial.fill = 'black';
		a.regions.id24.element.style.initial.fill = 'black';

		a.regions.id26.element.style.initial.fill = 'blue';
		a.regions.id23.element.style.initial.fill = 'blue';
		a.regions.id12.element.style.initial.fill = 'blue';

		a.regions.id21.element.style.initial.fill = 'green';
		a.regions.id15.element.style.initial.fill = 'green';
		a.regions.id10.element.style.initial.fill = 'green';
		a.regions.id32.element.style.initial.fill = 'green';
		a.regions.id42.element.style.initial.fill = 'green';
		a.regions.id49.element.style.initial.fill = 'green';
		a.regions.id54.element.style.initial.fill = 'green';
		a.regions.id71.element.style.initial.fill = 'green';
		a.regions.id56.element.style.initial.fill = 'green';
		a.regions.id63.element.style.initial.fill = 'green';
		a.regions.id72.element.style.initial.fill = 'green';
		// var b = ;
		// console.log("%o", b);
		// alert(b);
	});
</script>
<div id="container">
	<div id ="map" style="width:751px; height:1332px"></div>

</div>

