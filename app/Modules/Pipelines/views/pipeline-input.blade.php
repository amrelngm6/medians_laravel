@php $rand = rand(1, 9) @endphp

    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row w-full">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Pipeline</span>
        </label>
        <!--end::Label-->
        <div class="select-placeholder w-full" 
            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Select Pipeline" >
            <!-- <label for="assigned" class="control-label">Assigned To</label> -->
            <select id="name-filter{{$rand}}" name="pipeline_id" placeholder="A" data-live-search="true" 
                class="name-filter filter-on-change with-ajax border border-gray-300 form-control form-control-solid ">
            </select>
        </div>
    </div>
    <!--end::Input group-->
    
    
@section('search-scripts')
<script>
        
        
        jQuery('.name-filter').selectpicker({
            liveSearch:true,
            // mobile:true,
            tickIcon:'glyphicon-ok',
            showTick: true,
            selectOnTab:true,
        })
        .filter(".with-ajax")
        .ajaxSelectPicker({
        ajax: {
          url: '{{route("Pipeline.search-input")}}?_token={{csrf_token()}}', // Replace with your API endpoint
          data: function () {
            @php $q = '{{{q}}}' @endphp
            return {
              name: '{{$q}}' // The search query
            };
          },
        },
        preprocessData: function (response) {
            var contacts = [];
            var len = response.length;
            for(var i = 0; i < len; i++){
                var curr = response[i];
                contacts.push(
                {
                    'value': curr.id,
                    'text': curr.name,
                    'data': {
                        'icon': 'bx bx-outline',
                        'subtext': '('+curr.stages_count+') Stages'
                    },
                    'disabled': false
                });

            }
            return contacts;

        },
        preserveSelected: false, // Preserve selected items
        liveSearch: true // Enable live search
      });

      jQuery(document).on('change', '#name-filter{{$rand}}', async function(){
        if (jQuery(this).val())
        {
            let res = await fetch('/pipelines/stage-search-input/'+jQuery(this).val());
            res.text().then(data=> {
                jQuery(element).html(data)
            })   
        }
        alert()
      });

</script>
@endsection