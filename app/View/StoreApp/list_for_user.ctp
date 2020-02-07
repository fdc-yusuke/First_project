
<div id ="content">
	<div class = "app">

	</div>
	
	</div>
	<center>
		
	</center>
</div>


<div class="box">
  <div class="bgImg src1"></div>
  <div class="bgImg src2"></div>
  <div class="bgImg src3"></div>
  <div class="bgImg src4"></div>
	
	</div>


<a class="btn1" href="http://localhost/cakephp/StoreUser/login"><span>Create an app</span><span>Click</span></a>

		
	
	
	<?php foreach($storeapp as $app): ?>


		<table>
			<tr>
				<td><p class="title">APP NAME</p>
					

					<div class="box21">
						<p><?php echo $app['StoreApp']['app_name']; ?></p>
					</div>

				</div>




			</td>

			<td>
				<p class ="title2">Discription<p>
					<div style="padding: 10px; margin-bottom: 100px; border: 1px solid #333333; border-radius: 10px;  color: white;">
						<?php echo $app['StoreApp']['app_description']; ?>
					</div>

				</td>
				<td>
					<br>
					<br>
					<a class="btn" href="https://www.apple.com/jp/ios/app-store/"><span>Download</span><span>Click</span></a>

				</td>
			</tr>
		</ul>
	</table>

<?php endforeach; ?>


<?php 
// ページネーションの表示
echo $this->Paginator -> numbers (); ?>
</div>


<style>

	.btn1 {
		 border-radius : 20%;        /* 角丸       */
  display: inline-block;           /* 改行なしのブロック要素 */
  position: relative;              /* 相対位置指定 */
  width: 180px;                    /* 横幅 */
  height: 50px;                    /* 高さ */
  text-align: center;              /* 水平方向は中央揃え */
  line-height: 56px;               /* 行の高さ */
  
}
.btn1 span {
  display: block;                  /* ブロック要素 */
  position: absolute;              /* 親要素の左上を基準位置 */
  width: 100%;                     /* 横幅 */
  height: 100%;                    /* 高さ */
  border: 2px solid #333;          /* 罫線 */
  transform-style: preserve-3d;    /* 重なりを3Dで表示 */
  transition: 0.5s;   /* 変化時間 */
}
.btn1 span:nth-child(1) {
  background-color: #cccccc;   /* Buttonボタンの色 */
  color: #000000;          /* Buttonの文字の色 */
  transform: rotateX(0deg);        /* 横軸の回転なし */
  transform-origin: 0 50%  -30px;  /* transformの起点 */

    border-radius : 5%;        /* 角丸       */
}
.btn1 span:nth-child(2) {
  background-color: #007fff;   /* Clickボタンの色 */
  color: #ffffff;          /* Clickの文字の色 */
  transform: rotateX(90deg);       /* 横軸で90度回転 */
  transform-origin: 0 50%  -30px;  /* transformの起点 */
}
.btn1:hover span:nth-child(1) {
  transform: rotateX(-90deg);      /* 横軸で前方に90度回転 */
}
.btn1:hover span:nth-child(2) {
  transform: rotateX(0deg);        /* 横軸の回転なし */
}






.btn {
  display: inline-block;           /* 改行なしのブロック要素 */
  position: relative;              /* 相対位置指定 */
  width: 200px;                    /* 横幅 */
  height: 60px;                    /* 高さ */
  text-align: center;              /* 水平方向は中央揃え */
  line-height: 56px;               /* 行の高さ */
}
.btn span {
  display: block;                  /* ブロック要素 */
  position: absolute;              /* 親要素の左上を基準位置 */
  width: 80%;                     /* 横幅 */
  height: 80%;                    /* 高さ */
  border: 2px solid #333;          /* 罫線 */
  transform-style: preserve-3d;    /* 重なりを3Dで表示 */
  transition: 0.5s;   /* 変化時間 */
}
.btn span:nth-child(1) {
  background-color: #cccccc;   /* Buttonボタンの色 */
  color: #000000;          /* Buttonの文字の色 */
  transform: rotateX(0deg);        /* 横軸の回転なし */
  transform-origin: 0 50%  -30px;  /* transformの起点 */
}
.btn span:nth-child(2) {
  background-color: #ffb871;   /* Clickボタンの色 */
  color: #ffffff;          /* Clickの文字の色 */
  transform: rotateX(90deg);       /* 横軸で90度回転 */
  transform-origin: 0 50%  -30px;  /* transformの起点 */
}
.btn:hover span:nth-child(1) {
  transform: rotateX(-90deg);      /* 横軸で前方に90度回転 */
}
.btn:hover span:nth-child(2) {
  transform: rotateX(0deg);        /* 横軸の回転なし */
}

	.button2 {
		display       : inline-block;
		border-radius : 5%;          /* 角丸       */
		font-size     : 13pt;        /* 文字サイズ */
		text-align    : center;      /* 文字位置   */
		cursor        : pointer;     /* カーソル   */
		padding       : 4px 19px;   /* 余白       */
		background    : rgba(153, 153, 153, 0.51);     /* 背景色     */
		color         : #ffffff;     /* 文字色     */
		line-height   : 1em;         /* 1行の高さ  */
		transition    : .3s;         /* なめらか変化 */
		box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
		border        : 2px solid rgba(153, 153, 153, 0.51);    /* 枠の指定 */
	}
	.button2:hover {
		box-shadow    : none;        /* カーソル時の影消去 */
		color         : rgba(153, 153, 153, 0.51);     /* 背景色     */
		background    : #ffffff;     /* 文字色     */
	}
