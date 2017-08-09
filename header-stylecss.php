<style type="text/css">
    body{
    	font-family:  "Microsoft YaHei" ;
      background-image: url(http://localhost/wp-content/uploads/2016/04/debut_light.png);
    }

    fieldset {
        border-width: 0;
        border-style: initial;
        border-color: initial;
        padding: 0
    }

    input, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em 0em 0em 0em;
    font: 13.3333px Arial;
    -webkit-appearance: button;
}
    input[type=search]{
      font-size: 1em;
      padding: .5em .65em;
      -webkit-appearance:none;
      border-radius: 0.3125em;
      border: 1px soild #0A2B66;
      border-right-width:0; 
    }

     input[type=search i]{
        padding: 1px;
        -webkit-appearance:searchfield;
    }

   a{
   	 text-decoration: none!important;
   }



/*----Font-size----*/


@media(min-width: 1800px){
  body{
    font-size: 14px;
  }
}

@media (min-width: 1200px) {
    body{
       font-size:11px;  
    }
}


/*----来不及可以就按这个分辨率----*/


/*----background CSS----*/
#subhead-background {
   padding: 2px;
   background: #18387d;
}

#nav-background {
   background: -webkit-linear-gradient(rgba(16,44,101,1), rgba(8,32,90,1)); /* Safari 5.1 - 6.0 */
   background: -o-linear-gradient(rgba(16,44,101,1), rgba(8,32,90,1)); /* Opera 11.1 - 12.0 */
   background: -moz-linear-gradient(rgba(16,44,101,1), rgba(8,32,90,1)); /* Firefox 3.6 - 15 */
   background: linear-gradient(rgba(16,44,101,1), rgba(8,32,90,1)); /* 标准的语法（必须放在最后） */

   z-index: 9;
  /* position: fixed;
   width: 100%;
   margin:0;*/    /*fixed banner*/
}

#News {

  background-color: transparent;
	height: 40em;
}

#Notice {
	background-color: transparent;
	height: 45em;
}

#Propaganda {
	background-color: transparent;
	height: 45em;
}



/*----center margin CSS----*/
	#center01 {
		max-width: 1600px;
		margin: auto;
		z-index: 9;
	}

	#center02 {
		max-width: 1600px;
		margin: auto;
	}



  @media (min-width: 1366px) {

  #center01 {
    max-width: 1100px;
    margin: auto;
    z-index: 9;
  }

  #center02 {
    max-width: 1100px;
    margin: auto;
  }

  .center03 {
    margin: auto;
    position: relative;
    top:22em;
    z-index: 5;
  }    
  }

  .center03 a{
   color: #fff;
  }



/*----Head CSS----*/

/*----subhead subnav CSS-----*/
.subhead {
	float: left;
    color:#fff;
    margin: 0;
    margin-left:-15px;  /*col-md-6 padding set-off */
    font-size: 1em;

}

.subhead a {
	display: block;
    color: #fff;
    text-decoration: none;
    -moz-transition: 0.2s, opacity, ease-in-out;
    -o-transition: 0.2s, opacity, ease-in-out;
    -webkit-transition: 0.2s, opacity, ease-in-out;
    transition: 0.2s, opacity, ease-in-out
}

.subhead a:hover,
.subhead a:focus {
    opacity: .7
}

.subhead .inline-list {
	padding: .5em;
    list-style-type:none;
}

.subhead .inline-list li {
    padding: 0 2em;
    border-right: 1px solid #3990E8;	
    float: left
}

.subhead .inline-list li:last-child {
    border-right: 0
}

/*----subhead searcch-form CSS----*/

.search-contain {
	float: right;
	color:#fff;	
	position:relative;
	margin: 0;
	margin-right:-15px;
	z-index: 13;
}

.search-form {
	margin: .2em 0;
	width: auto;
	box-sizing: border-box;
}

.field-style{
	position: absolute!important;
	color: #fff;
	padding: 0;
	border: 0;

}

