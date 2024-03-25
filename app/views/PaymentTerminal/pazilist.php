
<style>
@font-face {
	font-family: 'dastnevis';
	src: url(/library/fonts/dastnevis.otf);
}
@font-face {
	font-family: 'samim';
	src: url(/library/fonts/samim.ttf);
}

* {
	direction: rtl ;
	font-family:samim;
}
body{
	margin: 0;
	background-color:#eeeff1;
}
</style><html lang='fa-IR'>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='icon' href='../../../../../files/logo.webp' alt='نیک پیلوگو' size='16x16'></link>
	<title>پذیرنده</title>
	<script src='/library/jquery/3.3.1.min.js'></script>
	<script src='/library/jquery/1.9.1.min.js'></script>
	<script src='/library/jquery/inputmask/3.1.62.js'></script>
</head>
<body>
<style>
		body{
		background-color: #f4f4f4;
	}

	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
	  color: #000;
	  opacity: 1; /* Firefox */
	}
	
	/*  ثبت نام پذیرنده جدید */
	.TableRow2{
		display:flex;
		margin: 5px 0;
	}

	.TableRow2 input,
	.TableRow2 select{
		width:48%;
	}
	
	.table_row_2_partition input,
	.table_row_2_partition select{
		width:100%;
	}
	
	#InscriptionSection{
		width: 100%;
		margin:20px auto;
	}


	.label{
		display:flex;
		flex-direction:column;
		width:100%;
		text-align:right;
		background-color:rgb(255, 255, 255);
		box-shadow: 5px 5px 5px #dcdcdc70;
		border-radius: 10px;
		margin-bottom:30px;
		padding: 20px 0;
		transition: 0.3s;
	}
	.LabelTitle{
		font-weight:900;
		margin:10px;
		font-size: 16px;
	}
	.label:hover{
		box-shadow: 10px 10px 20px gray;
	}
	
	.customselect{
		height: 97%;
		margin: 0 auto;
		display:flex;
		flex-direction:column;
	}
	.customselectsearch{
		display:flex;
		border: 1px solid #dee2e6;
		height: inherit;
		border-radius: 0.25rem;
	}
	.customselectsearch input{
		border:none;
		width: calc(100% - 24px);
		height: inherit;
		background-color:inherit;
		color:inherit;
	}
	.customselectsearch img{
		margin:auto 6px;
		width:8px;
		height:8px;
	}
	.customselectsearchlist{
		display:none;
		flex-direction:column;
		border: 1px solid #dee2e6;
		width: inherit;
		position: absolute;
		z-index: 2;
		color: black;
		background-color: white;
		top: 100%;
	}

	.customselectsearchlist span{
		display:flex;
	}
	.customselectsearchlist span p{
		font-size:16px;
		width: calc(100% - 32px);
		margin:2px auto;
	}
	.customselectsearchlist span input{
		width:14px;
		height:14px;
		margin: auto;
	}
	
	.VerifyButton{
		box-shadow: 0 4px 7px -1px rgb(0 0 0 / 11%), 0 2px 4px -1px rgb(0 0 0 / 7%);
		background-size: 150%;
		background-position-x: 25%;
		padding: 0;
		font-size: 14px;
		border-radius: 0.5rem;
		transition: all .15s ease-in;
		background-image: linear-gradient(310deg,#141727,#3a416f);
		border: 0;
		color: #fff;
		background-color: transparent;
	}
	.SubmitBtn{
		letter-spacing: -.025rem;
		box-shadow: 0 4px 7px -1px rgb(0 0 0 / 11%), 0 2px 4px -1px rgb(0 0 0 / 7%);
		background-size: 150%;
		background-position-x: 25%;
		width: 46%;
		padding: 0.75rem 1.5rem;
		font-size: 16px;
		border-radius: 0.5rem;
		transition: all .15s ease-in;
		background-image: linear-gradient(310deg,#141727,#3a416f);
		text-align: center;
		vertical-align: middle;
		display: inline-block;
		font-weight: 700;
		line-height: 1.4;
		cursor: pointer;
		border: 0;
		color: #fff;
		background-color: transparent;
		margin: 10px auto;
	}
	.SubmitBtn:active,
	.VerifyButton:active{
		background-color: #344767;
	}
	.SubmitBtn:hover,
	.VerifyButton:hover{
		background-color: #344767;
		border-color: #344767;
		box-shadow: 0 3px 5px -1px rgb(0 0 0 / 9%), 0 2px 3px -1px rgb(0 0 0 / 7%);
		transform: scale(1.02);
	}

	/* دیگر فرایند ها */ 
	.label input,
	.label select{
		font-size: .875rem;
		transition: all .15s ease-in-out;
		display: block;
		height: calc(2.75rem + 2px);
		padding: 0.625rem 0.75rem;
		font-size: 1rem;
		line-height: 1.5;
		color: #8898aa;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #dee2e6;
		border-radius: 0.25rem;
		box-shadow: 0 3px 2px rgb(233 236 239 / 5%);
		margin:0 auto;
	}

	/* راهنما */
	#HelpMenu{
		display:none;
	}
	
	/*دکمه بازگشت بالای صفحه*/
	#ReturnFormButton{
		border:none;
		background-color: transparent;
		width:36px;
		float: left;
		margin: 10px 5px;
		align-self: end;
	}
	
	/* بخش جدول ها */

	.search_div {
		width: inherit;
	}
	.table_row_2_partition{
		position: relative;
		width: 48%;
	}
	.table_row_2_partition label{
		color: #6200ee;
		right: 10px;
		top: -12px;
		background-color: #ffffff;
		position: absolute;
		padding: 0 5px;
	}

	
	.TableSection {
		box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
		display: flex;
		flex-direction: column;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid rgba(0,0,0,.125);
		border-radius: 1rem;
		text-decoration: none;
		margin: 10px auto;
		color: #344767;
		min-height: 110px;
	}
	.TableSection p{
		font-weight:900;
		margin:10px;
		font-size: 16px;
	}
	.TableSection table {
		text-align:center;
		width:100%;
		border-collapse: collapse;
	}

	.TableSection table td{
		border-top:1px solid #d3d3d3;
		height: 100%;
	}
	.TableSection table th{
		color: #a9a9a9;
		height: 45px;
	}
	.FunctionTh{
		min-width:40px;
	}

	.TableSection table input{
		font-size: 14px;
		background-color: transparent;
		border:none;
		text-align:inherit;
		width:100%;
		color:inherit;
		text-align:center;
	}


	.TableSection table tr:hover,
	#SearchList tr:hover{
		background-color: #ddd;
	}
		
	.InfomrationTable{
		box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid rgba(0,0,0,.125);
		border-radius: 1rem;
		color: #344767;
		border-collapse: collapse;
		width: 90%;
		margin:25px auto;
		padding: 25px 0;
	}
	
	.TablingInfo{
		display:flex;
		width: calc(100% - 60px);
		margin: 0 auto;
	}
	
	.TablingInfo table{
		border-collapse: collapse;
		width: 100%;
	}
	
	.InfomrationTable article{
		height: 60px;
		margin: 10 auto;
		width:100%;
		display:flex;
	}
	
	.InfomrationTable input,
	.InfomrationTable select{
		width:100%;
		background-color:transparent;
		border:none;
	}
	.InfomrationTable td,
	.InfomrationTable th{
		border-bottom: 1px solid #a7a7a7;
		width:25%;
		height: 40px;
	}
	.InfomrationTable th{
		color: #a7a7a7;
	}
	/* دکمه های عملیات در جداول */
	#functional_th_td{
		position:sticky;
		left:0;
		background-color: #fff;
	}
	#functional_th_td div{
		display:none;
		flex-direction: row-reverse;
		left: 100%;
		position: absolute;
		background-color: transparent;
		top: 0;
	}
	#functional_th_td form{
		display:flex;
		margin-block-end: 0;
	}
	#functional_th_td div p{
		text-align:center;
		margin:0 auto;
	}

	.more_button{
		border-radius: 6px;
		border: none;
		background-color: #333333;
		color: #ffffff;
		width: 100%;
	}
	.slidemenu_table{
	}
	.slidemenu_table a{
		border-radius: 6px;
		margin:1px 1px;
		width:100%;
		height: 100%;
		background-color: #333333;
		color: #ffffff;
	}
		
	.TitleInfo{
		width:calc(100% - 130px);
		margin-right:20px;
		font-size:16px;
		font-weight:900;
		
	}
	
	.ImageField{
		width: 28px;
		height: 28px;
		border-radius: 6px;
		margin: auto;
		display:flex;
	}

	.ImageField img{
		width:80%;
		margin: auto;
	}
	.Counter{
		border-radius:6px;
		margin: auto;
		font-size:16px;
		font-weight:900;
	}
	
	/* منو جستجو و فیلتر کردن */
	#SearchForm{
		display:flex;
		margin:0px auto;
	}
	#SearchForm article{
		width: 100%;
		display:flex;
		margin: 3px auto;
	}
	
	.search_div{
		display:flex;
		border-radius: 6px;
		background-color: white;
		position: relative;
		margin: 5px auto;
		padding: 10px 5px;
		box-shadow: 0 .25rem .375rem -.0625rem hsla(0,0%,8%,.12),0 .125rem .25rem -.0625rem hsla(0,0%,8%,.07)!important;
	}
	
	.search_div input,
	.search_div select,
	.search_div option{
		border:none;
		background-color:inherit;
		width: 100%;
		height: 32px;
		border-radius: 6px;
		box-shadow: 0 0 3px 1px #333333;
		outline-color: #333333;
	}
	.search_div select:focus,
	.search_div input:focus{
		box-shadow: 0 0 3px 1px purple;
		outline-color: purple;
	}
	
	.search_div label{
		font-size:12px;
		color: #333333;
		right: 10px;
		bottom: 33px;
		background-color: #ffffff;
		position: absolute;
		padding: 0 5px;
	}
	
	.search_div button{
		border:none;
		border-radius:8px;
		width:32px;
		height:32px;
		background-image:linear-gradient(310deg,#7928ca,#ff0080);
		box-shadow: 0 .25rem .375rem -.0625rem hsla(0,0%,8%,.12),0 .125rem .25rem -.0625rem hsla(0,0%,8%,.07)!important;
	}

	.search_div button img{
		width:90%;
	}

	/*دکه پیش فرض Icon */
	.IconButton{
		font-size:1rem;
		background-color:#ff9d17;
		border:none;
		width:30px;
		height:30px;
		padding: 1px;
		margin:0 auto;
		border-radius: 8px;
		box-shadow: 1px 1px 2px 1px gray;
		background-size: cover;
	}
	.IconButton img{
		width: 80%;
		height:80%;
		margin: auto;
	}
	
	/* منو های کلی*/
	#FunctionalMenu{
		display:flex;
		flex-direction:column;
		width: 90%;
		margin:50px auto;
	}
	#FunctionalMenu div{
		display:flex;
	}
	.classification{
		box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
		display: flex;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid rgba(0,0,0,.125);
		border-radius: 1rem;
		width: 280px;
		height: 80px;
		text-decoration: none;
		margin: 25px auto;
		color: #344767;
	}
	.classification button{
		border:none;
		border-radius:8px;
		width:48px;
		height:48px;
		background-image:linear-gradient(310deg,#7928ca,#ff0080);
		box-shadow: 0 .25rem .375rem -.0625rem hsla(0,0%,8%,.12),0 .125rem .25rem -.0625rem hsla(0,0%,8%,.07)!important;
		margin: auto 10px;
	}
	.classification img{
		width: 90%;
		margin: auto;
	}
	.classification p{
		margin: auto;
		width: calc(100% - 100px);
		font-size: 14px;
		font-weight: 900;
		text-align: center;
	}
	
	/*دکه پیش فرض ارسال */
	.SendButton{
		background-color:transparent;
		font-size:1rem;
		background-color:inherit;
		border:none;
		background-size: cover;
		width:30px;
		height:30px;
		padding: 1px;
		margin:0 auto;
	}

	/* جستجو گر پیشرفته */
	#TheUserSearcher {
		display:flex;
		flex-direction:column;
		width:100%;
	}
	#SpecialSearcher {
		transition: all .15s ease-in-out;
		display: block;
		height: calc(2.75rem + 2px);
		padding: 0.625rem 0.75rem;
		font-size: 1rem;
		line-height: 1.5;
		height: 100%;
		color: #344767;
		background-color: inherit;
		background-clip: padding-box;
		border: 1px solid #dee2e6;
		border-radius: 0.25rem;
		box-shadow: 0 3px 2px rgb(233 236 239 / 5%);
		margin: 0 auto;
	}
	#SearchList {
		list-style-type: none;
		padding: 0;
		margin: 0;
		height:100px;
		overflow-y: scroll;
		display:none;
		z-index: 10;
		position:relative;
		flex-direction:column;
		background-color: white;
		width: inherit;
	}
	
	#SearchList input{
		width:20px;
	}
	#SearchList td{
		font-size:16px;
		width:100%;
	}

	#SearchList tr {
		width: 100%;
	}

	.AcceptButton{
		background-image: linear-gradient(310deg,#17ad37,#98ec2d);
		color: white;
		padding: 0.55em 0.9em;
		font-size: 12px;
		font-weight: 900;
		line-height: 1;
		color: #fff;
		text-align: center;
		white-space: nowrap;
		vertical-align: baseline;
		border-radius: 0.45rem;
		border:none;
	}
	

	#MainSection{
		margin:0 auto;
		display: flex;
		flex-direction:column;
		background-color:inherit;
		width: 100%;
		height: calc(100vh - 64px);
		overflow-y: scroll;
	}
	
	
	
	#SpecialSearcher, #SpecialSearcher14{
		width:100%;
	}
	#SearchList, #SearchList14 {
		list-style-type: none;
		padding: 0;
		margin: 0;
		height:100px;
		overflow-y: scroll;
		display:none;
		z-index: 10;
		position:absolute;
		margin-top: 30px;
		background-color: white;
	}

	#SearchList tr, #SearchList tr14 :hover:not(.header) {
		background-color: #eee;
	}

	.search_partition{
		width:100%;
		display:flex;
		background-color: transparent;
	}
	.search_field{
		display:flex;
		width: 100%;
	}
	.search_field select{
		display:flex;
		width: 100%;
		background-color:white;
	}
	
	/* نمایان شدن فیلد ها */
	input:focus,
	select:focus{
		color: #8898aa;
		background-color: #fff;
		border-color: #5e72e4;
		outline: 0;
		box-shadow: 0 3px 9px rgb(50 50 9 / 0%), 3px 4px 8px rgb(94 114 228 / 10%);
	}

	/* جدول خود ساخته */
	.TableRow2,
	.TableRow4{
		display:flex;
		margin: 5px 0;
	}

	.Cadre{
		display:flex;
		flex-direction:column;
		width:95%;
		text-align:right;
		background-color:rgb(255, 255, 255);
		box-shadow: 5px 5px 5px #dcdcdc70;
		border-radius: 10px;
		margin:15px auto;
		padding: 20px 0;
		transition: 0.3s;
	}
	.CadreTitle{
		font-weight:900;
		margin:10px;
		font-size: 16px;
	}
	.Cadre:hover{
		box-shadow: 10px 10px 20px gray;
	}
	.Cadre input,
	.Cadre select{
		font-size: .875rem;
		transition: all .15s ease-in-out;
		height: calc(2.75rem + 2px);
		font-size: 1rem;
		line-height: 1.5;
		color: #8898aa;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #dee2e6;
		border-radius: 0.25rem;
		box-shadow: 0 3px 2px rgb(233 236 239 / 5%);
		margin:0 auto;
	}
	
	/* منو آبشاری در بخش ترمینال کارتخوان  */
	.drop_down_functional_menu{
		width:48px;
		top:5px;
		background-color: inherit;
		border: none;
		z-index:3;
		position: relative;
		color: #5a738e;
	}
	
	/* دکمه های جدول خود ساخته */
	.PagingButton{
		font-size: .875rem;
		transition: all .15s ease-in-out;
		height: calc(2.75rem + 2px);
		font-size: 1rem;
		line-height: 1.5;
		color: #F3F3F3;
		background-color: #333;
		background-clip: padding-box;
		border: none;
		border-radius: 0.25rem;
		box-shadow: 0 3px 2px rgb(233 236 239 / 5%);
		margin: 0 auto;
		width: 24%;
		font-weight:900;
	}
	/* دکمه های جدول خود ساخته 2*/
	#pagination{
		display:flex;
		margin: 5px auto;
	}
	#pagination button{
		border-radius: 6px;
		background-color: inherit;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 18px;
		font-size:16px;
		color: #333;
		margin: 0 2px;
		border:none;
		font-weight:900;
	}
	#pagination button:hover{
		text-decoration: underline;
		color: #444;
	}
	@media screen and (min-width:768px){
		/* بخش جدول ها */
		th{
			min-width: 130px;
		}
		.TableSection {
			width: 100%;
		}
		#SearchForm{
			flex-direction:row;
		}
		.LittleScreen{
			display:table-cell;
		}
		.MiddleScreen{
			display:table-cell;
		}
		#SearchForm article{
			flex-direction:row;
		}

		.TablingInfo{
			flex-direction: row;
		}
		/* منو های کلی */
		#FunctionalMenu div{
			flex-direction: row;
		}
		
		/* جدول خود ساخته*/
		.TableRow2 input,
		.TableRow2 select,
		.search_field,
		.VerifyButton{
			width:48%;
		}
		
		.table_row_2_partition .customselect,
		.table_row_2_partition input,
		.table_row_2_partition select{
			width:100%;
		}
		
		.TableRow2,
		.TableRow4{
			flex-direction: row;
		}
		
		.TableRow4 input,
		.TableRow4 select{
			width:24%;
		}

		.table_row_2_partition{
			width: 48%;
			margin: 4px auto;
		}
		.table_row_2_partition label{
			font-size: inherit;
		}
		
		.bigger_field_TableRow2{
			width:74% !important;
		}
		.VerifyButton{
			margin: 0 auto;
			padding: 0;
		}
		#UserSearcher {
			height: calc(2.75rem + 2px);
			width: 48%;
			margin: 0 auto;
		}
	}
	@media screen and (max-width:768px){
		/* بخش جدول ها */
		th{
			min-width: 90px;
		}
		.TableSection {
			width: 100%;
		}
		#SearchForm{
			flex-direction:column;
		}
		.LittleScreen{
			display:none;
		}
		.MiddleScreen{
			display:table-cell;
		}
		#SearchForm article{
			flex-direction:column;
		}

		.TablingInfo{
			flex-direction: column;
		}
		
		/* منو های کلی */
		#FunctionalMenu div{
			flex-direction: column;
		}
		
		/* جدول خود ساخته*/
		.TableRow2 input,
		.TableRow2 select,
		.search_field,
		.VerifyButton,
		.TableRow4 input,
		.bigger_field_TableRow2,
		.TableRow4 select{
			width:98%;
		}
		.TableRow2,
		.TableRow4{
			flex-direction: column;
		}
		
		.table_row_2_partition{
			width: 98%;
			margin: 4px auto;
		}

		.table_row_2_partition label{
			font-size: inherit;
		}
		
		.VerifyButton{
			margin: 0 auto;
			padding: 0;
		}
		#UserSearcher {
			height: calc(2.75rem + 2px);
			width: 48%;
			margin: 0 auto;
		}
	}
	@media screen and (max-width:440px){
		/* بخش جدول ها */
		th{
			min-width: 50px;
		}
		.TableSection {
			width: calc(100% - 10px);
		}
		#SearchForm{
			flex-direction:column;
		}
		.LittleScreen{
			display:none;
		}
		.MiddleScreen{
			display:none;
		}
		#SearchForm article{
			flex-direction:column;
		}

		.TablingInfo{
			flex-direction: column;
		}
		
		/* منو های کلی */
		#FunctionalMenu div{
			flex-direction: column;
		}
		
		/* جدول خود ساخته*/
		.TableRow2 .customselect,
		.TableRow2 input,
		.TableRow2 select,
		.search_field,
		.VerifyButton,
		.TableRow4 input,
		.bigger_field_TableRow2,
		.TableRow4 select{
			width:98%;
		}
		.TableRow2,
		.TableRow4{
			flex-direction: column;
		}

		.table_row_2_partition{
			width: 98%;
			margin: 12px auto;
		}

		.table_row_2_partition label{
			font-size: 12px;
		}
	
		.VerifyButton{
			margin: 10px auto 0 auto;
			padding: 5px 0px;
		}
		#UserSearcher {
			height: calc(2.75rem + 2px);
			width: 98%;
			margin: 0 auto;
		}
	}</style>
