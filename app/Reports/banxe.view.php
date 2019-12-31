<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\inputs\DateRangePicker ;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Multiple Data Filters</h1>
        <p class="lead">
            The example demonstrate how to build dynamic reports with multiple data filters
        </p>
    </div>

    <form method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <b>Select Years</b>
                    <?php
                    DateRangePicker::create(array(
                        "name"=>"dateRange",
                        "format"=>"MMM Do, YYYY", //Jul 3rd, 2017
                        "ranges"=>array(
                            "Today"=>DateRangePicker::today(),
                            "Yesterday"=>DateRangePicker::yesterday(),
                            "Last 7 days"=>DateRangePicker::last7days(),
                            "Last 30 days"=>DateRangePicker::last30days(),
                            "This month"=>DateRangePicker::thisMonth(),
                            "Last month"=>DateRangePicker::lastMonth(),
                        )
                    ));
                    ?>
                </div>


                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("banxe"),
        "columns"=>array(
            "Số HD",
            "Số khung",
            "Tên khách hàng",
            "Giá bán",
            "Tổng thu",
        ),
        "grouping"=>array(
            "tongthu",
        ),
        "paging"=>array(
            "pageSize"=>25
        ),
        "cssClass"=>array(
            "table"=>"table-bordered"
        )
    ));
    ?>
</div>
