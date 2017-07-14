@extends('layouts.master')

@section('content')
<div class="container center_div">
    <h1>Daily Summary</h1>
   			
					    <table class="table table-striped" id='datatable_orders'> 
							    <thead>
							        <tr>
							            <th>#Id</th>
							            <th>Project Name</th>
							            <th>Employee</th>
							            <th>Start Time</th>
							            <th>End Time</th>
							        </tr>
							    </thead>
							    <tbody>
							       
							    </tbody>
					</table>
					</div>
<script type="text/javascript">

						$(document).ready(function(){
			
									// begin first table
                                        var userList_table = $('#datatable_orders').dataTable({
                                            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                                            "processing": false,
                                            "serverSide": true,
                                            "ajax": {
                                                'type': 'POST',
                                                'url': BASEURL + "allsummary",
                                                'data': function(params) {
                                                  //  params.jobs_categories = $("#jobs_categories").val();
                                                   // params.jobs_status = $("#jobs_status").val();
                                                }

                                            },
                                            "language": {
                                                "aria": {
                                                    "sortAscending": ": activate to sort column ascending",
                                                    "sortDescending": ": activate to sort column descending"
                                                },
                                                "emptyTable": "No record (s) available.",
                                                "info": "Found _START_ to _END_ of _TOTAL_ records",
                                                "infoEmpty": "No records found",
                                                "infoFiltered": "(filtered1 from _MAX_ total records)",
                                                "lengthMenu": "View _MENU_ records",
                                                "search": "Search:",
                                                "zeroRecords": "No matching records found",
                                                "paginate": {
                                                    "previous": "Prev",
                                                    "next": "Next",
                                                    "last": "Last",
                                                    "first": "First"
                                                },
                                            },
                                            "dom": "<'row'<'col-md-6 col-sm-12'><'col-md-6 col-sm-12'>r>t<'row'<'col-md-3 col-sm-12'l><'col-md-4 col-sm-12'i><'col-md-5 col-sm-12 text-right'p>>",
                                            "bStateSave": false, // save datatable state(pagination, sort, etc) in cookie.
                                            "columns": [
                                                {"data": "id", "name": "id", "searchable": true},
                                                {"data": "project_name", "name": "project_name", "searchable": true},
                                                {"data": "name", "name": "name"},
                                                {"data": "start_time", "name": "start_time"},
                                                {"data": "end_time", "name": "end_time"},
                                                // {"data": "job_status", "name": "job_status", "render": function(data, type, row) {
                                                        
                                                //         if (data == 1) { // Created
                                                //             $(".label-created").parent();
                                                //             return '<button class="btn btn-sm btn-info btn-block filter-submit margin-bottom" style="cusrsor: pointer;"> <i class="fa fa-external-link"></i> Open</button>';
                                                //         } else if (data == 3) { // In Processing
                                                //             $(".label-inreview").parent();
                                                //             return '<button class="btn btn-sm btn-primary btn-block filter-submit margin-bottom"> <i class="fa fa-cog"></i> In Process</button>';
                                                //         } else if (data == 5) { // Shipped
                                                //             $(".label-active").parent();
                                                //             return '<button class="btn btn-sm yellow btn-block filter-submit margin-bottom"> <i class="icon-pause"></i> Pause</button>';
                                                //         } else if (data == 4) { // Received
                                                //             $(".label-expired").parent();
                                                //             return '<button class="btn btn-sm btn-success btn-block filter-submit margin-bottom"> <i class="icon-check"></i> Complete</button>';
                                                //         } else if (data == 7) { // Cancled
                                                //             $(".label-cancelled").parent();
                                                //             return '<button class="btn btn-sm btn-danger btn-block filter-submit margin-bottom"> <i class="fa fa-close"></i> Cancelled</button>';
                                                //         }
                                                //     }
                                                // },
                                            ],
                                            
                                            ordering: true,
                                            "lengthMenu": [
                                                [10, 30, 50, -1],
                                                [10, 30, 50, "All"] // change per page values here
                                            ],
                                            // set the initial value
                                            "pageLength": 10,
                                            "pagingType": "bootstrap_full_number"
                                        });

	});

</script>
@stop