.search-field{
	width: 20em;
	background-color: #f1f1f1;
	display: inline-block;
	float: left;

}

.search-submit {
    background: #235F9C;
    border: 1px solid #235F9C;
    border-radius: 0 0.25em 0.25em 0;
    font-size: 1em;
    padding: .5em .5em .4em;
    display: inline-block;
    float: left;
    cursor: pointer!important;
    -moz-transition: background,0.2s,ease-in-out;
    -o-transition: background,0.2s,ease-in-out;
    -webkit-transition: background,0.2s,ease-in-out;
    transition: background,0.2s,ease-in-out;
    position: absolute;
    right: 0;
    top: 3px;
    bottom: 3px;
}

.search-submit:hover {
    background: #102c49;
    cursor: pointer;
}

.search-submit .icon {
    color: #f1f1f1;
    cursor: pointer;
}




/*----subnav CSS----*/

.subnav{
	font-size: 1.4em!important;
    text-align: center;
    line-height:5.8em;

  
}
.subnav a{
	color: #64ace2!important;  
	-moz-transition: background,0.2s,ease-in-out;
    -o-transition: background,0.2s,ease-in-out;
    -webkit-transition: background,0.2s,ease-in-out;
    transition: background,0.2s,ease-in-out
}


.subnav a:hover{
	color: #fff!important;
}

.img01{
    position: absolute;
    left: 50%;
    margin-left: -8.4em;
    top:0;
    z-index:1; 
    height:6.474em;
    width:17.316em;
}

/*----Jum CSS----*/

#jum{
	position: relative;
  width: 100%;
  z-index: 0;
}

#jum a{
  color: #fff;
}

.jum-information{
  position: absolute;
  top: 25em;
  z-index: 11;
}

.word{
   background: -webkit-linear-gradient(left,rgba(37,37,37,0.7), rgba(0,0,0,0)); /* Safari 5.1 - 6.0 */
   background: -o-linear-gradient(left,rgba(37,37,37,0.7), rgba(0,0,0,0)); /* Opera 11.1 - 12.0 */
   background: -moz-linear-gradient(left,rgba(37,37,37,0.7), rgba(0,0,0,0)); /* Firefox 3.6 - 15 */
   background: linear-gradient(left,rgba(37,37,37,0.7), rgba(0,0,0,0)); /* 标准的语法（必须放在最后） */
   background-blend-mode: multiply;
   padding: 2em 0;
   padding-left: 1em;
   padding-top: 1em;
   width: 27em;
}

.word h1{
	font-size: 4em;
}


/*----Middle CSS----*/
.middle-set{
  padding:0 7em;

}
/*----News----*/
.new {
    overflow: hidden;
    width: 100%;
    margin-top: 35px;
}

.new ul{
  padding: 0em .5em;
}
.new h2,
.conL h2 {
    height: 42px;
    line-height: 35px;
    margin-bottom: 8px;
}
.newL {
    width: 308px;
    float: left;
    margin-right: 30px;
    margin-top: 15px;
    line-height: 18px;
    height: 300px;
    overflow: hidden;
}

.newL h3 {
    font-size: 15px;
    margin: 5px 0 5px;
}

.newL p {
    font-size: 8px;
    color: #787878;
    line-height: 20px!important;
}

.newL img {
    width: 308px;
    height: 173px;
}

.newR {
    margin-left: 14px;
    width: 270px;
    float: left;
}

.newR li {
    font-size: 14px;
    padding: 12px 12px 12px 12px;
    border-bottom: 1px solid #cdcdcd;
    overflow: hidden;
    display: block;
    height: 65px;
}

.newR li.last {
    border-bottom: none;
    text-align: right;
}

.newR li.last a.lastL {
    color: #041b6a;
    display: inline-block;
    width: 185px;
    text-align: left;
}


