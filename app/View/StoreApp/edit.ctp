


<a class="button" href="/cakephp/StoreApp/list/" style="text-decoration:none;">LIST</a>

<ul class ="information">

	


<form action="" method="post"> 


		<table>
			<tr>
				<td><p class="title">APP NAME</p>
					

					<div class="box21">
						<input name="input_appname" value="<?php echo $app['StoreApp']['app_name']; ?> "type="text">
					</div>

				</div>




			</td>

			<td>
				<p class ="title2">Discription<p>
					<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
						<textarea name="description" rows="10" cols="50" wrap="hard" class="size"  type="text"><?php echo $app['StoreApp']['app_description'] ?>
							</textarea>

					</div>

				</td>
				<td>
					<br>
					<input type= "submit" value="update">
					<br>
				

					<br>
					<br>	
					<a class="deletebutton"	 style="text-decoration:none;"href="/cakephp/StoreApp/delete?id=<?php echo $app['StoreApp']['id']; ?>">delete</a>
					
					<td>

					</td>
				</td>


				</form>
			</tr>
		</ul>
	</table>



</div>


<style>
.deletebutton{

	 display       : inline-block;
  border-radius : 5%;          /* 角丸       */
  font-size     : 13pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 8px 20px;   /* 余白       */
  background    : rgba(234, 61, 94, 0.75);     /* 背景色     */
  color         : black;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  font-family: "Times New Roman", Times, serif;

}
.button {
  display       : inline-block;
  border-radius : 5%;          /* 角丸       */
  font-size     : 12pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 8px 18px;   /* 余白       */
  background    : rgba(26, 26, 255, 0.75);     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
  border        : 2px solid rgba(26, 26, 255, 0.75);    /* 枠の指定 */
}
.button:hover {
  box-shadow    : none;        /* カーソル時の影消去 */
  color         : rgba(26, 26, 255, 0.75);     /* 背景色     */
  background    : #ffffff;     /* 文字色     */
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
	color          : #333;               /* 文字色                */
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
	color: #FFF;
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

	  	color:#989595;
	  }

	  .title2{

	  	color:#989595;
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



/*.app{
 margin: 20px;
  padding: 20px;
  float:left;
  width: 150px;
	}

	.detail{
 margin: 20px;
  padding: 20px;
  width: 300px;
    float:left;

	}
	.icon{
 margin: 20px;
  padding: 20px;
  width: 200px;
    float:left;

    }*/



</style>