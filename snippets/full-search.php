<div id="full-search"><span class="close closesrc">X</span>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text"  name="s" id="s" placeholder="<?php esc_attr_e( 'Busca', 'codesigner' ); ?>" />
		<button type="submit" class="btn" name="submit" id="searchsubmit">
			<span class="icon-search"><svg xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"  width="28px" height="28px"> <path fill-rule="evenodd"  fill="rgb(87, 147, 123)"  d="M27.295,23.988 L21.216,17.910 C21.184,17.877 21.146,17.855 21.112,17.825 C22.308,16.011 23.006,13.839 23.006,11.503 C23.006,5.150 17.856,-0.000 11.503,-0.000 C5.150,-0.000 -0.000,5.150 -0.000,11.503 C-0.000,17.856 5.150,23.006 11.503,23.006 C13.839,23.006 16.010,22.308 17.825,21.112 C17.855,21.146 17.877,21.184 17.909,21.216 L23.988,27.295 C24.901,28.208 26.381,28.208 27.295,27.295 C28.208,26.382 28.208,24.901 27.295,23.988 ZM11.503,19.019 C7.352,19.019 3.988,15.654 3.988,11.503 C3.988,7.352 7.352,3.988 11.503,3.988 C15.654,3.988 19.019,7.353 19.019,11.503 C19.019,15.654 15.654,19.019 11.503,19.019 Z"/> </svg></span>
		</button>
	</form>
</div>
<div class="search-overlay"></div>
