<div id="mainProcura">
    <!-- Main Title -->
    <h1 class="title">Live Search</h1>

    <!-- Main Input -->
    <input type="text" id="search" autocomplete="off" value="<?php if(isset($_GET['pesquisa'])) echo mysql_real_escape_string(urldecode($_GET['pesquisa'])); ?>">

    <!-- Show Results -->
    <h4 id="results-text">Mostrando os resultados para: <b id="search-string">Array</b></h4>
    <ul id="results"></ul>
</div>

<script>
$(document).ready(function() {
		$( "#search" ).focus();
});
</script>