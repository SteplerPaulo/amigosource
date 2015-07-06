AmigoApp.controller('BusinessApprovalController',function($scope,$http,$timeout,$interval,CountryProvider,ProvinceProvider,BarangayProvider,CurrencyProvider){
	
	$scope.initializeController = function(data){
		$scope.User =  data.User;
		$scope.Business =  data.Business;
		$scope.Certification =  data.Certification;
		$scope.Factory =  data.Factory[0];
		$scope.Product =  data.Product;
		$scope.RegistrationComment =  data.RegistrationComment;
		$scope.__Business =  angular.copy($scope.Business);
		$scope.__Product =  angular.copy($scope.Product);
		$scope.Countries =CountryProvider;
		$scope.Provinces =ProvinceProvider;
		$scope.Barangays =BarangayProvider;
		$scope.Currencies =CurrencyProvider;
		$scope.$parent.CountryCode = 63;
		$('.action-buttons').removeClass('loading');
		$timeout(function(){
			$.each($('.action-buttons.change'),function(i,o){
				$(o).parents('dd:first').addClass('change');
			});
		},800);
	}
	
	$scope.approveField=function(field){
		var $obj = mapFieldByString($scope,field);
		if($obj.comment_active||$obj.edit){
			if(!confirm('Ignore edit/comment?')) return;
		}
		$obj.approve = !$obj.approve; 
		if($obj.approve){	
			$obj.comment_active =false;
			$obj.edit = false;
		}
		validateApproval();
	}
	$scope.editField=function($field){
		var $obj =  mapFieldByString($scope,$field);
		$obj.edit = !$obj.edit; 
		if($obj.edit){
			$scope.RegistrationComment.push({field:$field,comment:null});
		}else{
			if($obj.comment){
				if(confirm('Ignore comment?')) purgeComment($obj,$field);
			}else{
				$obj.comment_active = false;
			}
			var $index = lookForObject($scope.RegistrationComment, $field);
			if($index!=undefined) $scope.RegistrationComment.splice($index,1);
		}
		validateApproval();
	}
	$scope.addComment = function($field){
		var $obj = mapFieldByString($scope,$field);
		var $index = lookForObject($scope.RegistrationComment, $field);
		$scope.RegistrationComment[$index].comment = $obj.comment;
	}
	$scope.commentField=function($field,ab_id){
		var $obj = mapFieldByString($scope,$field);
		if($obj.comment){
			if(confirm('Ignore comment?')) purgeComment($obj,$field);
		}else{
			$obj.comment_active = !$obj.comment_active; 
		}
		var $target = $('#action-buttons'+ab_id).parents('dd:first');
			$obj.comment_active? $target.addClass('active-comment'):$target.removeClass('active-comment');
	}
	$scope.resetApproval = function(bypass){
		if(confirm('Are you sure you want to reset?')) resetForm();
	}
	$scope.submitApproval = function(action){
		var business_id = $scope.Business.id;
		var data = {data:{Business:{id:business_id}}}
		switch(action){
			case 'approve':
				url = 'approved';
			break;
			case 'return':
				url = 'returned';
				var __registrationComments = [];
				$.each($scope.RegistrationComment,function(i,o){
					var rd =  o;
					rd.business_id = business_id;
					__registrationComments.push(rd);
				});
				data.data.RegistrationComment = __registrationComments;
			break;
		}
		$scope.SubmitInProgress = true;
		$scope.ShowModal = true;
		$scope.ProcessingTitle = 'Information';
		$scope.ProcessingMessage = 'Saving. Please wait.';
		
		$.post('../'+url,data).done(function(response){
			console.log(response);
			$scope.$apply(function(){
				var redirectCountDown = 0;
				$scope.RedirectCountDown = redirectCountDown;
				$scope.SubmitInProgress = false;
				$scope.ShowModal = true;
				$scope.ProcessingTitle = 'Success';
				$scope.ProcessingMessage = 'Transacation saved. Redirecting.';
				resetForm();
				$timeout(function(){
					window.location='../';
				},1000*redirectCountDown);
				$interval(function(){
					$scope.RedirectCountDown-=1;
				},1000,redirectCountDown);
			});
		}).error(function(response){
			console.log(response);
		});
		
	}
	function resetForm(){
		$scope.ValidForApproval = false;
			$scope.ValidForReturn = false;
			$scope.RegistrationComment = [];
			$.each($scope.Business,function(key,object){
				if(key!='id'&&key!='access_code'){
					if (typeof object == "object"){
						object.approve = object.edit = object.comment_active = false;
						object.comment = null;
					}
				}
			});
			$.each($scope.Certification,function(index,certificate){
				$.each(certificate,function(key,object){
					if (typeof object == "object"){
						object.approve = object.edit = object.comment_active = false;
						object.comment = null;
					}
				});
			});
			if($scope.Factory){
				$.each($scope.Factory,function(key,object){
						if (typeof object == "object"){
							object.approve = object.edit = object.comment_active = false;
							object.comment = null;
						}
				});
			}
			$.each($scope.Product,function(index,product){
				$.each(product,function(key,object){
					if (typeof object == "object"){
						object.approve = object.edit = object.comment_active = false;
						object.comment = null;
					}
				});
			});
	}
	function purgeComment($obj,$field){
		$obj.comment = null;
		$obj.comment_active = false;
		var $index = lookForObject($scope.RegistrationComment, $field);
		$scope.RegistrationComment[$index].comment =null;
	}
	function lookForObject($array, $field){
		var $index;
		$.each($array,function(index,object){
			if(object.field==$field){
				$index =  index; 
			}
		});
		return $index;
	}
	function mapFieldByString(o,s){
		s = s.replace(/\[(\w+)\]/g, '.$1'); // convert indexes to properties
		s = s.replace(/^\./, '');           // strip a leading dot
		var a = s.split('.');
		for (var i = 0, n = a.length; i < n; ++i) {
			var k = a[i];
			if(typeof o == "undefined") o = {};
			if (k in o) {
				o = o[k];
			} else {
				return;
			}
		}
		return o;
	}
	function validateApproval(){
		$scope.ValidForApproval = true;
		$scope.ValidForReturn = false;
		$.each($scope.User,function(key,object){
			if (typeof object == "object"){
				if(object.hasOwnProperty('approve') && object.hasOwnProperty('edit')){
					$scope.ValidForApproval = $scope.ValidForApproval && object.approve;
					$scope.ValidForReturn = $scope.ValidForReturn || object.edit;
				}
			}
		});
		$.each($scope.Business,function(key,object){
			if(key!='id'&&key!='access_code'){
				if (typeof object == "object"){
					if(object.hasOwnProperty('approve') && object.hasOwnProperty('edit')){
						$scope.ValidForApproval = $scope.ValidForApproval && object.approve;
						$scope.ValidForReturn = $scope.ValidForReturn || object.edit;
					}
				}
			}
		});
		$.each($scope.Certification,function(index,certificate){
			$.each(certificate,function(key,object){
				if (typeof object == "object"){
					if(object.hasOwnProperty('approve') && object.hasOwnProperty('edit')){
						$scope.ValidForApproval = $scope.ValidForApproval && object.approve;
						$scope.ValidForReturn = $scope.ValidForReturn || object.edit;
					}
				}
			});
		});
		if($scope.Factory){
			$.each($scope.Factory,function(key,object){
				if (typeof object == "object"){
					if(object.hasOwnProperty('approve') && object.hasOwnProperty('edit')){
						$scope.ValidForApproval = $scope.ValidForApproval && object.approve;
						$scope.ValidForReturn = $scope.ValidForReturn || object.edit;
					}
				}
			});
		}
		if($scope.Product){
			$.each($scope.Product,function(index,product){
				$.each(product,function(key,object){
					if (typeof object == "object"){
						if(object.hasOwnProperty('approve') && object.hasOwnProperty('edit')){
							$scope.ValidForApproval = $scope.ValidForApproval && object.approve;
							$scope.ValidForReturn = $scope.ValidForReturn || object.edit;
						}
					}
				});
			});
		}
	}
});