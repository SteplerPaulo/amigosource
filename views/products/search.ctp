<nav class="navbar navbar-default navbar-static-top" id="search-types-nav">
  <div class="container">
	<div id="search-types" class="collapse navbar-collapse">
	<?php 
		$link =  'http://'.$_SERVER['HTTP_HOST'].'/'.APP_DIR.'/search?q='.$q;?>
	 <ul class="nav navbar-nav search-tabs ">
	  <li role="presentation" class="<?php if($type=='products') echo 'active';?>"><a href="<?php echo $link.'&type=products'?>">Products</a></li>
	  <li role="presentation" class="<?php if($type=='suppliers') echo 'active';?>"><a href="<?php echo $link.'&type=suppliers'?>">Suppliers</a></li>
	  <li role="presentation" class="<?php if($type=='buyers') echo 'active';?>"><a href="<?php echo $link.'&type=buyers'?>">Buyers</a></li>
	  <li role="presentation" ><a href="/amigosource/login-landing-page">More</a></li>
	  <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
		  Search tools <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
		  <li><a href="">Any Country</a></li>
		  <li><a href="">Any Category</a></li>
		   <li class="divider"></li>
		  <li><a href=""><i class="glyphicon glyphicon-inbox"></i> Category</a></li>
		  <li><a href=""><i class="glyphicon glyphicon-map-marker"></i> Location</a></li>
		</ul>
	  </li>
	  </li>
	</ul>
	</div>
  </div>
</nav>
<div class="container">
	<div class="row-fluid">
		<div class="col-sm-8">
			<?php if(!count($results)):?>
				<p>No results found for <b><?php echo $q;?></b>.</p>
			<?php endif;?>
			<?php foreach($results as $result): ?>
			<?php 
				$__Class = Inflector::classify($endpoint);
			?>
			<?php 
				$slug  = str_replace('_','-',Inflector::slug($result[$__Class]['name']));
				$link =  'http://'.$_SERVER['HTTP_HOST'].'/'.APP_DIR.'/'.$endpoint.'/view/'. $result[$__Class]['id'].'/'.$slug;
				if($endpoint=='products'){
					$result['Business']['city_name'] = $result['Business']['City']['name'];
				}else{
					$result['Business']['city_name'] = $result['City']['name'];
				}
			?>
			<div class="media">
			<?php if(isset($result['Picture'][0])): ?>
			  <div class="media-left">
				<a href="<?php echo $link;?>">
					<div class="result-thumbnail">
						<?php echo $this->Html->image('files'.DS.'thumb'.DS.'thumb-'.$result['Picture'][0]['url'])?>
					</div>
				</a>
			  </div>
			  <?php else: ?>
			  <div class="media-left">
			
					<div class="result-thumbnail">
						No thumbnail
					</div>
				
			  </div>
			  <?php endif; ?>
			  <div class="media-body">
				<div class="row-fluid">
					<div class="col-sm-8">
						<a href="<?php echo $link;?>"><h4 class="media-heading"><?php echo $result[$__Class]['name'];?></h4></a>
						<a href="<?php echo $link;?>" class="result-link"><?php echo $link;?></a>
						<p class="result-snippet">
							<?php if(isset($result[$__Class]['details'])) echo $result[$__Class]['details'];?>
						</p>
						
					</div>
					<div class="col-sm-4">
						<span class="actions">
							&star; <a href="#"> Favorite</a>
							&plus; <a href="#"> Compare</a>
						</span>
						<address class="result-others">
							 <i class="glyphicon glyphicon-map-marker"></i> 
								<?php echo $result['Business']['name'];?> <br />
								<div class="address-line"><?php echo $result['Business']['address'];?></div>
								<div class="address-line"><?php echo $result['Business']['city_name'].', '.$result['Business']['province'].', '.$result['Business']['country'];?> </div>
							 <i class="glyphicon glyphicon-earphone"></i> <?php echo $result['Business']['landline'];?>
						</address>
					</div>
				</div>
				
			  </div>
			</div>
			<?php endforeach;?>
		</div>
		<div class="col-sm-4 hide">
			<div class="panel panel-default" ng-repeat="cntr in [1]">
				<div class="panel-image" style="background-position: {{50*$index}}% 10% "></div>
				<div class="panel-body">
					<dl class="dl-vertical">
					  <dt>Business Name</dt>
					  <dd><?php  if(isset($_GET['q']))echo $_GET['q']; ?> Supreme Inc.</dd>
					  <dt>About</dt>
					  <dd>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus. scelerisque ante sollicitudin commodo. </dd>
					</dl>
					
					<div class="clearfix"></div>
					<div class="controls pull-right">
						<button class="btn btn-primary"><i class="glyphicon glyphicon-earphone"></i> Call</button>
						<button class="btn btn-default"><i class="glyphicon glyphicon-comment"></i> Chat</button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="col-sm-12">
	<nav>
	<a href="/amigo" class="navbar-brand" rel="home" title="Amigosource"><img src="img/amigosource.png" class="logo" alt="" style="margin-top: 1rem;"></a>
	  <ul class="pagination">
		<li>
		  <a href="#" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
		  </a>
		</li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li>
		  <a href="#" aria-label="Next">
			<span aria-hidden="true">&raquo;</span>
		  </a>
		</li>
	  </ul>
	</nav>
	</div>
</div>