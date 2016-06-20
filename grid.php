<?php

/**
 * About: 
 *      This File is Written for <Project>
 * 
 * Developer/Author: Muhammad Nasir Khan
 * Email: nasir@mgcc.ae
 * 
 */
?>
<style>
    /*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
        background: #333;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }

/*  GRID OF FOUR  */
.span_4_of_4 {
	width: 100%;
}
.span_3_of_4 {
	width: 74.6%;
}
.span_2_of_4 {
	width: 49.2%;
}
.span_1_of_4 {
	width: 23.8%;
}

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_1_of_4, .span_2_of_4, .span_3_of_4, .span_4_of_4 { width: 100%; }
}
</style>
<div class="section group">
	<div class="col span_1_of_4">
	1 of 4
	</div>
	<div class="col span_1_of_4">
	1 of 4
	</div>
	<div class="col span_1_of_4">
	1 of 4
	</div>
	<div class="col span_1_of_4">
	1 of 4
	</div>
</div>