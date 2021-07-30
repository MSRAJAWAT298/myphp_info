<?php
require_once 'db.php';
$get_defined_functions = get_defined_functions(true);
$internal_function = $get_defined_functions['internal'];
$key =array_search('_dyuweyrj4', $internal_function); 
unset($internal_function[$key]);
$key =array_search('_dyuweyrj4r', $internal_function); 
unset($internal_function[$key]);
sort($internal_function);
$tname = 'function_description';
$connectionObj = new db(); // OBJECT 
//===add case==//
if (isset($_POST['submit'])) {
    if ($_POST['function_name'] == "" || $_POST['details'] == "") {
        $error = "please fill the all fields<br><hr>";
    }else{
        $error = "";
        $edit_id = !empty($_POST['function_name'])?$_POST['function_name']:"";
        $array = array('function_name' => $_POST['function_name'],'function_description' => $_POST['details'],'function_applications' => htmlspecialchars($_POST['function_applications']));
        // echo '<br>'.basename(__FILE__).' '.__LINE__.'<pre> $array :: '; print_r($array); echo '</pre>'; exit;
        if($edit_id==""){
            $function_name = $_POST['function_name'];
            $con = " AND function_name  = '$function_name'";
            $data_arr = $connectionObj->select($tname, $con);

            if(!empty($data_arr)){
                $error = "Function already exist";
            }else{
            /**
             * Add case
             */
            $insert = $connectionObj->insertdata($tname, $array);
                if (isset($insert)) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Add Function succesfully!");';
                    echo 'window.location.href="http://www.myphpinfo.mayank.kushwah.opsusers7.com/add_function_description.php";';
                    echo '</script>';
                }
            }
        }else{
            /**
             * Update case
             */
            $con = " AND function_name = '{$edit_id}'";
            $update = $connectionObj->update($tname, $array, $con);
            if (isset($update)) {
                echo '<script type="text/javascript">';
                echo 'alert("Update succesfully!");';
                echo 'window.location.href="http://www.myphpinfo.mayank.kushwah.opsusers7.com/php_function_list.php";';
                echo '</script>';
            }
        }
        
    }
}
/**
 * Edit Case
 */

if (isset($_GET['edit_function'])) { //check edit button is click or not
    $con = " AND function_name = '{$_GET['edit_function']}'";
    $edit = $connectionObj->select($tname, $con);
    $function_name = $edit[0]['function_name'];
    $function_desc = $edit[0]['function_description'];
    $function_applications = html_entity_decode($edit[0]['function_applications']);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/select2.css">
    <!--Include the JS & CSS-->
<link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
<script type="text/javascript" src="/richtexteditor/rte.js"></script>
<script type="text/javascript" src='/richtexteditor/all_plugins.js'></script>
</head>
<body>
<?php include 'include/navbar.php';?>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col main pt-5 mt-3">
                <span class="font-weight-bold text-info">
                    <div class="card mb-4">
                        <div class="card-header"><?php echo (empty($_GET['edit_function']))?"Add Function Information": "Edit Function Information" ; ?></div>
                        <div class="card-body">
						<div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col main mt-3">
              <span class="font-weight-bold text-danger"><?php if (!empty($error)) echo $error; ?></span>
                <div class="col-lg-2 ml-auto">
                    <a class="nav-link btn btn-outline-light bg-info  border" href="php_function_list.php">View all Functions</a>
                </div>
                <form class="font-weight-bold" method="POST" id="myForm" action="" autocomplete="on">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mt-2">
                            <?php 
                            if(isset($_GET['edit_function'])){
                                echo <<<HTML
                                <input class="form-control" type="text" name="function_name" value="$function_name" readonly>
HTML;
                            }else{?>
                            <label for="name">Select Function Name:</label>
                            <select class=" form-control rounded select2" name="function_name" id="function_name" required>
                                <option value="">---Select function---</option>
                            <?php foreach($internal_function as $key=>$value){?>
                                <option value="<?php echo $value; ?>" <?php if($function_name==$value) echo 'selected' ?>><?php echo $value ?></option>
                            <?php } ?>
                            </select>
                            <?php
                            }
                            ?>    
                                <span class="text-danger" id="error1"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2">
                                <input type="submit" id="submit" class="btn btn-success" name="submit" value="<?php echo (empty($_GET['edit_function']))?"Add Function Details": "Edit Function Details" ; ?>">
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Enter Function Descriptions:</label>
                                <textarea  class="form-control" rows="5" id="details" name="details" placeholder="Enter Function Description " required><?php if (!empty($function_desc)) echo $function_desc; ?></textarea>
                                <span class="text-danger" id="error_details"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="appications">Enter Function Applications:</label>
                            <textarea class="form-group" id="div_editor1" name="function_applications">
                                <?php echo (isset($_GET['edit_function']) && $function_applications!='')?$function_applications:'<p>Enter Functions Uses...</p>' ;?>
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/select2.js"></script>
    <script>
	var editor1 = new RichTextEditor("#div_editor1");
	//editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
</script>
    <script>
            $(document).ready(function () {
                //Select2
                $(".select2").select2({
                    maximumSelectionLength: 2,
                });
            });
        </script>
	<?php include 'footer.php';?>
</body>

</html>