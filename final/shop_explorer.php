<section class="shop__browse"> 
	<section class="browse__header">
		<h2>Kategorier</h2>
	</section>
	<section class="browse__explorer"> <!-- disse kategorier kommer fra databasen? -->
		<h3>Outdoor</h3>
		<ul>
		    <li>Beklædning
		    	<ul class="browse__explorer-extended">
		    	    <li>Fleece</li>
		    	    <li>Overtøj</li>
		    	    <li>Regntøj</li>
		    	</ul>
		    </li>
		    <li>Fodtøj</li>
		    <li>Rygsækker</li>
		    <li>Soveposer</li>
		    <li>Tilbehør</li>
		</ul>
	</section>
	<section class="browse__explorer">
		<h3>fiskerigrej</h3>
		<ul>
		    <li>Fiskestænger</li>
		    <li>Fiskehjul</li>
		    <li>Fluefiskeri</li>
		    <li>Waders</li>
		    <li>Tilbehør</li>
		</ul>
	</section>
	<section class="browse__explorer">
		<h3>jagtudstyr</h3>
		<ul>
		    <li>Jagttøj</li>
		    <li>Luftvåben</li>
		    <li>Ammunition</li>
		    <li>Knive</li>
		    <li>Tilbehør</li>
		</ul>
	</section>
	<!--blå sorterings boks-->
	<section class="browse__sort"> <!-- disse kategorier kommer fra databasen? -->
		<select placeholder="Mærke" class="sort__label">
			<option class="sort__label-placeholder" value="" style="display: none;" selected>Vælg mærke</option>
			<option>Fjaaaalrøv</option>
			<option>haglof</option>
		</select>
		<select class="sort__various">
			<option class="sort__label-placeholder" value="" style="display: none;" selected>Sorter efter</option>
			<option>Nyeste</option>
			<option>Laveste pris</option>
			<option>Højeste pris</option>
		</select>
		<h4>Pris</h4>
		<table class="sort__price">
		 	<tr>
		    	<td><input type="checkbox" name="prissortering"></input></td>
		    	<td>0-999kr.</td>				    	
			</tr>
			<tr>
		    	<td><input type="checkbox" name="prissortering"></input></td>
		    	<td>1.000-1.999kr.</td> 
			</tr>
		 	<tr>
		    	<td><input type="checkbox" name="prissortering"></input></td>
		    	<td>2.000-5.000kr.</td>				    	
			</tr>
			<tr>
		    	<td><input type="checkbox" name="prissortering"></input></td>
		    	<td>Større end 5.000kr..</td> 
			</tr>
		</table>
	</section>
</section>