function addToCart(IdBarang) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                document.getElementById("total_cart").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "cart.php?IdBarang="+IdBarang, true);
        xhttp.send();
}

function emptyCart() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                document.getElementById("total_cart").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "cart.php?emptyCart=true", true);
        xhttp.send();
}

function totalprice(harga, totalcart, idTransaksi) {
    var x = document.getElementById("kuantitas"+idTransaksi).value;
    document.getElementById("total_price"+idTransaksi).innerHTML= 'Rp'+x*harga;
    document.getElementById("totalcart").innerHTML= 'Rp'+(totalcart+x*harga);
    document.getElementById("counttotalcart"+idTransaksi).innerHTML = '<?php $total_cart = '+(totalcart+x*harga)+';} }?>';
}

function save(kuantitas, idTransaksi) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("total_cart").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "savecart.php?IdTransaksi="+idTransaksi+"&Kuantitas="+kuantitas, true);
        xhttp.send();
}

function deleteitem(idTransaksi, reduceCart) {
    window.alert(reduceCart);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("item"+idTransaksi).innerHTML = "";
                document.getElementById("counttotalcart2").innerHTML = '<?php $total_cart -= '+reduceCart+';} }?>';
                document.getElementById("totalcart").innerHTML = 'Rp <?php echo $total_cart;?>';
            }
        };
        xhttp.open("GET", "savecart.php?deletedID="+idTransaksi, true);
        xhttp.send();
}

function order() {
    window.alert("Pesanan Anda telah diterima. Silakan hubungi 0857xxxxxx untuk melakukan pembayaran.");
}