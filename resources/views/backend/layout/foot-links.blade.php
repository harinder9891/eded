<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQuery js-->
<script src={{ asset('common/admin/assets/js/jquery-3.2.1.min.js') }}></script>

<!-- Bootstrap js -->
<script src={{ asset("common/admin/assets/plugins/bootstrap-4.3.1/js/popper.min.js") }}></script>
<script src={{ asset("common/admin/assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js") }}>
</script>

<!--JQuery Sparkline Js-->
<script src={{ asset("common/admin/assets/js/jquery.sparkline.min.js") }}></script>

<!-- Circle Progress Js-->
<script src={{ asset("common/admin/assets/js/circle-progress.min.js") }}></script>

<!-- Star Rating Js-->
<script src={{ asset("common/admin/assets/plugins/rating/jquery.rating-stars.js") }}></script>

<!-- Fullside-menu Js-->
<script src={{ asset("common/admin/assets/plugins/sidemenu/sidemenu.js") }}></script>

<!-- Custom scroll bar Js-->
<script src={{ asset("common/admin/assets/plugins/pscrollbar/pscrollbar.js") }}></script>
<script src={{ asset("common/admin/assets/plugins/pscrollbar/pscroll.js") }}></script>

<!--Counters -->
<script src={{ asset("common/admin/assets/plugins/counters/counterup.min.js") }}></script>
<script src={{ asset("common/admin/assets/plugins/counters/waypoints.min.js") }}></script>

<!-- CHARTJS CHART -->
<script src={{ asset("common/admin/assets/plugins/chart/Chart.bundle.js") }}></script>
<script src={{ asset("common/admin/assets/plugins/chart/utils.js") }}></script>

<!--Morris.js Charts Plugin -->
<script src={{ asset("common/admin/assets/plugins/morris/raphael-min.js") }}></script>
<script src={{ asset("common/admin/assets/plugins/morris/morris.js") }}></script>

<!-- Index Scripts -->
<script src={{ asset("common/admin/assets/js/index2.js") }}></script>

<!-- Custom Js-->
<script src={{ asset("common/admin/assets/js/admin-custom.js") }}></script>

<!-- WYSIWYG Editor js -->
<script src={{ asset("common/assets/plugins/wysiwyag/jquery.richtext.js") }}></script>
<script src={{ asset("common/assets/js/formeditor.js") }}></script>

<!-- <script src="{{ asset('common/assets/ckeditor/ckeditor.js') }}"></script> -->
<script src="{{ asset('common/assets/multi-select/js/bootstrap-multiselect.js') }}"></script>
<link rel="stylesheet" href="{{ asset('common/assets/multi-select/css/bootstrap-multiselect.css')}}" type="text/css" />


<!--Select2 js -->
<script src={{ asset("common/assets/plugins/select2/select2.full.min.js") }}></script>

