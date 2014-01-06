 <section id="cuerpo">
      <article id="derecha">
      </article>
      <article id="izquierda">
      	<div id="dialogo" title="Bienvenido a Sismemox">
			<p>Elige un tema y comencemos!</p>
      	</div>
      </article>
      <div class="limpiar"></div>
  </section>
  <script type="text/javascript">
  $(document).ready(function(){  
  		$("#dialogo").dialog({
  		width: 350,
  		height: 200,
  		show: "shake",
  		hide: "scale",
  		resizable: "false",
  		position: "center",
  		modal: "true"
  	});
  })
  </script>