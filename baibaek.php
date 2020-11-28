<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OrderEmp</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
    <script type="text/javascript" src="calendar.js"></script>
    <?php
 include "component/head_script.php"
?>

</head>

<body id="main_body">

    <img id="top" src="top.png" alt="">
    <div id="form_container">


        <form id="form_7683" class="appnitro" method="post" action="">
            <div class="form_description">
                <h2>ใบเบิกวัตถุมงคล</h2>

            </div>
            <ul>
                <li id="li_3">
                    <label class="description" for="element_3">รหัสลูกค้า </label>
                    <div>
                        <input id="element_3" name="element_3" class="element text small" type="text" maxlength="255"
                            value="" />
                    </div>
                </li>
                <li id="li_4">
                    <label class="description" for="element_4">ชื่อวัตถุมงคล </label>
                    <div>
                        <select class="element select small" id="element_4" name="element_4">
                            <option value="" selected="selected"></option>

                        </select>
                    </div>

                <li id="li_3">
                    <label class="description" for="element_3">จำนวน </label>
                    <div>
                        <input id="element_3" name="element_3" class="element text small" type="text" maxlength="255"
                            value="" />
                    </div>
                <li id="li_2">
                    <label class="description" for="element_2">วันเบิกวัตถุมงคล </label>
                    <span>
                        <input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value=""
                            type="text"> /
                        <label for="element_2_1">MM</label>
                    </span>
                    <span>
                        <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value=""
                            type="text"> /
                        <label for="element_2_2">DD</label>
                    </span>
                    <span>
                        <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value=""
                            type="text">
                        <label for="element_2_3">YYYY</label>
                    </span>

                    <span id="calendar_2">
                        <img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">
                    </span>
                    <script type="text/javascript">
                    Calendar.setup({
                        inputField: "element_2_3",
                        baseField: "element_2",
                        displayArea: "calendar_2",
                        button: "cal_img_2",
                        ifFormat: "%B %e, %Y",
                        onSelect: selectDate
                    });
                    </script>

                </li>
                </li>
                </li>
                </li>

               
                <div class="form-group">
                    <label class="description" for="textarea">ที่อยู่สำหรับจัดส่ง</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>


                <li class="buttons">
                    <input type="hidden" name="form_id" value="7683" />

                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                </li>
            </ul>
        </form>
        <div id="footer">
            <div class="row">
                <div class="col-12">
                <label class="description" for="element_3">รหัสใบเบิกวัตถุมลคล</label>
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
                                <th>หมายเหตุ</th>


                            </tr>
                        </thead>
                        <tbody>

                            <!-- แท็ก php เชื่อม DB ตรงนี้ -->


                            <!-- ตัวอย่าง เชื่อม Base -->
                            <tr>
                                <td>
                                    <?//=$row['id']?>
                                </td>
                                <td>
                                    <?//=$row['name']?>
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
                                    <th>ยอดเบิกรวม</th>
                                    <th></th>

                                </tr>

                            </tbody>
                        </div>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <img id="bottom" src="bottom.png" alt="">

</body>

</html>