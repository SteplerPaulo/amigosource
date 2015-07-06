AmigoApp.provider('CurrencyProvider',function(){
	var currencies = <?php echo json_encode($currencies); ?>;
    return {
      $get: function () {
        return currencies;
      }
    };
});