<style>

main{
	display:block;
	margin: 0 auto;
}
.navbar {
	overflow: hidden;
	background-color: #333333;
	color: #ffffff;
}
.light-mode .navbar{
	background-color: #333333;
	color: #ffffff;
}
.dark-mode .navbar{
	background-color: #fff;
	color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown1:hover .dropbtn {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
	float: none;
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.dropdown-content a:hover,
#navbar2_content div:hover
{
	background-color: #ddd;
}

.dropdown:hover .dropdown-content {
	display: block;
}


aside{
	background-image: linear-gradient(#161920, #617eaa);
	color:white;
	margin-left:5px;
}


.menuimg{
	border-radius: 10px;
	margin:5px auto;
	color: #1f1f1f;
	background-color: #fff;
	border:none;
	width:48px;
	height:48px;
	margin:10px auto;
	box-shadow: 0 0 10px 5px white;
	transition: 0.3s;
}
.menuimg:hover{
	color: #fff;
	background-color:white;
	width:72px;
	height:72px;
	box-shadow: 0 0 10px 5px white;
}

#NotificationCounter{
	top:2px;
	position:absolute;
	width:20px;
	height:20px;
	background-color:red;
	color:white;
	border-radius:20px;
	font-size:14px;
	text-align:center;
}

#navbar2{
	display:none;
	background-color: #f9f9f9;
	color: #000;
	position: absolute;
	width: 100%;
	z-index:9999;
	width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    left: 0;
}

#navbar2_content{
	float:left;
	flex-direction:column;
	width:160px;
	margin-right: auto;
	background-color: inherit;
	color:inherit;
	text-align:center;
}

