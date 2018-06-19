<?php
//database

	$kull=$_COOKIE['kull'];
	$vt =new mysqli("localhost","root","","yazilim");
	$vt->query("SET NAMES UTF8");

	$sonuclar=$vt->query("select * from kullanicilar where KullaniciAdi='$kull' order by id desc");
	$satir=$sonuclar->fetch_array();


?>

	<div class="" >
		<div class=" panel-heading">
			<h3>Test Sonucu</h3>
		<div>
		<div class="panel-body">
			<span>Kullanici Adi:</span><?php echo $satir[1];?>

			<?php
				$eb=0;
				$i=2;
				$indis=0;
				for($i=2 ; $i<6; $i++){
					if($satir[$i]>$eb){
						 $eb=$satir[$i];
						 $indis=$i;
					}
				}


				if($indis==2){
					?>
						<script type="text/javascript">
							$(".orta_kisim").css("background-color","#ff7777");
						</script>
						<div >
							<span>Karakteriniz:<span style="color:red;" >Kırmızı</span></span>
							<p>Karakterinizin Özellikleri</p>

							<ul>
								<li>Güçlü kararlı tiplerdir.</li>
								<li>Az laf, çok iş derler. Sonuç odaklıdırlar.</li>
								<li>Herkesin onlar gibi düşünüp hareket etmesini isterler. </li>
								<li>Gereksiz konuşmalardan ve işlerden hoşlanmazlar. </li>
								<li>Hep yapacak işleri ve alınmış kararları vardır. </li>
								<li>Önemli olan onlara göre işin özünü anlamak ve</li>
								<li>sonucu elde etmektir. Bu yüzden kararlarını uygularken gözleri başka bir şey görmez.</li>
								<li>Yüksek; ancak gerçekçi hedefler belirlemekten ve bunları gerçekleştirmeye çalışmaktan</li>
								<li>büyük zevk alırlar. Son derece bağımsız insanlardır. </li>
								<li>Zaman yönetimi konusunda üstün bir becerileri vardır. </li>
								<li>Konuşması hızlı ve tempoludur. Çalışma ortamları, ne çok dağınık ne de çok düzenlidir.</li>
								<li>Hep dik durmaya çalışırlar, kimseden yardım istemeyi sevmezler.</li>
								<li>Kendilerini daima haklı görme eğilimleri vardır. </li>
								<li>Eleştiriden pek hoşlanmazlar. Kararlı ve iş bitiricidirler. </li>
								<li>Ani kararlarıyla insanları şaşırtabilirler. </li>
								<li>İşlerine aşırı odaklanırlar; fakat sonuçlar konusunda yeterli değerlendirmeyi yapamayabilirler. </li>
								<li>Lider özelliklidirler. Özgüvenleri yüksektir.</li>
							</ul>


						</div>

					<?php

				}elseif($indis==3){
					?>
						<script type="text/javascript">
							$(".orta_kisim").css("background-color","#FFFF00");
						</script>
						<div >
							<span>Karakteriniz:<span style="color:white;" >Sarı</span></span>
							<p>Karakterinizin Özellikleri</p>

							<ul>
								<li>Sarı karakterli kişiler, bu 4 ana kategori içinde en hareketli karakterdir. </li>
								<li>İlgi çekici ve karizmatik yapılıdırlar. </li>
								<li>Dışarıdan bakılınca sevimli, kıpır kıpır, hikayeler anlatıp güldüren ve gülen birini görüyorsanız onları hemen tanırsınız.</li>
								<li>Birebir ilişkilerde çok aktiftirler. </li>
								<li>Yabancılarla kolaylıkla ve özel bir çaba göstermeksizin ilişki kurarlar. </li>
								<li>Geniş bir tanıdık çevreleri vardır. </li>
								<li>Hayaller kurmaya yatkındırlar. </li>
								<li>Vizyonları çok geniştir. </li>
								<li>Bir organizasyon içerisinde büyük projeler hayal edebilen, çok daha büyük ve parlak bir geleceği düşünebilen kişilerdir. Ancak bunları hayata geçirme konusunda büyük sıkıntılar yaşayabilirler.</li>
								<li>Bu karakter grubunun genel özellikleri; girişkendirler, ayrıntılar üzerinde düşünmezler, çalışma alanları dağınıktır, onları toparlayacak birine ihtiyaç duyarlar. </li>
								<li>Eğlenceli ve hareketlidirler, mutluluk ve enerji yayarlar, dikkatsizdirler, hazır cevaptırlar, ikna edicidirler, sorunlara ilginç çözümler bulurlar, meraklıdırlar.</li>
							</ul>


						</div>

					<?php

				}elseif($indis==4){
						?>
						<script type="text/javascript">
							$(".orta_kisim").css("background-color","#AEFF99");
						</script>
						<div >
							<span>Karakteriniz:<span style="color:white;" >Yeşil</span></span>
							<p>Karakterinizin Özellikleri</p>

							<ul>
								<li>Orta yollu tiplerdir. </li>
								<li>Dikkat çekici hatalarda bulunmazlar. </li>
								<li>En belirgin yönleri her yerde mutlu olabilmeleri ve hallerinden memnuniyet duymalarıdır.</li>
								<li>Sabırlıdırlar</li>
								<li>Ayırt edilmesi en güç olan ve zor anlaşılan kişilerdir. </li>
								<li>İçten içe çok inatçıdırlar. Projeleri yarım bırakabilirler.</li>
								<li>Pek fazla kimseye hayır diyemezler. Barışçıl ve fedakardırlar. </li>
								<li>En çok önemsedikleri şey çevreden saygı görmektir. </li>
								<li>Daha duygulu ve heyecanlıdırlar. </li>
								<li>Gruplarla uyumludurlar.</li>
								<li>Kendilerini ön plana çıkarmaya çalışmazlar. Başka insanların katkılarındaki değeri görme konusunda oldukça yeteneklidirler. </li>
								<li>Uyumlu ilişkilere çok değer verirler. </li>
								<li>Başka insanların hislerine karşı duyarlıdırlar.</li>
								<li>Çok hareketli ortamları sevmezler. İnce ve düşündürücü espiri  anlayışına sahiptirler. Kendileriyle barışıktırlar.</li>
								<li>Çok rahattırlar. Çatışmadan çok çekinirler.</li>
								<li>Doğal arabulucudurlar. </li>
								<li>Çok sabırlıdırlar. İçlerinde fırtınalar koparken dışarıdan sakin görünebilirler. Kimseyi kırmak istemezler.</li>
							</ul>


						</div>

					<?php

				}elseif($indis==5){
					?>
						<script type="text/javascript">
							$(".orta_kisim").css("background-color","#1987ff");
						</script>
						<div >
							<span>Karakteriniz:<span style="color:white;" >Mavi</span></span>
							<p>Karakterinizin Özellikleri</p>

							<ul>
								<li>Mükemmeliyetçidirler. Duruşları, kıyafetleri ve her şeyleriyle çok düzenlidirler. Her şeyleri uyum içinde görünür.</li>
								<li>Kurallara çok bağlıdırlar. Çalışma ortamları tam anlamıyla mükemmel ve profesyoneldir. </li>
								<li>Her şeyleri planlı ve programlıdır. Hassas insanlardır. </li>
								<li>Ayrıntılar konusunda titiz davranırlar. Çoğu zaman karar vermede büyük sıkıntılar yaşarlar. </li>
								<li>Genelde yalnızlıktan hoşlanırlar. Konuştuklarında ses tonları alçaktır. Konuşma hızları düşüktür.</li>
								<li>Duygularını açıkça ortaya koymazlar, mantık ağırlıklıdırlar. </li>
								<li>Heyecanları ve duyguları ölçülüdür.</li>
								<li>Bir olumsuzluk esnasında sakin ve akılcı olabilirler.</li>
								<li>Kuralcı olduklarından kolay kolay değişmek istemezler</li>
								<li>Daima tedbirlidirler</li>
								<li>Olayların olumsuz yönünü görüp kaygılanırlar.</li>
								<li>Detaycıdırlar.</li>
								<li>Meraklıdırlar, araştırmacıdırlar.</li>
								<li>Riskleri önceden görürler.</li>
								<li>Ciddi ve ağır başlıdırlar.</li>
								<li>Standartları yüksektir.</li>
								<li>Yeteneklidirler.</li>
							</ul>


						</div>

					<?php
				}
			?>
		</div>


	</div>

	<div style="text-align:center">
			<input class="btn btn-info" type="button" style="width:50%; border-radius:20px" value="Yeni Test" onClick="window.location.reload(false)" />

	</div>
