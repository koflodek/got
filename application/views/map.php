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
	<h1>Welcome to CodeIgniter!</h1>
	<div id ="map" style="width:751px; height:1332px"></div>
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

