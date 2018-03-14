(function() {
	// var ws_hosts = ['ws://s2.onicon.ru'];
	var ws_hosts = ['wss://s2.onicon.ru'];
	var polling_hosts = ['https://proxy-1.onicon.ru'];
	
	Onicon.lib('ws_hosts', ws_hosts);
	Onicon.lib('polling_hosts', polling_hosts);

	Onicon.SERVER_STATUS_URL = 'https://s2.onicon.ru/status';
})();
