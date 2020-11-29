<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ใบสั่งซื้อ</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
<?php
include "component/head_script.php"
?>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>ใบสั่งซื้อ</a></h1>
		<form id="form_7492" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>ใบสั่งซื้อ</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_15" >
		<label class="description" for="element_15">ชื่อวัตถุมงคล </label>
		<div>
		<select class="element select large" id="element_15" name="element_15"> 
			<option value="" selected="selected"></option>
<option value="1" >เลือก</option>

		</select>
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">ราคา </label>
		<div>
			<input id="element_12" name="element_12" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">จำนวน </label>
		<div>
			<input id="element_13" name="element_13" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">ชื่อลูกค้า </label>
		<div>
		<select class="element select medium" id="element_16" name="element_16"> 
			<option value="" selected="selected"></option>
<option value="1" >First option</option>
<option value="2" >Second option</option>
<option value="3" >Third option</option>

		</select>
		</div> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Name </label>
		<span>
			<input id="element_14_1" name= "element_14_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_14_2" name= "element_14_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Date </label>
		<span>
			<input id="element_11_1" name="element_11_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_11_1">MM</label>
		</span>
		<span>
			<input id="element_11_2" name="element_11_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_11_2">DD</label>
		</span>
		<span>
	 		<input id="element_11_3" name="element_11_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_11_3">YYYY</label>
		</span>
	
		<span id="calendar_11">
			<img id="cal_img_11" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_11_3",
			baseField    : "element_11",
			displayArea  : "calendar_11",
			button		 : "cal_img_11",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="7492" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>

		</form>	
		
            <div class="row">
                <div class="col-12">
				<label class="description" for="element_3">รหัสใบสั่งซื้อ</label>
                    <div>
                        <input id="element_3" name="element_3" class="element text small" type="text" maxlength="255"
                            value="" />
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>รหัสวัตถุมงคล</th>
                                <th>ชื่อวัตถุมงคล</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อชิ้น</th>
                                <th>ราคารวม</th>


                            </tr>
                        </thead>
                        <tbody>

                            <!-- แท็ก php เชื่อม DB ตรงนี้ -->


                            <!-- ตัวอย่าง เชื่อม Base -->
                            <tr>
                                <td>
                                    <!-- <?//=$row['id']?> -->
                                </td>
                                <td>
                                    <!-- <?//=$row['name']?>/ -->
                                </td>
                                <td></td>
                                <td></td>


                                <td>
                                    <!-- <a class="btn btn-warning" href="edittype.php?id=<//?=$row['id']?>">
								<i class="far fa-edit"></i></a>

							</button> -->

                                    <!-- <button class="btn btn-primary" type="submit">Button</button>
							<input class="btn btn-primary" type="button" value="Input"> -->

                                </td>
                            </tr>



                        </tbody>
                        <div class="col-12">
                            <tbody>
                                <tr>
                                    <th>ยอดรวม</th>
                                    <th></th>

                                </tr>

                            </tbody>
                        </div>
                    </table>
                </div>

            </div>
        
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>