#navbar2_content div{
	padding:8px 0;
	color:inherit;
}

#navbar2_content a{
	text-decoration:none;
	color:inherit;
}
#HeaderImage a img{
	display:flex;
	width:32px;
	height:32px;
}

#header_smallsize{
	flex-direction:column;
	width:100%;
	background-color: #333333;
	color: #ffffff;
}

.header_smallsize_topic{
	text-align: center;
	margin-top: 15px;
}

.header_smallsize_menu{
	text-align: center;
}

.header_smallsize_menu a{
	color: #ffffff;
	text-decoration: none;
}

#header_hamburger_button{
	flex-direction:column;
	width:32px;
	height:32px;
	margin:auto;
	float:right;
	padding: 12px 8px;
}
#header_hamburger_button div{
	width:30px;
	height:3px;
	margin-top:5px;
	background-color: #ffffff;
}

@media screen and (min-width:768px){
	#header_bigsize{
		display:block;
	}
	#header_smallsize{
		display:none;
	}
	#header_hamburger_button{
		display:none;
	}
}
@media screen and (max-width:768px){
	#header_bigsize{
		display:none;
	}
	#header_smallsize{
		display:none;
	}
	#header_hamburger_button{
		display:flex;
	}
}
@media screen and (max-width:440px){
	#header_bigsize{
		display:none;
	}
	#header_smallsize{
		display:none;
	}
	#header_hamburger_button{
		display:flex;
	}
}
</style>
<script>
/*
document.documentElement.classList.add("light-mode");
function ToggleTheme(){
	document.documentElement.classList.add("dark-mode");
}
*/
//console.log(localStorage.getItem("color-scheme"));
//console.log(window.matchMedia("(prefers-color-scheme:light)").matches);
//console.log(window.matchMedia("(prefers-color-scheme:dark)").matches);