.newR li.last a.lastR {
    font-size: 18px;
    color: #041b6a;
    display: inline-block;
    width: 80px;
    text-align: right;
    background: url(../123456789/i/arrow.png) no-repeat right center;
    padding-right: 20px;
}

.newR li.last a:hover {
    text-decoration: underline;
}


/*----Second----*/
  .notice-set{
    margin-bottom: 1em!important;
  }

  .h3-div-set{
    display: inline-block;
    margin-left: .8em; 
  }
  .h3-set{
   color: #041b6a;
   letter-spacing: .1em;
   margin-top: -2px;
   font-size: 2.55em;
  }
  .h3-set-EN{
    font-size: 1.8em;
    letter-spacing: .1em;
    color: #041b6a;
    margin-top: -.2em;

  }
  .img04{
    width: 3.909em;
    height:3.636em;
    display: inline-block;
    vertical-align: top; 

  }

/*--*/
  .position-set{
    margin:3em 0 0 2em!important;
  }

  .position-set-last{
    margin:3em 0 0 2em!important;
  }

  .time-title{
    background-color: #fff;
    height: 8em;
  }  

  .position-set-last .time-title{
    margin-bottom: 2em;
  }

  .num-set{
    font-size: 3.3em;
    position: absolute;
    z-index: 3;
    top:.4em;
    left:.76em;
    color: #fff;
    letter-spacing: .05em;
  }

  .month-set{
    font-size: 1.4em;
     letter-spacing: .05em;
    color: #fff;
    position: absolute;
    z-index: 3;
    top:2.8em;
    left: 2.25em; 

  }

  .data-message{
    background-color: #fff;
    height: 8em;
    margin-right: 3em;
    margin-left: 1em;
    border-bottom: 1px solid #f7f7f7;

  }

  .position-set-last .data-message{
   margin-bottom: 2em;
   border: none;

  }

  .data-message .p1{
    font-size: 1.681em;
    color: #555;
  }

  .data-message .p2{
    display: block;
    margin-top: 2em;
    font-size: 0.955em;
    color: #bbb;
  }

  
  .bg01{
    background-color: #fff!important;
    margin-right: -4.5em;
    margin-top: 2.7em;
  }

  .img03{
   width: 5.938em;
   height: 6.563em;
  }

  /*-Academics-*/
  .aca-set{
    margin-left: 4.5em!important;
  }

  .img05{
    width: 2.929em;
    height: 3em;
    display: inline-block;
    vertical-align: top; 
  }
 
  .bg02{
    margin-top: 2.7em;
    margin-left: -4em;
  }

  .bg02 ul{
   list-style-type: none;
  }

  .bg02 li{
    display: block;
    height: 8em;
    background-color: #3867f0;
    margin-bottom: .3em;
    padding: 1.5em 4em 1.5em .8em;
  }

  .bg02 li:first-child {
    background-color: #53a6ff;
  }

  .bg02 li:last-child {
    background-color: #3b88fd;
  }

  .bg02 a{
    color: #fff;
    font-size: 1.4em;

  }

  .bg02 a:hover{
    text-decoration: underline!important;
  }

/*---Vedio----*/



/*----Bottom----*/
.Bottom {
	background-color:#0b255e;
	height: 26em;
  color: #fff;
  width: 100%;
  padding: 2.5em 0;
}

.Bottom p,.Bottom a{
  font-size: 1.3em;
  color: #fff;
}

#clear-background{
  background-color: transparent;
}

.bottom-width{
  width: 13em;
}

.manage{ 
  display: block;
  margin-top: .5em;
  width: 6em;
  background-color: #3b88fd;
  height: 3em;
  padding: 0.8em 2em;

}

.manage p{
  font-size:1em;
}

.img02{
  width: 15em;
  height: 15em;
}

.information{
  margin-top: 3em;
  padding: 1em 0;
  height: 4em;
  border-top: 1px solid #ddd;
  

}
.information a{
  color: #999;
}



</style>