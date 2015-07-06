AmigoApp.provider('CountryProvider',function(){
	var countries = <?php echo json_encode($countries); ?>;
    return {
      $get: function () {
        return countries;
      }
    };
});