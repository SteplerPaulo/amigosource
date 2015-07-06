AmigoApp.controller('BusinessRegistrationController',function($scope,$parse){
	const ALLOW_BYPASS = false;
	const INIT_SECTION = 0;
	const DEMO_MODE = false;
	$scope.initializeController = function(){
		if(DEMO_MODE){
			$scope.User = {email:'arroyo.daveil@gmail.com.ph',password:'password',confirm_password:'password'};
			$scope.Business = {address: "1144 Dona Fidela",business_type_id: "AGNT",city: "178",contact_name: "Dave Alaras",country: "PH",designation: "Programmer",fax: "100000",landline: "200 000",mobile: "1",name: "Busines",province: "BTG",zip_code: 4234};
			$scope.Certification = {};
			$scope.Factory = {contract_manufacturing: "Sample Contract",employee_count: "501–1000",location: "Batangas",product_line_count: "6-10",qc_staff_count: "16-20",r_and_d_staff_count: "6-10"};
			$scope.Product = {};
			$scope.Certifications = [{date_issued: "12/15/2012",description: "Certificate A",issuing_agency: "Agency 1110"},{date_issued: "12/15/2012",description: "Certificate C",issuing_agency: "Agency 2110"}];
			$scope.Products = [{"product_image":['thumb-2015-05-27-072625tulips.jpg'],"category_id":"10","classification_id":"125","name":"1","details":"1","standard_pckg":"1","specifications":"1","technical_desc":"1","cost_currency":"PHP","cost":1,"unit_measure_code":"1","stock_on_hand":10,"min_order_qty":1,"payment_terms":"1","shipping_terms":"1","contact_name":"1","contact_number":"11111","contact_email":"arroyo.daveil@gmail.com","index":"0"}];
		}else{
			$scope.User = {};
			$scope.Business = {};
			$scope.Certification = {};
			$scope.Factory = {};
			$scope.Product = {};
			$scope.Certifications = [];
			$scope.Products = [];
		}
		$scope.FormValid = true;
		$scope.Sections = ['user_account','member_details','certification_&_profile','product_details','confirmation'];
		$scope.ValidatedSectionIndex = $scope.ActiveSectionIndex = INIT_SECTION;
		$scope.updateActiveSection(INIT_SECTION);
		$scope.ShowCertificationsError = false;
		$scope.User.user_type ='supplier';
	}
	$scope.updateUserSteps = function(user_type){
		$scope.LastStep = user_type == 'supplier'?5:4;
		$scope.User.user_type = user_type;
	}
	
	$scope.stepActiveSection = function(step){
		//Validate before proceeding to next section
		var isValid = true;
		$scope.FormValid = true;
		if(step==1){
			var validate = validateSection($scope.ActiveSection);
			$scope.FormValid = isValid = validate.isValid;
		}
		if(isValid){
			var index = parseInt($scope.ActiveSectionIndex) + step;
			if($scope.User.user_type=='buyer' && index==3){
				index = step == 1 ? 4:2;
			}
			if(index<$scope.Sections.length&&index>=0){
				$scope.ActiveSectionIndex = index;
				$scope.updateActiveSection($scope.ActiveSectionIndex);
				if(index>$scope.ValidatedSectionIndex){
					$scope.ValidatedSectionIndex = index;
				}
			}else{
				alert('Out of bound'+index);
			}
		}
	}
	function validateSection(section){
		var isValid = true;		
		var errors = [];
		switch(section){
				case 'user_account':
					angular.forEach($scope.BusinessAddForm, function(field, name) {
					  if (typeof name === 'string' && name.match(/[\[].*User.*[\]]/)) {
						if (field.$pristine) {
							field.$setViewValue(field.$modelValue);
							field.$setDirty(true);
						}
						isValid = isValid && field.$valid;
						
						if(!field.$valid){
							var model = document.getElementsByName(field.$name)[0].getAttribute('ng-model');
							var __field =  model.replace('User.','').replace('_',' ');
							errors.push(__field);
						}
					  }
					});
				break;
				case 'member_details':
					angular.forEach($scope.BusinessAddForm, function(field, name) {
					  if (typeof name === 'string' && name.match(/[\[].*Business.*[\]]/)) {
						if (field.$pristine) {
							field.$setViewValue(field.$modelValue);
							field.$setDirty(true);
						}
						isValid = isValid && field.$valid;
						if(!field.$valid){
							var model = document.getElementsByName(field.$name)[0].getAttribute('ng-model');
							var __field =  model.replace('Business.','').replace('_',' ').replace('_id',' ');
							errors.push(__field);
						}
					  }
					});
				break;
				case 'certification_&_profile':
					angular.forEach($scope.BusinessAddForm, function(field, name) {
					  if (typeof name === 'string' && (name.match(/[\[].*Factory.*[\]]/)||name.match(/[\[].*Certification.*[\]]/))) {
						if (field.$pristine) {
							field.$setViewValue(field.$modelValue);
							field.$setDirty(true);
						}
						isValid = isValid && field.$valid;
						if(!field.$valid){
							var model = document.getElementsByName(field.$name)[0].getAttribute('ng-model');
							var __field =  model.replace('Certification.','').replace('Factory.','').replace('_',' ');
							errors.push(__field);
						}
					  }
					});
					
					if($scope.Certifications.length==0&& ($scope.User.user_type=='supplier'||$scope.User.user_type=='buyer')){
						$scope.ShowCertificationsError = true;
						errors.push('Add at least one certification');
						isValid = false;
					}
				break;
				case 'product_details':
					if($scope.ProductEdit){
						isValid = false;
						errors.push('Product not yet saved');
					}
					if($scope.Products.length==0 && $scope.User.user_type=='supplier'){
						isValid = false;
						$scope.ShowProductError = true;
						errors.push('Add at least one product');
					}
				break;
			}
			$scope.ShowErrorModal=!isValid;
			
			if(!isValid){
				$scope.ErrorTitle='Validation Message';
				$scope.ErrorMessage = 'Please adjust the following:';
				$scope.Errors=errors;
			}
			return {'isValid':isValid,'errors':errors};
	}
	$scope.updateActiveSection = function(index){
		if(typeof index == "number"){
			if($index>$scope.ValidatedSectionIndex&&!ALLOW_BYPASS) return alert('Finish current step first');
			if(index<$scope.Sections.length&&index>=0){
				$scope.ActiveSection = $scope.Sections[index];
			}else{
				alert('Out of bound');
			}
		}else if(typeof index == "string"){
			var isValid = true;
			if(index==$scope.ActiveSection) return;
			for(var $index in $scope.Sections){
				$index = parseInt($index);
				if($scope.Sections[$index]===index){
					if($index>$scope.ValidatedSectionIndex&&!ALLOW_BYPASS) return alert('Finish current step first');
					var validate = validateSection($scope.ActiveSection);
					$scope.FormValid = isValid = validate.isValid;
					if(isValid){
						if($index<=$scope.ValidatedSectionIndex && $scope.ActiveSectionIndex+1>=$scope.ValidatedSectionIndex){
							$scope.ValidatedSectionIndex = $scope.ActiveSectionIndex+1;
						}
						$scope.ActiveSectionIndex =  $index;
					}
					break;
				}
			}
			if(isValid) $scope.ActiveSection = index;
		}	
	}
	$scope.ProcessRegistration = function(){
		$scope.ProcessingTitle = 'Information';
		$scope.ProcessingMessage = 'Saving. Please wait.';
		$scope.ShowModal = true;
		$scope.RegistrationInProgress = true;
		var __captcha = $scope.CaptchaCode;
		var __user = $scope.User;
		var __business = $scope.Business;
		var __factory = $scope.Factory;
		var __certifications = [];
		$.each(angular.copy($scope.Certifications),function(i,o){
			delete o.$$hashKey;
			var date = new Date(o.date_issued);
			o.date_issued = date.objectify();
			__certifications.push(o);
		});
		var __products = [];
		$.each($scope.Products,function(i,o){
			delete o.$$hashKey;
			__products.push(o);
		});
		var __registration = {data:{
								captcha: __captcha,
								User:__user,
								Business:__business,
								Certification: __certifications,
								Factory:__factory,
								Product:__products
								}
							};	
		$.post('register', __registration,function(data){
			$scope.RegistrationInProgress = false;
			switch(data.status){
				case 'OK':
					window.location='success';
				break;
				case 'ERROR':
					if(data.error=='captcha'){
						
						$scope.refershCaptcha();
						$scope.$apply(function(){
							$scope.ProcessingTitle = 'Error';
							$scope.ProcessingMessage = 'Incorrect captcha';
						});
					}
					if(data.error=='email'){
						
						$scope.$apply(function(){
							$scope.ProcessingTitle = 'Error';
							$scope.ProcessingMessage = 'Email already taken';
						});
						$scope.refershCaptcha();
					}
				break;
			}
		});
		
	}
	
	$scope.refershCaptcha = function(){
		$scope.CaptchaHash = Math.round(Math.random()*10000);
		$scope.CaptchaCode = '';
	}
});
AmigoApp.controller('UserAccountController',function($scope,$http){
	$scope.checkEmail = function(){
		$scope.EmailFocused = false;
		$scope.CheckingUserEmail = true;
		var elem = $scope.BusinessAddForm['data[User][email]'];
		elem.$setValidity('taken',true); //RESET
		if($scope.User.email&&elem.$valid){
			$http.get('users.json?email='+$scope.User.email).success(function(data){
				elem.$setValidity('taken',data.status=='OK');
				$scope.CheckingUserEmail = false;
			}).error(function(){
				
			});
		}
	}
	$scope.resetEmailValidation = function(){
		var elem = $scope.BusinessAddForm['data[User][email]'];
		$scope.CheckingUserEmail = true;
	}
});
AmigoApp.controller('MemberDetailsController',function($scope,$timeout,CountryProvider,ProvinceProvider,BarangayProvider,BusinessTypeProvider,CurrencyProvider){
	const LOGO_IMG_MAX = 1;
	var __uploaderConfig = {
		uploadAsync :false,
		showPreview: true,
		uploadUrl: 'pictures/add',
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
	$scope.$parent.Countries =CountryProvider;
	$scope.$parent.Provinces =ProvinceProvider;
	$scope.$parent.Barangays =BarangayProvider;
	$scope.$parent.BusinessTypes =BusinessTypeProvider;
	$scope.$parent.Currencies =CurrencyProvider;
	$scope.$parent.CountryCode = 63;
	$scope.filterProvince = function(item){
		return !$scope.Business.province?false: item.id == $scope.Business.province;
	}
	$scope.filterBarangay = function(item){
		return !$scope.Business.city?false: item.city_id == $scope.Business.city;
	}
	$scope.filterCountry = function(item){
		return !$scope.Business.country?false: item.country_id == $scope.Business.country;
	}
	$scope.$watch('Business.province',function(newValue,oldValue){
		if(newValue!=oldValue){
			$scope.Business.city = '';
			$scope.Business.zip_code = '';
		}
	});
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
	$scope.filterSubCategory = function(item){
		return !$scope.Product.category_id?false: item.parent_id == $scope.Product.category_id;
	}
	$scope.removeLogo = function(){
		$('#BusinessLogoUploader').fileinput('enable');
		$scope.Business.logo = null;
		initUploader();
	}
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
	initUploader();
});
AmigoApp.controller('CertificationProfileController',function($scope){
	
	$scope.addCertification = function(){
		var certification = angular.copy($scope.Certification);
		var __date = new Date(certification.date_issued);
		certification.date_issued = __date.format('mm/dd/yyyy');
		$scope.Certifications.push(certification);
		$scope.CertificationCount = $scope.Certifications.length;
		$scope.Certification = {};
	}
	$scope.removeCertification = function($index){
		$scope.Certifications.splice($index,1);
		$scope.CertificationCount = $scope.Certifications.length;
	}
	$scope.$watch('CertificationCount',function(newvalue,oldvalue){
		$scope.$parent.ShowCertificationsError = newvalue==0 
	});
});
AmigoApp.controller('ProductDetailsController',function($scope,$timeout,CategoryProvider){
	const PRODUCT_IMG_MAX = 4;
	$scope.Product.product_image = [];
	$scope.SubCategories =CategoryProvider;
	$scope.ProductEdit = false;
	$scope.ProductView = false;
	$scope.$watch('ProductEdit',function(value){$scope.$parent.ProductEdit=value;});
	$scope.$watch('ProductView',function(value){$scope.$parent.ProductView=value;});
	$scope.$watch('Product.min_order_qty',function(value){
		if(parseFloat(value)<=0){
			alert('Min order quantity must be greater than zero');
			$scope.Product.min_order_qty = null;
		}
	});
	$scope.filterSubCategory = function(item){
		return !$scope.Product.category_id?false: item.parent_id == $scope.Product.category_id;
	}	
	$scope.confirmAddProduct = function(){
		var isValid = true;
		var errors = [];
		angular.forEach($scope.ProductAddForm, function(field, name) {
		  if (typeof name === 'string' && name.match(/[\[].*Product.*[\]]/)) {
			if (field.$pristine) {
				field.$setViewValue(field.$modelValue);
				field.$setDirty(true);
			}
			isValid = isValid && field.$valid;
			if(!field.$valid){
				var model = document.getElementsByName(field.$name)[0].getAttribute('ng-model');
				var __field =  model.replace('Product.','').replace('_id',' ').replace('_',' ').replace('_qty',' ').replace('_hand',' ');
				errors.push(__field);
			}
		  }
		});
		$scope.$parent.FormValid  = isValid;
		$scope.$parent.ShowErrorModal=!isValid;
		if(!isValid){
			$scope.$parent.ErrorTitle='Validation Message';
			$scope.$parent.ErrorMessage = 'Please adjust the following:';
			$scope.$parent.Errors=errors;
		}
		if(!isValid) return false;
		if(!$scope.ProductEdit){
			$scope.Product.index = $scope.Products.length;
			$scope.Products.push($scope.Product);
		}else{
			for(var index in $scope.Products){
				if(index == $scope.Product.index){
					$scope.Products[index]= $scope.Product;
				}
			}
		}
		if(isValid){
			$scope.$parent.ShowErrorModal=true;
			$scope.$parent.ErrorTitle='Validation Message';
			$scope.$parent.ErrorMessage =$scope.ProductEdit?'Product updated':'Product added';
			$scope.$parent.Errors=null;
		}
		$scope.cancelAddProduct();
	}
	$scope.cancelAddProduct=function(){
		$scope.Product= {};
		$scope.Product.product_image = [];
		$scope.ProductEdit = false;
		$scope.ProductView = false;
		$scope.ProductAddForm.$setPristine();
		$scope.ShowProductError = $scope.Products.length == 0 ;
		initUploader();
	}
	$scope.editProduct  = function(product){
		$scope.ProductEdit = true;
		$scope.ProductView = false;
		$scope.loadProduct(product);
		initUploader();
	}
	$scope.viewProduct  = function(product){
		$scope.ProductEdit = false;
		$scope.ProductView = true; 
		$scope.loadProduct(product);
	}
	$scope.loadProduct= function(product){
		$scope.Product = angular.copy(product);		
	}
	$scope.$watch('ProductView',function(is_view){
		$('#Product0ProductImage').fileinput(is_view?'disable':'enable');
	});
	$scope.removeProduct = function($index){
		$scope.Products.splice($index,1);
		$scope.ShowProductError = $scope.Products.length == 0 ;
	}
	$scope.removeProductImage = function($index){
		$scope.Product.product_image.splice($index,1);
		if($scope.Product.product_image.length==PRODUCT_IMG_MAX-1){
			$('#Product0ProductImage').fileinput('enable');
		}
		initUploader();
	}
	var uploaderConfig = {
		uploadAsync :false,
		showPreview: true,
		showRemove: false,
		showUploadedThumbs:false,
		initialPreview:[],
		uploadUrl: 'pictures/add',
		allowedFileExtensions: ["jpg", "png", "gif"],
		maxFileSize:1024,
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
		uploaderConfig.maxFileCount = PRODUCT_IMG_MAX - $scope.Product.product_image.length;
		if(uploaderConfig.maxFileCount == 0){
			$('#Product0ProductImage').fileinput('disable');
		}else{
			$('#Product0ProductImage').fileinput('refresh',uploaderConfig).on('filebatchuploadsuccess',fileSuccess).on('filebatchselected',fileBatchSelected);
		}
	}
	function fileSuccess(event, data, previewId, index){
		 var form = data.form, files = data.files, response = data.response;
		$timeout(function(){
			if($scope.Product.product_image==undefined) $scope.Product.product_image = [];
			$.each(response.filenames,function(i,o){
				if($.inArray(o,$scope.Product.product_image)==-1){
					$scope.Product.product_image.push(o);
				}
			});
			if($scope.Product.product_image.length==PRODUCT_IMG_MAX){
				$('#Product0ProductImage').fileinput('refresh',uploaderConfig).fileinput('disable');
			}else{
				uploaderConfig.maxFileCount = PRODUCT_IMG_MAX - $scope.Product.product_image.length;
				$('#Product0ProductImage').fileinput('refresh',uploaderConfig).on('filebatchuploadsuccess',fileSuccess).on('filebatchselected',fileBatchSelected);
			}
		},300);
	}
	function fileBatchSelected(event, files) {
		$('#Product0ProductImage').fileinput('upload');
	}
	initUploader();
});