/*検索
*/

/* --- 検索全体のBOX (サンプル用)--- */
.searchArea{
	width          : 290px;              /* BOXの幅               */
	height         : 24px;               /* BOXの高さ             */
	margin         : auto;               /* サンプルを中心に寄せ  */
	letter-spacing : 0.1em;              /* 文字間隔              */
	font-weight    : bold;               /* 太字                  */
	line-height    : 0;                  /* 標準の行高さ          */
}

/* --- テキスト入力欄のSTYLE設定 --- */
.searchArea .searchText {
	display        : block;              /* ブロック化            */
	float          : left;               /* 横並び                */
	box-sizing     : border-box;         /* 枠線,余白を含んだ長さ */
	height         : 24px;               /* 入力の高さ            */
	width          : 170px;              /* 入力の幅              */
	margin         : 0;                  /* 外余白                */
	padding        : 0 12px;             /* 内余白                */
	border         : 2px solid #007fff;  /* 枠線　幅,実践,色      */
	border-radius  : 12px 0 0 12px;      /* 左上下の角丸          */
	color          : #ffffff;               /* 文字色                */
	outline        : 0;                  /* 入力の薄い枠を非表示  */
	font-size      : 12px;               /* フォントサイズ        */
}

/* --- 検索ボタン欄のSTYLE設定 --- */
.searchArea .searchButton {
	float          : left;               /* 横並び                */
	box-sizing     : border-box;         /* 枠線,余白を含んだ長さ */
	height         : 24px;               /* 入力の高さ            */
	margin         : 0;                  /* 外余白                */
	padding        : 6px 10px;           /* 内余白                */
	border         : none;               /* 枠線　幅,実践,色      */
	border-radius  : 0 12px 12px 0;      /* 右上下の角丸          */
	background     : #007fff;            /* ボタンの色            */
	color          : #fff;               /* 文字色                */
	cursor         : pointer;            /* カーソル設定          */
	line-height    : 12px;               /* 1行の高さ             */
	font-size      : 12px;               /* フォントサイズ        */
}

/* --- 検索ボタン欄にフォーカスか来たとき --- */
.searchArea .searchText:focus {
	background     : #cfe7ff;            /* フォーカス時の背景色  */
}

/* --- IEの入力エリア右側×消し -------------------------*/
.searchArea .searchText::-ms-clear {
	display        : none;               /* ×を消す              */
}





.box21{
	padding: 0.5em 1em;
	background: -moz-linear-gradient(#ffb03c, #ff708d);
	background: -webkit-linear-gradient(#ffb03c, #ff708d);
	background: linear-gradient(to right, #ffb03c, #ff708d);
	color: #ffffff;
	border-radius: 10px 10px 10px 10px;

}
.box21 p {
	margin: 0; 
	padding: 0;
}

	/*.information li{
  display: inline-block;
  }*/
/*
p{
	  color:white;

	  }*/

	  h3{
	  	color:blue;
	  }
	  .title{

	  	color: white;
	  }

	  .title2{
	  	color: white;
	  }
	  .information{
	  	color:white;
	  }

	  body { 

	  	width: 100%;
	  	height:100%;
	  	font-family: 'Open Sans', sans-serif;
	  	background: #092756;
	  	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	  	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	  	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	  	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	  	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	  	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
	  }





    /*image　トップ画像の写真
*/



/* --- 全体のBOX定義 ---------------------------------------- */
.box {
  position   : relative;
  max-width  : 10000px;
  height     : 370px;
  margin     : auto;
  overflow   : hidden;
}

/* --- 背景の指定 ------------------------------------------- */
.box .bgImg {
  position   : absolute;
  top        : 0;
  left       : 0;
  bottom     : 0;
  right      : 0;
  opacity    : 0;
  animation  : bgAnime 32s infinite;   /* 4画像 × 各8s = 32s */
}

/* --- 段差で背景画像のアニメーションを実行 ----------------- */
.box .src1 {
  background-image : url(https://lh3.googleusercontent.com/proxy/LL9Df5GbXCio9t4RkliNZmNpGwi8-TKD2mKhSDp3Lr2ERYQP1zHI1Y-4MTA5xO3C756cfnZ-7yitRXuxvSC3Hb0evq9xBzY764Hoz56XVdwkMtbPAVOkZqXCysNrkVStyWjJB0I);   /* 背景の画像を指定 */
}
.box .src2 {
  background-image : url(https://wpuploads.appadvice.com/wp-content/uploads/2010/11/app_sale2-642x550.png);   /* 背景の画像を指定 */
  animation-delay  : 8s;
}
.box .src3 {
  background-image : url(https://media.treehugger.com/assets/images/2011/10/iphone-apps.jpg);   /* 背景の画像を指定 */
  animation-delay  : 16s;
}
.box .src4 {
  background-image : url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSyawMigjmnrEVh4Yv17bGjqYR3beHHMI4W74OtlTbp6LiKgNXm);   /* 背景の画像を指定 */
  animation-delay  : 24s;
}

@keyframes bgAnime {
   0% { opacity: 0; transform: scale(1.0, 1.0); }
   1% { opacity: 1; transform: scale(1.0, 1.0); }
   5% { opacity: 1; transform: scale(1.0, 1.0); }
  21% { opacity: 1; transform: scale(1.4, 1.4); }
  25% { opacity: 1; transform: scale(1.4, 1.4); }
  26% { opacity: 0; }
 100% { opacity: 0; }
}



</style>