AmigoApp.controller('BusinessApprovalController',function($scope,$timeout,CountryProvider,ProvinceProvider,BarangayProvider,BusinessTypeProvider,CurrencyProvider){
	const LOGO_IMG_MAX = 1;
	var __uploaderConfig = {
		uploadAsync :false,
		showPreview: false,
		uploadUrl: '../../pictures/add',
		allowedFileExtensions: ["jpg", "png", "gif"],
		maxFileSize:100,
		maxFileCount:1,
		layoutTemplates:{
			actions: '<div class="file-actions">\n' +
			'    <div class="file-footer-buttons">\n' +
			'       {delete}' +
			'    </div>\n' +
			'    <div class="file-upload-indicator" tabindex="-1" title="{indicatorTitle}">{indicator}</div>\n' +
			'    <div class="clearfix"></div>\n' +
			'</div>'
		}
	};
	function initUploader(){
		$('#BusinessLogoUploader').fileinput('refresh',__uploaderConfig).on('filebatchuploadsuccess',fileSuccess).on('filebatchselected',fileBatchSelected);
	}
	function fileSuccess(event, data, previewId, index){
		$timeout(function(){
			 var form = data.form, files = data.files, response = data.response;		 
			$scope.Business.logo = response.filenames[0];
			$('#BusinessLogoUploader').fileinput('refresh',__uploaderConfig).fileinput('disable');	
			},300);
	}
	function fileBatchSelected(event, files) {
		$('#BusinessLogoUploader').fileinput('upload');
	}
	$scope.initializeController = function(data){
		$scope.ACCESS_CODE =  data.Business.access_code;
		$scope.User =  data.User;
		$scope.__User = angular.copy($scope.User);
		$scope.Business  =  data.Business;
		$scope.__Business = angular.copy($scope.Business);
		$scope.Certification =  data.Certification;
		$scope.__Certification = angular.copy($scope.Certification);
		$scope.Factory =  data.Factory[0];
		$scope.__Factory = angular.copy($scope.Factory);
		$scope.Product =  data.Product;
		$scope.__Product = angular.copy($scope.Product);
		$scope.Countries =CountryProvider;
		$scope.Provinces =ProvinceProvider;
		$scope.Barangays =BarangayProvider;
		$scope.BusinessTypes =BusinessTypeProvider;
		$scope.Currencies =CurrencyProvider;
		$scope.$parent.CountryCode = 63;
		$scope.ValidForReturn = true;
		$('.action-buttons').removeClass('loading');
		$scope.filterProvince = function(item){
			return !$scope.Business.province?false: item.id == $scope.Business.province;
		}
		$scope.filterCountry = function(item){
			return !$scope.Business.country?false: item.country_id == $scope.Business.country;
		}
		$scope.filterSubCategory = function(item){
			return !$scope.Product.category_id?false: item.parent_id == $scope.Product.category_id;
		}
		$scope.$watch('Business.city',function(value){
			if($scope.Business.province!='MNL'){
				for(var i =0;i<ProvinceProvider.length;i++){
					var prov=ProvinceProvider[i];				
					if(prov.id==$scope.Business.province){
						for(var ii =0;ii<prov.cities.length;ii++){
							var city=prov.cities[ii];
							if(city.id==value){
								$scope.Business.zip_code = city.zip_code;
								break;
							}
						}
						break;
					}
				}
			}else{
				$scope.Business.zip_code = null;
			}
		});
		$scope.$watch('Business.barangay',function(value){
			if($scope.Business.province=='MNL'){
				for(var i =0;i<BarangayProvider.length;i++){
					var brgy=BarangayProvider[i];
					if(brgy.id == value){
						$scope.Business.zip_code = brgy.zip_code;
						break;
					}
					
				}
			}else{
				$scope.Business.zip_code = null;
			}
		});
		initUploader();
	}
	$scope.removeLogo = function(){
		$('#BusinessLogoUploader').fileinput('enable');
		$scope.Business.logo = null;
		initUploader();
	}
	$scope.submitForm = function(){
		$scope.SubmitInProgress = true;
		$scope.ShowModal = true;
		$scope.ProcessingTitle = 'Information';
		$scope.ProcessingMessage = 'Saving. Please wait.';
		var data = $('form[name="BusinessReturnForm"]').serialize();
		var access_code =  $scope.ACCESS_CODE;
		$.post('../edit?access_code='+access_code,data,function(response){
			$scope.SubmitInProgress = false;
			$scope.ShowModal = true;
			$scope.ProcessingTitle = 'Success';
			$scope.ProcessingMessage = 'Transacation saved. Redirecting.';
			$timeout(function(){window.location='../../';},800);
		});
	}
	$scope.resetForm =function(){
		$scope.User = $scope.__User;
		$scope.Business =  $scope.__Business;
		$scope.Certification =  $scope.__Certification;
		$scope.Factory =  $scope.__Factory;
		$scope.Product =  $scope.__Product;
	}
	
});