function ToggleNavBarMenu(){
	var navbar2 = document.getElementById("navbar2");
	if(navbar2.style.display == 'flex'){
		navbar2.style.display = 'none';
	}else{
		navbar2.style.display = 'flex';
	}
}
function ToggleHeaderSideMenu(){
	var navbar2 = document.getElementById("header_smallsize");
	if(navbar2.style.display == 'flex'){
		navbar2.style.display = 'none';
	}else{
		navbar2.style.display = 'flex';
	}
}
</script>
<div class='navbar' >
			<div style='width:160px;display:flex;float:left;color: white;position:relative;height:55px;' onclick='ToggleNavBarMenu();' >
			<a style='display:none;width:32px;height:32px;margin:auto;' href='/membership/notification/'>
				<img style='width: 100%;margin-top: 5px;' src='/library/images/notification.webp'>
					<div id='NotificationCounter' >
					</div>
				</img>
			</a>
			<div style='width:calc(100% - 32px);height:32px;display:flex;margin:auto;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;'>
				<div style='margin: auto;' >admin admin</div>
			</div>
			<div style='width:32px;height:32px;margin:auto 5px;'>
									<img src='/library/images/user_logo_white.webp' style='width:30px;height:30px;'></img>
							</div>
		</div>
		<div id='HeaderImage' style='display:none;'>
			<a href='./?logout=on'>
				<img src='/library/images/logout_white.webp'></img>
			</a>
			<a href='/membership/notification/'>
				<img src='/library/images/notification.webp'>
					<div id='NotificationCounter' >
						اعلانات 
						(
							100+						)
					</div>
				</img>
			</a>
		</div>
	<div id='header_hamburger_button' style='' onclick='ToggleHeaderSideMenu();' >
		<div style=''></div>
		<div style=''></div>
		<div style=''></div>
	</div>
		<div id='header_bigsize'>
		<div class='dropdown'>
			<button class='dropbtn'>
				<a>منو عمومی</a>
				<i class='fa fa-caret-down'></i>
			</button>
			<div class='dropdown-content'>
				<div class='' id=''>
					<a href='/maintenance/external/paymentservice/'>تعمیرگاه سانیار سرویس</a>
				</div>
			</div>
		</div>
	<div class='dropdown'>
				<button class='dropbtn'>
					<a>منو</a>
					<i class='fa fa-caret-down'></i>
				</button><div class='dropdown-content'><div class='' id=''><a href='../../../../../'>منو</a></div></div><div class='dropdown-content'><div class='' id=''><a href='../../../../../membership/'>خانه</a><a href='../../../../../membership/profile/'>پروفایل</a><a href='../../../../../library/logout.php'>خروج</a><a href='../../../../../membership/bank/PaymentTerminal/V1/'>کارتخوان</a><a href='../../../../../membership/tool/sidebyside/'>چسباندن عکس کنار هم</a><a href='../../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Query/'>استعلام سریال </a><a href='../../../../../membership/bank/AutomaticTellerMachine/V1/'>خودپرداز</a><a href='../../../../../Bank/Registry/'>رجیستر پذیرنده</a><a href='../../../../../membership/bank/PaymentTerminal/Export/Terminal/Export/index.php?Acceptor=off'>خروجی ترمینال</a><a href='../../../../../membership/maintenance/'>تعمیرات کارتخوان</a></div></div></div>	</div>
