

<div class="bk1">



  <?php echo $this->Flash->render('auth'); ?>
  <?php echo $this->Form->create('StoreUser'); ?>
  <fieldset>
   <center>
    <div class="sample2oya">
      <span class="sample2"> CREATE　YOUR APPLICATION  </span>
    </div>
  </center>
  <input type="text" name="username">
  <input type="text" name="password">


</fieldset>
<?php echo $this->Form->end(__('Sign-In')); ?>

<a class="button" href="http://localhost/cakephp/StoreUser/logout">Sign-Up</a>


</div>















<style type="text/css">
  /* --- 背景が上下左右に動くのBOX定義 ------------------------ */
  .box {
    position   : relative;
    max-width  : 700px;                   /* 背景の大きさに変更 */
    height     : 200px;
    margin     : auto;
    background : #ffffff;
  }

  /* --- 背景が上下左右に動くの背景定義 ----------------------- */
  .box::before {
    display    : block;
    content    : "";
    position   : absolute;
    top        : 0;
    right      : 0;
    bottom     : 0;
    left       : 0;
    background-image : url(https://images.spot.im/v1/production/tzcqy18das8ktb6adnkp);  /* 使用する画像を指定 */
    animation  : bgAnime 15s linear infinite;
  }
  @keyframes bgAnime {
   0% { background-position: 0 0 }
   /* 使用する画像幅と画像高さのpxに変更ください */
   100% { background-position: 500px -332px }
 }




 　

 .sample2oya{
  background : #fff;
  padding    : 20px;
}
.sample2{
  display    : inline-block;
  font-size  : 160%;
  font-weight: bold;
  color      : #fff;
  animation  : sample2Anime 4s linear infinite alternate;
}
@keyframes sample2Anime{
 0% { text-shadow:  2px  2px 10px #fff ,
   -2px  2px 10px #fff ,
   2px -2px 10px #fff ,
   -2px -2px 10px #fff;}
   100% { text-shadow:  2px  2px 10px #777 ,
     -2px  2px 10px #777 ,
     2px -2px 10px #777 ,
     -2px -2px 10px #777;}
   }

/*
background*/
.bk1{

	background: black;
}

/*
registration button*/

.button {
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  padding: 9px 13px;
  border: 1px solid #a12727;
  border-radius: 7px;
  background: #ff4a4a;
  background: -webkit-gradient(linear, left top, left bottom, from(#ff4a4a), to(#992727));
  background: -moz-linear-gradient(top, #ff4a4a, #992727);
  background: linear-gradient(to bottom, #ff4a4a, #992727);
  -webkit-box-shadow: #ff5959 0px 0px 40px 0px;
  -moz-box-shadow: #ff5959 0px 0px 40px 0px;
  box-shadow: #ff5959 0px 0px 30px 0px;
  text-shadow: #591717 1px 1px 1px;
  font: normal normal normal 15px times new roman;
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase
}
.button:hover {
  background: #ff5959;
  background: -webkit-gradient(linear, left top, left bottom, from(#ff5959), to(#b62f2f));
  background: -moz-linear-gradient(top, #ff5959, #b62f2f);
  background: linear-gradient(to bottom, #ff5959, #b62f2f);
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase
}
.button:active {
  background: #982727;
  background: -webkit-gradient(linear, left top, left bottom, from(#982727), to(#982727));
  background: -moz-linear-gradient(top, #982727, #982727);
  background: linear-gradient(to bottom, #982727, #982727);
  text-transform: uppercase
}
.button:focus {
  text-transform: uppercase
}
.button:before{
 
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEyElEQVRIia2Va2xTZRjHf+fSrbRbYTh3010YY0Ecg8UoIETJ5APRDAYqfFliMqIJIpcgiSFZREOMH4xRol8MJCgYYzSBqENuMcIYlxmGLhtzA9Z1967b2q7t2p6257x+OGdQjSEu8UmenJw37/n/n///fc77KMwx6isoWFvI6ifmkyuniI1rxOaK8dC4tC//uBi7Ioy+MyJw6UOt8/PNV7/bntlYaMf+vxBc2F34vZgZFiI8JER4WIioV4jRy6Lv2JbeT2pZ98/98pwZhAAtaGUAZnxgy6F8yweVr7/73q8nXnE0pm9X567BgEQIdAMQJqHJjHPJBvXl3frRYPiwb895mgGUucI3rBDbyueHl0naFGS6QE+BHgM9DqkotgUlUnFWZEPbjd4vh2aIKtW5ZD1XREW3n4BZ3sNj06LkNqevc1mkqwXJfY7MhY+APQdSUUjFITlDdmGpMz9w1fjmlvaL8tlm9jUdbDi94/lHG1+rkVZvLJ5eoM2IaE8Av+nB32NtKetddparKmo8rpFy/4azsAhsDkjFTDUCpITv8WNnh76QTm7lcMPeXU04S028RIDkpJuhwUHP9NhQq7t/9OLxNtF6pg+PpTAXKFuaS+UbT7HjxSXUFpcX4Fi3E3TdKkmgjXexcc/pFWo0QRK/G2Tn/YJtOaWUL1xURo1RVpMKNtS9OsTw6Mi98KS35fadiYtHr9B6aZBb+8/z82CIQ++4vPsc2iBIDvPQdci021icS4l628c9ERxAyi4GYTxwRRZmE8uCjNxCyvMeq0A2KlbUTjdu3e412tu7Lqx7P/TSp9c5tHE56wsM/0rQTAJDgqk2ZAVZvTpMT8Q/QXZewCSQhNlbae1nPoRpkAx2yS9nTIUqzTdCsmteD7K2El0zwf3doA2AAmq3l2GfPxTK1vwuMB6AK2ngzKoxEKN38d0YJzxjdlzTC1Q9syZ/E8Y06EkI3QPNDzKkkhhqzCA4FdQGFwe6q8jKBRRThSxM/PtKdPQ+D972KKMaoa86+OhoA7X1dTnH5+dlOtD6IDaBeQAQ9cFIiEkVSPijuImPVWF4weEEuwMkG8hSWoPqiDxw1KgY4yLYtFp5u3yRrVJRk5C4a9prs0xLwEA/oevDeFSA8QjdqGxCFUAE9AikAFk2U5FAAtUFOTmw6klKEEkQCVNlpln4bMZuQ4ePlnAcnwrQ4eV3AUgq5u2kYlajGlZaa4qVkpVYf4ZhgRuQ6oTREVInOjgCGCrA5X7uxDRwuCwAmykTAWSlrSkWUfodLCwCDZLXwOeGZg9fn/2TFqztdI0x7AsTKivAhQ3ENPjbTVtzykBZDuSnkchpCjQQ/RBphUAcrvho2f8TB60STYKETnAihKfMRrUYg4luGBFEFZAjHuxON2QVQeZSkAsAO4gU6JMQvQPTg5AQ0Ozh1IEf2WsYeGcFzs6D1PQUbr2Lat8E9KfwHjjHTv8M8bfWsmtNEbX5fhxqG6jzQLE6mRREkhi3/PQcu8mR5k6+BUJpBj4YOCMxusaD1P8RpevN0+wYmOImYOw+RWuWnWV1VdSuKuHpXCcFGSpyWCPUO0HPD51c7vVyDfDxsOu+rppnP67npCODCv59lMqmObisdDDHiSgDGXP54L/EX5ztNQw3UOoSAAAAAElFTkSuQmCC") no-repeat left center transparent;
  background-size: 100% 100%;
}

</style>