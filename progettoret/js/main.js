if ('serviceWorker' in navigator) {
    console.log('Service Worker is supported');
    navigator.serviceWorker.register('sw.js').then(function(reg) {
        console.log(':^)', reg);
        reg.pushManager.subscribe({
            userVisibleOnly: true
        }).then(function(sub) {
        	var id=sub.endpoint.substring(40)
            console.log('endpoint:', id);
            xhttp = new XMLHttpRequest();
           	xhttp.open("POST", "subscribe.php", true);
			xhttp.send("id="+id);
        });
    }).catch(function(error) {
        console.log(':^(', error);
    });
}


