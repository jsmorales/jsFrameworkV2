(function(){
	//console.log(" Global?");

	self.saludo = function(){
		console.log(" Saludo global.")
	}

	//opciones generales de las tablas
	$('.table').dataTable({
      "language": {
                "url": "../bower_components/datatables-plugins/i18n/Spanish.lang.json"
            }
    });

})()