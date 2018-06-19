<?php




	$kull=$_COOKIE['kull'];
	$vt =new mysqli("localhost","root","","yazilim");
	$vt->query("SET NAMES UTF8");


	if(isset($_POST['query'])){

		$soru_no=$_POST['query']['soruno']+1;

		if($soru_no > 15){
			include("test_sonuc.php");

			return;
		}
		$query = "select * from sorular where SoruNo = '$soru_no'";
		$result = $vt->query($query);
		$row=$result->fetch_array();

		//Her sonraki soruda puan artacak



		$sonuc=$vt->query("select * from kullanicilar where KullaniciAdi='$kull' order by id desc");
		$eski_puan=$sonuc->fetch_row();

		$askor=$eski_puan[2]+$_POST['query']['a'];
		$bskor=$eski_puan[3]+$_POST['query']['b'];
		$cskor=$eski_puan[4]+$_POST['query']['c'];
		$dskor=$eski_puan[5]+$_POST['query']['d'];


		$guncelle="update kullanicilar set Askoru='$askor', Bskoru='$bskor', Cskoru='$cskor', Dskoru='$dskor' where kullaniciadi='$kull'";
		$vt->query($guncelle);

		}else{

			$query = "select * from sorular where SoruNo = 1";
			$result = $vt->query($query);
			$row=$result->fetch_array();

			//ilk kayit



			$kayit = "INSERT INTO kullanicilar (KullaniciAdi,Askoru,Bskoru,Cskoru,Dskoru)VALUES('$kull','0','0','0','0')";
			$vt->query($kayit);
	}

	$soru_no=$row[1];
	$soru=$row[2];
	$a=$row[3];
	$b=$row[4];
	$c=$row[5];
	$d=$row[6];

?>

<script>

var a=0, b=0, c=0, d=0;
var sayac=0;
function kontrol(){
	if(((a != 0) & (b !=0)) || ((a != 0) & (c !=0)) || ((a != 0) & (d != 0 )) || ((b != 0) & (c !=0)) || ((b != 0) & (d !=0)) || ((c != 0) & (d !=0)) & sayac > 2){
		var x=confirm("Yalnız iki cevap verilebilinir\nDeğişiklik yapmak istiyor musun.");
		if(x==true){
			$("span").remove(".glyphicon");
			$("a").removeClass("secili");
			sayac=0;
			a=0;
			b=0;
			c=0;
			d=0;
			return;
		}

	return false;

	}
	return true;
}
function secim(sec){

	var gelen = $(sec).attr('id');
	var text="<span class='"+ $(sec).attr('id')+" glyphicon glyphicon-ok'></span>";
	var text2="."+ $(sec).attr('id');


   if(kontrol()){
    if(gelen=="c1" ){
	    if(a != 2 ) {
	    	a++;
	    	sayac++
	    	$(sec).append(text);
	    	$(sec).addClass("secili");
	    }
	  	else if (a == 2){
	  		 a=0;
	  		sayac=0;
	  		 $("span").remove(text2);
	  		 $(sec).removeClass("secili");
	  	}
	}
	else if(gelen=="c2"){
	    if(b != 2 ) {
	    	b++;
	    	sayac++
	    	$(sec).append(text);
	    	$(sec).addClass("secili");
	    }
	  	else if (b == 2){
	  		 b=0;
	  		 sayac=0;
	  		 $("span").remove(text2);
	  		  $(sec).removeClass("secili");
	  	}
	}
	else if(gelen=="c3"){
	    if(c != 2 ) {
	    	c++;
	    	sayac++
	    	$(sec).append(text);
	    	$(sec).addClass("secili");
	    }
	  	else if (c == 2){
	  		 c=0;
	  		sayac=0;
	  		 $("span").remove(text2);
	  		 $(sec).removeClass("secili");
	  	}
	}
	else if(gelen=="c4"){
	    if(d != 2 ) {
	    	d++;
	    	sayac++
	    	$(sec).append(text);
	    	$(sec).addClass("secili");
	    }
	  	else if (d == 2){
	  		 d=0;
	  		 sayac=0;
	  		 $("span").remove(text2);
	  		  $(sec).removeClass("secili");
	  	}
	}

}

}







function ilerle() 	{

			var soruno=$("#soruno").text();

			var bilgi = {
				soruno:soruno,
				a:a,
				b:b,
				c:c,
				d:d
			}
			$.ajax({
				type: 'post',
				url: 'ajax.php',
				data: {query: bilgi},
				success: function(result) {
					$('.soru_alani').html(result);

				}
			});



	a=0;
	b=0;
	c=0;
	d=0;
	sayac=0;
	}
</script>
<style>
.secili{

	color:red;

}

</style>
<form action="ajax.php" method="post">
	<div class="">
	    <p><span style="font-size:24px;" id="soruno" value="1"><?php echo $soru_no ;?></span> <?php echo $soru ; ?></p>
	</div>
	<div class="">
	    <p>A ) <a id="c1" value=""  onclick="secim(this);" ><?php echo $a;?></a></p>

		<p>B ) <a id="c2" onclick="secim(this);" ><?php echo $b; ?></a></p>

		<p>C ) <a id="c3" onclick="secim(this);" ><?php echo $c;?></a></p>


		<p>D ) <a id="c4" onclick="secim(this);" ><?php echo $d ;?></a></p>

	</div>
	<div>
		<input  class="btn btn-info" type="button" onclick="ilerle();" value="Sonraki">
	</div>
</form>



<?php







?>
