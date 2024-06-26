<?php 
    require_once 'header-up.php';
?>
    <title>ابزار ترکیب عکس</title>
    <meta http-equiv="cache-control" content="no-cache">
    </meta>
    <?php 
    require_once 'header.php';
?>
<style>
			#SideBySideForm{
			background-color: #333;
		}
		#section{
			color: #fff;
		}
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
	}	*{
		font-family: vazir;
	}
	#section{
		width:80%;
		margin:150px auto;
		display: flex;
		flex-direction:column;
	}
	#SideBySideForm{
		width:300px;
		display:flex;
		flex-direction:column;
		margin:0 auto;
		height:520px;
		box-shadow:0px 2px 3px 0 black;
	}
	#SideBySideForm img{
		width:128px;
		margin:60px auto;
	}
	#SideBySideForm label{
		font-size:14px;
		width:60px;
		margin-right: 15px;
		background-color: #26a49a;
		box-shadow:0px 1px 2px 0 #26a49a;
		padding:3px 6px;
		margin-bottom: 6px;
		border-radius: 3px;
	}
	#SideBySideForm input{
		width:90%;
		margin:0 auto;
		margin-bottom:50px;
	}
	#SideBySideForm button{
		margin:50px auto 0 auto;
		width:90%;
		background-color: #26a49a;
		color:white;
		border:none;
		box-shadow:0px 1px 2px 0 #26a49a;
		transition: 0.4s;
		padding: 8px 0;
		font-weight:900;
		font-size: 14px;
	}
	#SideBySideForm button:hover{
		color: #26a49a;
		background-color: white;
	}
</style>
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
    <main>
        <section id='section' style=''>
            <form id='SideBySideForm' name='SideBySideForm' enctype='multipart/form-data'>
                <img src='<?= ROOT_URL; ?>public/assets/img/logu.webp'></img>
                <label>
                    عکس اول
                </label>
                <input type='file' name='fileid11' id='fileid11'></input>
                <label>
                    عکس دوم
                </label>
                <input type='file' name='fileid21' id='fileid21'></input>
                <button class='SubmitBtn' type='submit' name='submit1'>عملیات</button>
            </form>
        </section>
        <section class='result'>

        </section>
    </main>
</body>
<script>
    //ارسال متغیر های مختلف
    $(document).ready(function (e) {
        $("#SideBySideForm").on('submit', (function (e) {
            e.preventDefault();
            var presenteraddress = $('#presenteraddress').val();
            var fileid11 = $('#fileid11').val();
            var fileid21 = $('#fileid21').val();
            // Attach file
            var formData = new FormData(this);
            formData.append('fileid11', fileid11);
            formData.append('fileid21', fileid21);
            $.ajax({
                url: "modify.php",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $(".result").html(data);
                }//,
                //	error: function() 
                //	{
                //	} 	        
            });
        }));
    });
</script>

</html> 
   <script src="./js/main.js"></script>