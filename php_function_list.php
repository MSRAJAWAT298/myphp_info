<?php 
$get_defined_functions = get_defined_functions(true);
$internal_function = $get_defined_functions['internal'];
$key =array_search('_dyuweyrj4', $internal_function); 
unset($internal_function[$key]);
$key =array_search('_dyuweyrj4r', $internal_function); 
unset($internal_function[$key]);
$description['abs'] = 'Returns the absolute value of num. abs(int|float $num): int|float <br/>The absolute value of num. If the argument num is of type float, the return type is also float, otherwise it is int (as float usually has a bigger value range than int).';
// echo '<br>'.basename(__FILE__).' '.__LINE__.'<pre> $internal_function :: '; print_r($internal_function); echo '</pre>'; exit;
require_once('include/header.php');
?>
<body>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="data_table.css">
    <?php include 'include/navbar.php'; ?>
    <div class="container-fluid" id="main">
        <div class="row">
            <div class="col main mt-2">
                    <div class="card mb-4 font-weight-bold text-info">
                        <div class="card-header">PHP constant Information</div>
                        <div class="card-body"> 
                            <div class="datatable table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="bg-info">
                                        <tr>
                                            <th class="text-center">Sr.no#</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center" width="60%">Description</th>
                                            <th class="text-center">View Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($internal_function as $key=>$v) { ?>
                                            <tr>
                                                
                                                <td></td>
                                                <td><?php echo $v ?></td>
                                                <td><?php echo (!empty($description[$v]))?$description[$v]:''; ?></td>
                                                <td class="text-center"><a class="openpop" href="function_examples/<?php echo $v;?>.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                                <!--<td><a class="openpop" href="<?php //echo $v;?>.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>-->
                                            </tr>
                                        <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!--external link of js for data tables-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                aaSorting: [[1, "asc"]],
                "pageLength": 25,
                dom: 'Bfrtip',
                buttons: [
                    { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o" aria-hidden="true"></i>',"className": 'btn btn-danger btn-xs' },
                    { "extend": 'copyHtml5', "text":'<i class="fa fa-clone" aria-hidden="true"></i>',"className": 'btn btn-primary btn-xs' },
                    { "extend": 'excelHtml5', "text":'<i class="fa fa-file-excel-o" aria-hidden="true"></i>',"className": 'btn btn-info btn-xs' },
                    { "extend": 'print', "text":'<i class="fa fa-print" aria-hidden="true"></i>',"className": 'btn btn-success btn-xs' },
                    // { "extend": 'pageLength',"className": 'btn btn-success btn-xs' },
                ],
                "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                    $("td:first", nRow).html(iDisplayIndex +1);
                    return nRow;
                }
            });
            /**
             * open modal box ...
             */
            $('body').delegate('.openpop', 'click', function(e) {
                e.preventDefault();  
                var url = $(this).attr('href');
                $.get( url, function() {})
                .done(function() {
                    open_modal_box(url);
                })
                .fail(function() {
                    open_modal_box();
                });
            });
        });

        function open_modal_box(url="comingsoon/index.html"){
            $.fancybox.open({'src' : url,'type' : 'iframe'},{
                iframe : {
                    css : {
                        width : '100%',
                        height : '100%',
                    }
                }
            });
        }
    </script>
<?php require_once('include/footer.php') ?>
<!--https://rstudio.github.io/DT/003-tabletools-buttons.html-->