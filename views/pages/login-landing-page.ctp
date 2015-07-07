<nav class="navbar navbar-default navbar-static-top" id="search-types-nav">
	<div class="container">
		<div id="search-types" class="collapse navbar-collapse">
			<ul class="nav navbar-nav search-tabs ">
				<li role="presentation"><a href="#">Profile</a></li>
				<li role="presentation" class="active">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
						Auction <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="/amigosource/create-project">Create</a></li>
					  <li><a href="/amigosource/view-projects">View</a></li>
					  <li><a href="/amigosource/auctions">Join</a></li>
					</ul>
	  
				</li>
				<li role="presentation">
					<?php echo $this->Html->link('Apps',array('controller'=>'pages','action'=>'apps'));?>
				</li>
				<li role="presentation">
					<?php echo $this->Html->link('Others',array('controller'=>'pages','action'=>'others'));?>
				</li>
			</ul>
		</div>
	</div>
</nav>
