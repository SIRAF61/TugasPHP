<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Pelemparan Dadu</title>
    	<link rel="stylesheet" href="dadu.css">
	</head>
	<body>
		<h1>Pelempar Dadu Ular Tangga</h1>

		<table class="tbl">
			<tr>
				<th class="a">Dadu</th>
				<th class="a">Gambar</th>
				<th class="a">Value</th>
				<th class="a">Lempar Dadu</th>
			</tr>
			<tr>
				<td class="b">A</td>
				<td class="b"><img id="imgA" src="dadu1.png"></td>
				<td class="b" id="A">1</td>
				<td class="b"><button onclick="btnA()" id="hide">Lempar Dadu A</button></td>
			</tr>
			<tr>
				<td class="b">B</td>
				<td class="b"><img id="imgB" src="dadu4.png"></td>
				<td class="b" id="B">4</td>
				<td class="b"><button onclick="btnB()" id="hide" >Lempar Dadu B</button></td>
			</tr>
		</table>
		<br>
		<div id="isi">
			<button onclick="btnDua()">Lempar 2 Dadu</button></p>
			<button onclick="btnTotal()">Total Langkah</button></p>
		</div>
        <section>
            <body style="text-align: center">
            <h1></h1>
            <form style= "color: blue" action="welcome.php" method="post">
            id: <br>
            <input type="text" name="id"><br>
            nama: <br>
            <input type="text" name="nama"><br>
            nim: <br>
            <input type="text" name="nim"><br>
            email: <br>
            <input type="text" name="email"><br>
            komentar: <br>
            <input type="text" name="komentar"><br>
            <input type = "submit">
            </form>
            </body>
        </section>

		<script src="dadu.js"></script>
	</body>
</html>