<script src={{url('https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js')}}></script>
<script src={{url('https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js')}}></script>
<script src={{url('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js')}}></script>
<script src={{url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js')}}></script>
<script src={{url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js')}}></script>
<script src={{url('https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js')}}></script>
<script src={{url('https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js')}}></script>
<!-- <script src={{url('https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js')}}></script>
<script type="text/javascript" src="{{url('https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js')}}"></script> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<input type="hidden" id="csrf" value="{{ csrf_token() }}">

<script>
    //datatable
    var table = $(document).ready(function() {
        $('.table').DataTable({
            "lengthMenu": [
                [10, 25, 50, 75, -1],
                [10, 25, 50, 75, "All"]
            ],
            dom: '<"wrapper"lBfrtip>',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],

            // columnDefs: [ {
            //     orderable: false,
            //     'checkboxes': {
            //     'selectRow': true,
            //     className: 'select-checkbox',
            //  },

            //     targets:   0
            // } ],
            // select: {
            //     style:    'os',
            //     selector: 'td:first-child'
            // },
            // order: [[ 1, 'asc' ]]


        });
    })



    //ckeditor
    // CKEDITOR.replace("course_description");
    // CKEDITOR.replace("course_brief_description");
    // CKEDITOR.replace("syllabus_course_content");
    // CKEDITOR.replace("trainer_introduction");
    // CKEDITOR.replace("bootcamp_description");
    // CKEDITOR.replace("exam_information");
    // CKEDITOR.replace("benefits");
    // CKEDITOR.replace("course_faq_detail");
    // CKEDITOR.replace("description");

    $('.multi-select').multiselect();
    $('.multi-select').multiselect();


    //single selected image display
    $('#image').on('change', function() {
        readURL(this);
    })

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            debugger
            reader.onload = function(e) {
                $('#set-image').attr('src', e.target.result);
                $('.image-name').text(input.files[0].name)
                $('#image-size').text(Math.round(input.files[0].size / 1024) + " Kb");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#image').on('change', function() {
        readURL(this);
    })

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            debugger
            reader.onload = function(e) {
                $('#set-image').attr('src', e.target.result);
                $('.image-name').text(input.files[0].name)
                $('#image-size').text(Math.round(input.files[0].size / 1024) + " Kb");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    //multi images display
    $('.multi-image-selector').on('change', function() {
        debugger
        readMultiURL(this);
    })

    function readMultiURL(input) {
        if (input.files && input.files.length > 0) {
            let selected = $(input).closest('.multi-image').find('.multi-image-selected');
            // selected.find('.default').remove()
            selected.empty()

            for (let i = 0; i < input.files.length; i++) {
                var reader = new FileReader();
                debugger
                reader.onload = function(e) {
                    if (input.files[i].type == 'application/pdf')
                        selected.append(`<a download="" href=${e.target.result} class="w73 h73 border p-0">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>`)
                    else
                        selected.append(`<img src=${e.target.result} alt="img" class="w73 h73 border p-0" />`);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    //delete confirmation sweetalert
    $('.warning').on('click', function(event) {
        debugger
        event.preventDefault(); // prevent form submit
        var form = $(this).parents('form');
        debugger
        swal({
            title: "Are you sure?",
            text: "But you won't be able to retrieve this file.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#ec296b",
            confirmButtonText: "Confirm",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(value) {
            debugger
            if (!!value.value) {
                form.submit()
            }
        });
    });

    //multi images display update time
    $('.multi-image-selector-edit').on('change', function() {
        debugger
        readMultiURLEdit(this);
    })

    function readMultiURLEdit(input) {
        if (input.files && input.files.length > 0) {
            let selected = $(input).closest('.multi-image-edit').find('.multi-image-selected-edit');
            // selected.find('.default').remove()
            // selected.empty()

            for (let i = 0; i < input.files.length; i++) {
                var reader = new FileReader();
                debugger
                reader.onload = function(e) {
                    selected.append(`<div class="p-2 border mb-4">
                                <div class="upload-images d-flex">
                                    <div>
                                        <img src=${e.target.result} alt="img" class="w73 h73 border p-0" />
                                    </div>
                                </div>
                            </div>`)
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    //next tab on continue
    $('#continue').on('click', function(event) {
        debugger
        let active = $('#form').find('.tab-pane.active')
        let next = active.next('.tab-pane')
        debugger
        if (next.length != 0) {
            active.removeClass('active')
            $('.nav.panel-tabs').find('a[href="#' + active[0].id + '"]').removeClass('active')
            next.addClass('active')
            $('.nav.panel-tabs').find('a[href="#' + next[0].id + '"]').addClass('active')
        }
    });

    //prev tab on previous
    $('#previous').on('click', function(event) {
        let active = $('#form').find('.tab-pane.active')
        let prev = active.prev('.tab-pane')
        debugger
        if (prev.length != 0) {
            active.removeClass('active')
            $('.nav.panel-tabs').find('a[href="#' + active[0].id + '"]').removeClass('active')
            prev.addClass('active')
            $('.nav.panel-tabs').find('a[href="#' + prev[0].id + '"]').addClass('active')
        }
    });


    $('#checkall').click(function(){
      if($(this).is(':checked')){
         $('.check').prop('checked', true);
      }else{
         $('.check').prop('checked', false);
      }
   });

    //Delete multiple
    $("#delete-all").on('click', function(event) {
                var deleteids_arr = [];

                $("input:checkbox[class=check]:checked").each(function() {
                    deleteids_arr.push($(this).val());
                });
                debugger
                if (deleteids_arr.length > 0) {

                    // Confirm alert
                    var confirmdelete = confirm("Do you really want to Delete records?");
                    if (confirmdelete == true) {
                        let val = $('.checkall').val()
                        let url;
                        switch(val){
                            case "course":
                                url = '/admin/delete-courses'
                                break
                            case "category":
                                url = '/admin/delete-categories'
                                break
                            case "enquiry":
                                url = '/admin/delete-enquiries'
                                break
                            case "review":
                                url = '/admin/delete-reviews'
                                break
                            default:
                                break
                        }
                        $.ajax({
                                  url: url,
                                  type: 'post',
                                  headers: {
                                    'X-CSRF-TOKEN': $("#csrf").val()
                                  },
                                  data: {deleteIds: deleteids_arr},
                                  success: function(response){
                                      debugger
                                      location.reload();
                                  },
                                  error: function (err) {

                                  }
                                });
                                }
                            }
                        });
</script>