</div>

<section id='navbar2' style=''>
	<div id='navbar2_content' style='' >
		<div>
			<a href='/membership/'>داشبورد</a>
		</div>
		<div>
			<a href='/membership/profile/'>پروفایل</a>
		</div>
		<div>
			<a style='' href='/membership/message/messenger/'>
				پیام ها 
				(
					0				)
			</a>
		</div>
		<div>
			<a style='' href='/membership/notification/'>
				اعلانات 
				(
					100+				)
			</a>
		</div>
					<div ><a href='/membership/admin/'>ادمین</a></div>
				<div ><a href='./?logout=on'>خروج</a></div>
	</div>
</section>

<section id='header_smallsize'>

				<div class='header_smallsize_topic'>
					<a>منو</a>
				</div>
			
				<div style='width:80%;height:1px;margin: 3px auto;background-color:#333333;'></div>
			
					<div class='header_smallsize_menu'>
						<a href='../../../../../' >منو</a>
					</div>
				
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/' >خانه</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/profile/' >پروفایل</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../library/logout.php' >خروج</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/bank/PaymentTerminal/V1/' >کارتخوان</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/tool/sidebyside/' >چسباندن عکس کنار هم</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/bank/PaymentTerminal/WebServices/Passargad/Query/' >استعلام سریال </a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/bank/AutomaticTellerMachine/V1/' >خودپرداز</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../Bank/Registry/' >رجیستر پذیرنده</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/bank/PaymentTerminal/Export/Terminal/Export/index.php?Acceptor=off' >خروجی ترمینال</a>
						</div>
					
						<div class='header_smallsize_menu'>
							<a href='../../../../../membership/maintenance/' >تعمیرات کارتخوان</a>
						</div>
					</section>
