<?php echo $this->Html->script(array('directives/default','filters/titlecase','controllers/search'),array('inline'=>false));?>	
<div class="row text-center" ng-controller="SearchController">
	<div class="col-sm-12 col-md-8 col-md-offset-2">
		<?php echo $this->Html->image('amigosource.png',array('class'=>'logo','alt'=>Configure::read('BrandName').' logo','title'=>Configure::read('BrandName')));?>
		
		<form action="/amigo/search" id="ProductSearchForm" method="get" accept-charset="utf-8">	
		<p class="tagline">Make the right choice. <?php echo $this->Html->link('Register',array('controller'=>'businesses','action'=>'add'));?> today!</p>
		<div class="input-group input-group-lg">
			<span class="input-group-btn" id="search-filter-dropdown">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span ng-bind="SearchFilter | titlecase" ng-init="SearchFilter='products'">Products</span>
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" id="search-filter-selection">
					<li><a href="#products" default ng-bind="SearchSelection[0]" ng-click="updateSearchFilter('products')">Products</a></li>
					<li><a href="#suppliers" default ng-bind="SearchSelection[1]" ng-click="updateSearchFilter('suppliers')" >Suppliers</a></li>
					<li><a href="#buyers" default ng-bind="SearchSelection[2]" ng-click="updateSearchFilter('buyers')">Buyers</a></li>
					<li><a href="#all" default ng-bind="SearchSelection[3]" ng-click="updateSearchFilter('all')">All</a></li>
				</ul>
			</span>
			<input type="text"  name="q" class="form-control" autocomplete="off" ng-model="SearchKeyword"/>
			<input type="hidden"  name="type"  ng-value="SearchFilter"/>
			 <span class="input-group-btn">
				<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			  </span>
		</div>
		</form>
	</div>
</div>
<br/>
<div class="row" id="features">
	<div class="col-sm-2 col-sm-offset-2">
		<h3>Auctions</h3>
		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.Cras purus odio, vestibulum in vulputate</p>
		<a href="#"  class="btn btn-primary pull-right">Learn more</a>
	</div>
	<div class="col-sm-2 col-sm-offset-1">
		<h3>Apps</h3>
		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.Cras purus odio, vestibulum in vulputate</p>
		<a href="#"  class="btn btn-primary pull-right">Learn more</a>
	</div>
	<div class="col-sm-2 col-sm-offset-1">
		<h3>Others</h3>
		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.Cras purus odio, vestibulum in vulputate</p>
		<a href="#"  class="btn btn-primary pull-right">Learn more</a>
	</div>
</div>