<main>
<style>
	main{
		display: flex;
	}

	.side_menu{
		overflow-y: auto;
		height:calc(100vh - 60px);
		display:flex;
		flex-direction:column;
		background-color: #333333;
		color: #ffffff;
		position: fixed;
		font-size: 14px;
	}
	.side_menu_topic{
		display:flex;
		width:90%;
		color:white;
		margin:1px auto;
		border-radius: 3px;
		text-decoration:none;
	}
	.side_menu_topic img{
		margin: auto 8px;
		width:26px;
		height:26px;
	}
	.side_menu_topic:hover{
		background-color:#484848;
	}
	
	@media screen and (min-width:768px){
		#MainSection{
			width: calc(100% - 240px);
			margin-right: 250px;
		}
		.side_menu{
			width:240px;
		}
		.side_menu_topic p{
			display:block;
		}
	}
	@media screen and (max-width:768px){
		#MainSection{
			width: calc(100% - 240px);
			margin-right: 250px;
		}
		.side_menu{
			width:240px;
		}
		.side_menu_topic p{
			display:block;
		}
	}
	@media screen and (max-width:440px){
		#MainSection{
			width: calc(100% - 50px);
			margin-right: 50px;
		}
		.side_menu{
			width:50px;
		}
		.side_menu_topic p{
			display:none;
		}
	}
</style>
<section class='side_menu'>
	<div style=''></div>
	<a class='side_menu_topic' style='background-color:inherit;'>
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/paqi_logo.png'></img>
		<p>منو کارتخوان</p>
	</a>
	<a style='width:90%;margin:10px auto;font-size:16px;text-decoration:none;color: white;text-align:center;border-bottom: 1px solid white;' href='#' ></a>
	<a href='/membership/bank/PaymentTerminal/' class='side_menu_topic' >
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/home.png'></img>
		<p>میزکار</p>
	</a>
	<a  href='/membership/bank/PaymentTerminal/V1/costumer/new/' class='side_menu_topic' >
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/new_acceptor.png'></img>
		<p>ثبت پذیرنده</p>
	</a>
			<a href='../../../../../membership/bank/PaymentTerminal/V1/terminal/new/?aWRjb2Rl=+1 (162) 777-5604' class='side_menu_topic' >
			<img src='/membership/bank/PaymentTerminal/V1/images/menu/new_terminal.png'></img>
			<p>ثبت ترمینال جدید</p>
		</a>
		<a href='/membership/bank/PaymentTerminal/V1/costumer/' class='side_menu_topic' >
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/acceptor.png'></img>
		<p>لیست پذیرنده ها</p>
	</a>
	<a href='/membership/bank/PaymentTerminal/V1/terminal/' class='side_menu_topic' >
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/pos.png'></img>
		<p>لیست پایانه ها</p>
	</a>
	<a href='/membership/bank/PaymentTerminal/V1/request/'  class='side_menu_topic' >
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/request.png'></img>
		<p>لیست درخواست ها</p>
	</a>
	<a href='/membership/bank/PaymentTerminal/V1/document/' class='side_menu_topic' >
		<img src='/membership/bank/PaymentTerminal/V1/images/menu/document.png'></img>
		<p>لیست بایگانی</p>
	</a>
			<a href='../../../../../membership/bank/PaymentTerminal/V1/costumer/view.php?aWRjb2Rl=+1 (162) 777-5604' class='side_menu_topic' >
			<img src='/membership/bank/PaymentTerminal/V1/images/menu/acceptor.png'></img>
			<p>اطلاعات پذیرنده</p>
		</a>
		<a href='../../../../../membership/bank/PaymentTerminal/V1/terminal/view.php?aWRjb2Rl=+1 (162) 777-5604' class='side_menu_topic' >
			<img src='/membership/bank/PaymentTerminal/V1/images/menu/terminal.png'></img>
			<p>سایر پایانه ها</p>
		</a>
		<a href='../../../../../membership/bank/PaymentTerminal/V1/request/view.php?aWRjb2Rl=+1 (162) 777-5604' class='side_menu_topic' >
			<img src='/membership/bank/PaymentTerminal/V1/images/menu/terminal.png'></img>
			<p>سایر درخواست ها</p>
		</a>
		<a href='../../../../../membership/bank/PaymentTerminal/V1/document/view.php?aWRjb2Rl=+1 (162) 777-5604' class='side_menu_topic' >
			<img src='/membership/bank/PaymentTerminal/V1/images/menu/document.png'></img>
			<p>سایر مدارک</p>
		</a>
	
</section>	<section id='MainSection'>
			<form style='display: none;' action='../costumer/view.php' id='CostumerView' method='GET'>
			<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
		</form>
		<form style='display: none;' action='../document/view.php' id='DocumentView' method='GET'>
			<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
		</form>
		<form style='display: none;' action='../request/view.php' id='RequestView' method='GET'>
			<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
		</form>
		<form style='display: none;' action='../terminal/view.php' id='TerminalView' method='GET'>
			<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
		</form>
		<form style='display: none;' action='../terminal/new/' id='terminal_new' method='GET'>
			<input style='display:none;' name='aWRjb2Rl' value='+1 (162) 777-5604'></input>
		</form>
		<form style='display: none;' action='delete.php' id='DeleteCostumer' method='POST'></form>
		<form action='edit/' method='GET' style='display:flex;flex-direction:column;width:100%;' enctype='multipart/form-data'>
			<article class='Cadre' style='color: #344767;'>
				<div style='display:flex;'>
					<p class='CadreTitle' style='width: calc(100% - 220px);' >اطلاعات شناسایی</p>
					<div style='display:flex;width:200px;'>
													<button class='SendButton' form='DeleteCostumer' name='sid' value="3811" style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
												<button class='SendButton' name='aWRjb2Rl' value="+1 (162) 777-5604" style="background-image:url('../../../../../library/images/edit.webp')"></button>
					</div>
				</div>
				<div class='TableRow4'>
					<button type='submit' class='PagingButton' name='c2lk' value='' form='TerminalView'>نمایش ترمینال</button>
					<button type='submit' class='PagingButton' name='c2lk' value='' form='RequestView'>نمایش درخواست</button>
					<button type='submit' class='PagingButton' name='c2lk' value='' form='DocumentView'>نمایش مدارک</button>
					<button type='submit' class='PagingButton' form='terminal_new'>پایانه جدید</button>
				</div>
				<div class='TableRow4'>
					<input value='تاریخ ثبت:'></input>
					<input value='1403-01-04'></input>
					<input value='نوع پذیرنده:'></input>
					<select name='kind' >
						<option value=''>انتخاب کنید</option><option value='1' selected>حقیقی</option><option value='2'>حقوقی</option>					</select>
				</div>
				<div class='TableRow4'>
					<input value='جنسیت:'></input>
					<select name='gender'>
					<option value=''>انتخاب کنید</option><option value='0' selected>مرد</option><option value='1'>زن</option>					</select>
					<input value='ملیت'></input>
					<select name='nationality' >
					<option value=''>انتخاب کنید</option><option value='0' selected>ایرانی</option><option value='1'>خارجی</option>					</select>
				</div>
				<div class='TableRow4'>
					<input value='نام:'></input>
					<input value='Xander Winters'></input>
					<input value='نام خانوادگی:'></input>
					<input value='Franklin'></input>
				</div>
				<div class='TableRow4'>
					<input value='نام پدر:'></input>
					<input value='Tyler Dean'></input>
					<input value='محل تولد'></input>
					<input value='Omnis ex assumenda o'></input>
				</div>
								<div class='TableRow4'>
					<input value='کد ملی:'></input>
					<input name='idcode' value='+1 (162) 777-5604'  maxlength='10' oninput='javascript: if (10 < this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' ></input>
					<input value='شماره شناسنامه'></input>
					<input name='oldidcode' value='4157677565' ></input>
				</div>
								<div class='TableRow4'>
					<input value='کشور:'></input>
										<select name='Country' >
						<option value='' >انتخاب کشور</option><option value='IR' >ایران</option><option value='AF' >افغانستان</option><option value='PK' >پاکستان</option><option value='TM' >ترکمسنتان</option><option value='SY' >سوریه</option><option value='IQ' >عراق</option><option value='LB' >لبنان</option><option value='CHI' >چین</option>					</select>
					<input value='تاریخ تولد'></input>
					<input id='birthday' class='birthday' name='birthday' value='10__/__/__' ></input>
				</div>
				<div class='TableRow4'>
					<input value='حرف شناسنامه'></input>
					<input value='9'></input>
					<input value='سریال شناسنامه:'></input>
					<input name='BirthCertificateSeries' value='466395' ></input>
				</div>
				<div class='TableRow4'>
					<input value='ردیف شناسنامه'></input>
					<input value='50'></input>
					<input value='کد پستی:'></input>
					<input value='7777777777'></input>
				</div>
				<div class='TableRow2'>
					<input style='width:24%;' value='نشانی:'></input>
					<input style='width:74%;' name='reason' value='Eius quia aspernatur in anim maiores accusantium laboris nemo in eu mollit corporis non fuga Voluptatibus quidem ea perspiciatis' placeholder='' ></input>
				</div>
			</article>
			<article class='Cadre' style='color: #344767;'>
				<div style='display:flex;'>
					<p class='CadreTitle' style='width: calc(100% - 220px);' >مشخصات فروشگاه</p>
					<div style='display:flex;width:200px;'>
													<button class='SendButton' form='DeleteCostumer' name='sid' value="3811" style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
												<button class='SendButton' name='aWRjb2Rl' value="+1 (162) 777-5604" style="background-image:url('../../../../../library/images/edit.webp')"></button>
					</div>
				</div>
				<div class='TableRow4'>
					<input value='نام فروشگاه:'></input>
					<input value='Elliott Ryan Co'></input>
					<input value='کد مالیاتی:'></input>
					<input value='8888888888'></input>
				</div>
				<div class='TableRow4'>
					<input value='شهر:'></input>
					<input value='دماوند'></input>
					<input value='استان'></input>
					<input value='تهران'></input>
				</div>
				<div class='TableRow4'>
					<input value='صنف:'></input>
					<input value='غلات و حبوبات'></input>
					<input value='کد صنف:'></input>
					<input value='54990002'></input>
				</div>
				<div class='TableRow4'>
					<input value='تلفن همراه:'></input>
					<input value='88888888888'></input>
					<input value='تلفن ثابت:'></input>
					<input value='021 88888888'></input>
					<input style='display:none;' value='فکس'></input>
					<input style='display:none;' value='021 88888888'></input>
				</div>
				<div class='TableRow2'>
					<input style='width:24%;' value='نشانی:'></input>
					<input style='width:74%;' name='reason' value='Eius quia aspernatur in anim maiores accusantium laboris nemo in eu mollit corporis non fuga Voluptatibus quidem ea perspiciatis' placeholder='' ></input>
				</div>
			</article>
										<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);' >مشخصات معرف نخست</p>
						<div style='display:flex;width:200px;'>
															<button class='SendButton' form='DeleteCostumer' name='sid' value="3811" style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
														<button class='SendButton' name='aWRjb2Rl' value="+1 (162) 777-5604" style="background-image:url('../../../../../library/images/edit.webp')"></button>
						</div>
					</div>
					<div class='TableRow4'>
						<input value='نام:'></input>
						<input value='Ahmed Clay'></input>
						<input value='نام خانوادگی:'></input>
						<input value='Tara Patterson'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی:'></input>
						<input value='Incidunt architecto'></input>
						<input value='نام پدر'></input>
						<input value='Duncan Booth'></input>
					</div>
					<div class='TableRow4'>
						<input value='تلفن ثابت' ></input>
						<input value='+1 (782) 58' maxlength='11' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
						<input value='تلفن همراه' ></input>
						<input value='Hic adipisc' maxlength='11' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason' value='Blanditiis aut amet' placeholder='' ></input>
					</div>
				</article>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);' >مشخصات معرف دوم</p>
						<div style='display:flex;width:200px;'>
															<button class='SendButton' form='DeleteCostumer' name='sid' value="3811" style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
														<button class='SendButton' name='aWRjb2Rl' value="+1 (162) 777-5604" style="background-image:url('../../../../../library/images/edit.webp')"></button>
						</div>
					</div>
					<div class='TableRow4'>
						<input value='نام:'></input>
						<input value='Jennifer Thornton'></input>
						<input value='نام خانوادگی:'></input>
						<input value='Lesley Burnett'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی:'></input>
						<input value='Obcaecati aperiam ni'></input>
						<input value='نام پدر'></input>
						<input value='Tatum Gross'></input>
					</div>
					<div class='TableRow4'>
						<input value='تلفن ثابت' ></input>
						<input value='+1 (296) 77' maxlength='11' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
						<input value='تلفن همراه' ></input>
						<input value='Harum obcae' maxlength='11' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason' value='Laborum Et dolores ' placeholder='' ></input>
					</div>
				</article>
				<article class='Cadre' style='color: #344767;'>
					<div style='display:flex;'>
						<p class='CadreTitle' style='width: calc(100% - 220px);' >مشخصات معرف سوم</p>
						<div style='display:flex;width:200px;'>
															<button class='SendButton' form='DeleteCostumer' name='sid' value="3811" style="background-image:url('../../../../../library/images/red_cross.webp')"></button>
														<button class='SendButton' name='aWRjb2Rl' value="+1 (162) 777-5604" style="background-image:url('../../../../../library/images/edit.webp')"></button>
						</div>
					</div>
					<div class='TableRow4'>
						<input value='نام:'></input>
						<input value='undefined'></input>
						<input value='نام خانوادگی:'></input>
						<input value='undefined'></input>
					</div>
					<div class='TableRow4'>
						<input value='کد ملی:'></input>
						<input value='undefined'></input>
						<input value='نام پدر'></input>
						<input value='undefined'></input>
					</div>
					<div class='TableRow4'>
						<input value='تلفن ثابت' ></input>
						<input value='undefined' maxlength='11' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
						<input value='تلفن همراه' ></input>
						<input value='undefined' maxlength='11' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></input>
					</div>
					<div class='TableRow2'>
						<input style='width:24%;' value='نشانی:'></input>
						<input style='width:74%;' name='reason' value='undefined' placeholder='' ></input>
					</div>
				</article>
						</table>
		</form>
	</section>
</main>
</body>
</html>